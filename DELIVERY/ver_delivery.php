<?php
// =======================
// CONFIGURACIÓN DE CONEXIÓN
// =======================
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "pollos_delivery"; // cambia si tu base se llama distinto

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// =======================
// CONSULTA DE EMPLEADOS DELIVERY
// =======================
$sql = "SELECT * FROM empleados_delivery";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Repartidores de Delivery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #ffeaa7, #fab1a0, #74b9ff);
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
    }
    h1 {
      color: #2d3436;
      font-weight: 700;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }
    .card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      transition: all 0.3s ease;
      background-color: #ffffffdd;
      box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }
    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }
    .card img {
      height: 200px;
      object-fit: contain;
      background-color: #f1f2f6;
      padding: 15px;
    }
    .card-body {
      text-align: center;
    }
    .badge {
      font-size: 0.9rem;
      border-radius: 10px;
      padding: 8px 15px;
    }
    .estado-disponible {
      background-color: #55efc4;
      color: #1e272e;
    }
    .estado-ocupado {
      background-color: #fab1a0;
      color: #2d3436;
    }
  </style>
</head>
<body class="py-5">
  <div class="container text-center">
    <h1 class="mb-5"><i class="bi bi-bicycle me-2 text-dark"></i>Repartidores de Delivery</h1>

    <div class="row justify-content-center g-4">
      <?php
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $estadoClase = ($row["disponibilidad"] == "Disponible") ? "estado-disponible" : "estado-ocupado";
              $foto = $row["foto"] ?: "https://via.placeholder.com/400x250?text=Sin+Foto";
              echo '
              <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="card">
                  <img src="' . htmlspecialchars($foto) . '" alt="Foto del repartidor">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">' . htmlspecialchars($row["nombre"]) . '</h5>
                    <p class="mb-1"><i class="bi bi-telephone-fill text-primary"></i> ' . htmlspecialchars($row["telefono"]) . '</p>
                    <p class="mb-1"><i class="bi bi-geo-alt-fill text-danger"></i> ' . htmlspecialchars($row["zona_entrega"]) . '</p>
                    <p class="mb-2"><i class="bi bi-truck text-secondary"></i> ' . htmlspecialchars($row["vehiculo"]) . '</p>
                    <span class="badge ' . $estadoClase . '">' . htmlspecialchars($row["disponibilidad"]) . '</span>
                  </div>
                </div>
              </div>';
          }
      } else {
          echo '<p class="text-muted">No hay repartidores registrados.</p>';
      }
      ?>
    </div>
  </div>
</body>
</html>

<?php $conn->close(); ?>
