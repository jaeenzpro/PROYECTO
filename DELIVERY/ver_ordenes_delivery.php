<?php
// ==========================================
// 📦 Conexión a la base de datos
// ==========================================
$conexion = new mysqli("localhost", "root", "", "pollos_delivery");

if ($conexion->connect_error) {
  die("❌ Error de conexión: " . $conexion->connect_error);
}

// ==========================================
// 📋 Consulta SQL para obtener las órdenes
// ==========================================
$sql = "SELECT o.id_orden, c.nombre AS cliente, c.telefono, 
               o.direccion_entrega, o.metodo_pago, o.total, 
               o.estado, o.fecha_orden
        FROM ordenes_delivery o
        INNER JOIN clientes c ON o.id_cliente = c.id_cliente
        ORDER BY o.fecha_orden DESC";

$resultado = $conexion->query($sql);

if (!$resultado) {
  die("❌ Error en la consulta SQL: " . $conexion->error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Órdenes de Delivery - Pollos Delivery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <h2 class="mb-4 text-center text-warning fw-bold">
    <i class="bi bi-bicycle me-2"></i> Órdenes de Delivery
  </h2>

  <div class="table-responsive shadow-sm rounded">
    <table class="table table-bordered table-hover bg-white">
      <thead class="table-warning text-center">
        <tr>
          <th>ID</th>
          <th>Cliente</th>
          <th>Teléfono</th>
          <th>Dirección de Entrega</th>
          <th>Método de Pago</th>
          <th>Total (S/)</th>
          <th>Estado</th>
          <th>Fecha</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php
        if ($resultado->num_rows > 0) {
          while ($fila = $resultado->fetch_assoc()) {
            $badgeColor = match ($fila['estado']) {
              'Pendiente' => 'secondary',
              'En preparación' => 'info',
              'En camino' => 'warning',
              'Entregado' => 'success',
              'Cancelado' => 'danger',
              default => 'secondary'
            };

            echo "<tr>
                    <td>{$fila['id_orden']}</td>
                    <td>{$fila['cliente']}</td>
                    <td>{$fila['telefono']}</td>
                    <td>{$fila['direccion_entrega']}</td>
                    <td>{$fila['metodo_pago']}</td>
                    <td>{$fila['total']}</td>
                    <td><span class='badge bg-$badgeColor'>{$fila['estado']}</span></td>
                    <td>{$fila['fecha_orden']}</td>
                  </tr>";
          }
        } else {
          echo "<tr><td colspan='8' class='text-muted'>No hay órdenes registradas aún.</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <div class="text-center mt-4">
    <a href="index.php" class="btn btn-outline-warning px-4 rounded-pill">
      <i class="bi bi-arrow-left-circle"></i> Volver al inicio
    </a>
  </div>
</div>

</body>
</html>

<?php $conexion->close(); ?>
