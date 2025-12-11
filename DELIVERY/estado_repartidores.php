<?php
// =======================
// CONFIGURACIÓN DE CONEXIÓN
// =======================
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "pollos_delivery";

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
      background: linear-gradient(135deg, #f9f871, #feca57, #1dd1a1);
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
    }
    h1 {
      color: #2d3436;
      font-weight: 700;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.15);
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
      transform: translateY(-6px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.25);
    }
    .card img {
      height: 200px;
      object-fit: cover;
    }
    .card-body {
      text-align: center;
      padding: 20px;
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
    .vehiculo-icon {
      font-size: 1.5rem;
      margin-right: 5px;
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
              $vehiculo = strtolower(trim($row["vehiculo"]));
              $estadoClase = ($row["disponibilidad"] == "Disponible") ? "estado-disponible" : "estado-ocupado";

              // Asignar ícono y foto según tipo de vehículo
              switch ($vehiculo) {
                  case "moto roja":
                      $icono = '<i class="bi bi-motorbike text-danger vehiculo-icon"></i>';
                      $foto = "https://www.galgo.com/wp-content/uploads/2023/02/shutterstock_1835167639.jpg";
                      break;
                  case "scooter azul":
                      $icono = '<i class="bi bi-scooter text-primary vehiculo-icon"></i>';
                      $foto = "https://st2.depositphotos.com/1277251/12399/i/450/depositphotos_123991050-stock-photo-woman-riding-scooter-on-road.jpg";
                      break;
                  case "bicimoto":
                      $icono = '<i class="bi bi-bicycle text-info vehiculo-icon"></i>';
                      $foto = "https://www.shutterstock.com/image-photo/delivery-man-wearing-blue-uniform-600nw-1728933394.jpg";
                      break;
                  case "auto gris":
                      $icono = '<i class="bi bi-car-front-fill text-secondary vehiculo-icon"></i>';
                      $foto = "https://www.shutterstock.com/image-photo/portrait-cheerful-delivery-driver-uniform-600nw-1557782201.jpg";
                      break;
                  case "moto negra":
                      $icono = '<i class="bi bi-motorbike text-dark vehiculo-icon"></i>';
                      $foto = "https://www.shutterstock.com/image-photo/black-female-biker-motorcycle-rider-600nw-1080865877.jpg";
                      break;
                  default:
                      $icono = '<i class="bi bi-question-circle text-muted vehiculo-icon"></i>';
                      $foto = "https://via.placeholder.com/400x250?text=Sin+Foto";

              }


              echo '
              <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="card">
				  
                  <img src="' . htmlspecialchars($foto) . '" alt="Foto del repartidor">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">' . htmlspecialchars($row["nombre"]) . '</h5>
                    <p class="mb-1"><i class="bi bi-telephone-fill text-primary"></i> ' . htmlspecialchars($row["telefono"]) . '</p>
                    <p class="mb-1"><i class="bi bi-geo-alt-fill text-danger"></i> ' . htmlspecialchars($row["zona_entrega"]) . '</p>
                    <p class="mb-2">' . $icono . ucfirst(htmlspecialchars($row["vehiculo"])) . '</p>
                    <span class="badge ' . $estadoClase . '">' . htmlspecialchars($row["disponibilidad"]) . '</span>

					<a href="ver_repartidor.php?id=' . $row['id_repartidor'] . '" 
   class="btn btn-outline-primary mt-3 w-100 fw-bold">
   <i class="bi bi-eye-fill"></i> Ver Detalles
</a>
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
