<?php
// ======================================
// CONFIGURACIÓN DE CONEXIÓN
// ======================================
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "pollos_delivery";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// ======================================
// CAPTURAR EL ID DEL REPARTIDOR
// ======================================
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// OBTENER INFORMACIÓN DEL REPARTIDOR
$sql = "SELECT * FROM empleados_delivery WHERE id_repartidor = $id";
$result = $conn->query($sql);
if (!$result || $result->num_rows == 0) {
  die("<div style='margin:50px;text-align:center;color:red;font-weight:bold;'>❌ Repartidor no encontrado.</div>");
}
$repartidor = $result->fetch_assoc();

// OBTENER ENTREGAS SI ESTÁ OCUPADO
$sql_entregas = "SELECT * FROM entregas_delivery WHERE id_repartidor = $id";
$entregas = $conn->query($sql_entregas);

// ORIGEN BASE
$origen = "Pollería KroChicken, Lima, Perú";
$origen_enc = urlencode($origen);

// FOTO SEGÚN VEHÍCULO
$vehiculo = strtolower(trim($repartidor['vehiculo']));
switch ($vehiculo) {
  case "moto roja":
    $foto = "https://www.galgo.com/wp-content/uploads/2023/02/shutterstock_1835167639.jpg";
    break;
  case "moto negra":
    $foto = "https://www.shutterstock.com/image-photo/black-female-biker-motorcycle-rider-600nw-1080865877.jpg";
    break;
  case "bicimoto":
    $foto = "https://www.shutterstock.com/image-photo/delivery-man-wearing-blue-uniform-600nw-1728933394.jpg";
    break;
  case "auto gris":
    $foto = "https://www.shutterstock.com/image-photo/portrait-cheerful-delivery-driver-uniform-600nw-1557782201.jpg";
    break;
  case "scooter azul":
    $foto = "https://st2.depositphotos.com/1277251/12399/i/450/depositphotos_123991050-stock-photo-woman-riding-scooter-on-road.jpg";
    break;
  default:
    $foto = "https://via.placeholder.com/400x300?text=Sin+Foto";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Detalles del Repartidor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #ffeaa7, #fab1a0, #74b9ff);
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.15);
      overflow: hidden;
    }
    .zona-img {
      width: 100%;
      border-radius: 15px;
      margin-top: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    .contador {
      font-weight: bold;
      color: #d63031;
    }
  </style>
</head>

<body class="py-4">
  <div class="container">
    <a href="estado_repartidores.php" class="btn btn-secondary mb-4">⬅ Volver</a>

    <div class="card mb-4">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="<?= htmlspecialchars($foto) ?>" class="img-fluid rounded-start" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3><?= htmlspecialchars($repartidor['nombre']) ?></h3>
            <p><strong>Teléfono:</strong> <?= htmlspecialchars($repartidor['telefono']) ?></p>
            <p><strong>Vehículo:</strong> <?= htmlspecialchars($repartidor['vehiculo']) ?></p>
            <p><strong>Zonas de entrega:</strong> <?= htmlspecialchars($repartidor['zona_entrega']) ?></p>
            <span class="badge <?= $repartidor['disponibilidad'] == 'Disponible' ? 'bg-success' : 'bg-warning' ?>">
              <?= htmlspecialchars($repartidor['disponibilidad']) ?>
            </span>
          </div>
        </div>
      </div>
    </div>

    <?php if ($repartidor['disponibilidad'] == 'Ocupado' && $entregas->num_rows > 0): ?>
      <div class="alert alert-warning">
        🚚 <b><?= htmlspecialchars($repartidor['nombre']) ?></b> está realizando entregas en curso:
      </div>

      <table class="table table-bordered bg-white shadow-sm">
        <thead class="table-warning text-center">
          <tr>
            <th>Cliente</th>
            <th>Dirección</th>
            <th>Producto</th>
            <th>Hora de Entrega</th>
            <th>Cuenta regresiva</th>
            <th>Ruta</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($e = $entregas->fetch_assoc()): 
            $direccion_enc = urlencode($e['direccion_cliente'] . ", Lima, Perú");
            $link_ruta = "https://www.google.com/maps/dir/?api=1&origin={$origen_enc}&destination={$direccion_enc}";
            $hora = $e['hora_entrega'] ?? date("Y-m-d H:i:s", strtotime("+15 minutes"));
          ?>
            <tr>
              <td><?= htmlspecialchars($e['cliente']) ?></td>
              <td><?= htmlspecialchars($e['direccion_cliente']) ?></td>
              <td><?= htmlspecialchars($e['producto']) ?></td>
              <td><?= htmlspecialchars(date("H:i:s", strtotime($hora))) ?></td>
              <td class="contador" data-hora="<?= htmlspecialchars($hora) ?>"></td>
              <td><a href="<?= $link_ruta ?>" target="_blank" class="btn btn-outline-primary btn-sm">Ver ruta</a></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>

      <script>
        // Función de cuenta regresiva en tiempo real
        function actualizarContadores() {
          const contadores = document.querySelectorAll('.contador');
          const ahora = new Date().getTime();

          contadores.forEach(td => {
            const horaEntrega = new Date(td.getAttribute('data-hora')).getTime();
            const diff = horaEntrega - ahora;

            if (diff <= 0) {
              td.textContent = "✔ Entregado";
              td.style.color = "green";
            } else {
              const minutos = Math.floor(diff / 60000);
              const segundos = Math.floor((diff % 60000) / 1000);
              td.textContent = `${minutos}m ${segundos}s`;
            }
          });
        }
        setInterval(actualizarContadores, 1000);
        actualizarContadores();
      </script>

    <?php else: ?>
      <div class="alert alert-info">
        🟢 Este repartidor está disponible. Puedes solicitar entrega en sus zonas asignadas.
      </div>
    <?php endif; ?>
  </div>
</body>
</html>

<?php $conn->close(); ?>
