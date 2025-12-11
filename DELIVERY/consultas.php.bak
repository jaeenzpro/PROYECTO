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

$alerta = "";

// ======================================
// GUARDAR CONSULTA CON RELACIÓN A AREA
// ======================================
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"], $_POST["correo"], $_POST["id_area"], $_POST["mensaje"])) {
  $nombre = $conn->real_escape_string(trim($_POST["nombre"]));
  $correo = $conn->real_escape_string(trim($_POST["correo"]));
  $id_area = (int) $_POST["id_area"];
  $mensaje = $conn->real_escape_string(trim($_POST["mensaje"]));

  // Verificar si el área existe
  $check_area = $conn->query("SELECT id_area FROM area_atencion WHERE id_area = $id_area");
  if ($check_area && $check_area->num_rows > 0) {
      $sql_insert = "INSERT INTO consultas (id_area, nombre_cliente, correo_cliente, mensaje)
                     VALUES ($id_area, '$nombre', '$correo', '$mensaje')";
      if ($conn->query($sql_insert)) {
        $alerta = "✅ Tu consulta fue enviada correctamente.";
      } else {
        $alerta = "❌ Error al enviar la consulta: " . $conn->error;
      }
  } else {
      $alerta = "⚠️ El área seleccionada no existe. Verifica la tabla 'area_atencion'.";
  }
}

// ======================================
// OBTENER ÁREAS DE ATENCIÓN
// ======================================
$sql_areas = "SELECT * FROM area_atencion ORDER BY nombre_area";
$res_areas = $conn->query($sql_areas);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Consultas - Pollería KroChicken</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      color: #2d3436;
    }

    .consulta-box {
      max-width: 800px;
      background: #fff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      margin: 60px auto;
    }

    .logo {
      width: 120px;
      margin-bottom: 10px;
    }

    h2 { color: #d63031; font-weight: bold; }

    .btn-enviar {
      background-color: #d63031;
      color: white;
      border: none;
      border-radius: 10px;
      padding: 12px 20px;
      font-weight: bold;
    }
    .btn-enviar:hover { background-color: #e17055; }

    .btn-volver {
      background-color: #636e72;
      color: white;
      border: none;
      border-radius: 10px;
      padding: 12px 20px;
      font-weight: bold;
      text-decoration: none;
      display: inline-block;
      width: 100%;
    }
    .btn-volver:hover { background-color: #2d3436; color: #fff; }

    .alerta {
      background-color: #ffeaa7;
      border-left: 5px solid #fdcb6e;
      padding: 10px;
      border-radius: 8px;
      margin-bottom: 15px;
      color: #2d3436;
    }

    /* ======== CARRUSEL ESTILOS ======== */
    .carousel-item img {
      width: 100%;
      height: 450px; /* altura moderada */
      object-fit: cover; /* recorta sin deformar */
      filter: brightness(70%); /* oscurece imagen para destacar texto */
    }

    .carousel-caption {
      bottom: 20%;
      background: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 10px;
    }

    .carousel-caption h5 {
      font-size: 2rem;
      font-weight: bold;
      color: #fdcb6e;
    }

    .carousel-caption p {
      font-size: 1.1rem;
      color: #fff;
    }

    @media (max-width: 768px) {
      .carousel-item img {
        height: 300px;
      }
      .carousel-caption h5 {
        font-size: 1.3rem;
      }
      .carousel-caption p {
        font-size: 0.9rem;
      }
    }

    footer {
      background-color: #2d3436;
      color: #fff;
      padding: 40px 0;
      text-align: center;
      margin-top: 80px;
    }

    footer a {
      color: #fdcb6e;
      text-decoration: none;
    }

    footer a:hover {
      color: #e17055;
    }

    .social-icons i {
      font-size: 24px;
      margin: 0 10px;
      color: #fdcb6e;
    }

    .social-icons i:hover {
      color: #e17055;
    }
  </style>
</head>

<body>

<!-- ======================================
     CARRUSEL DE IMÁGENES
====================================== -->
<div id="carouselKroChicken" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://buenazo.cronosmedia.glr.pe/original/2023/07/14/64ac3e8c599470217672a906.jpg" alt="Promoción 1">
      <div class="carousel-caption">
        <h5>¡Sabor auténtico a la brasa!</h5>
        <p>Consulta y disfruta nuestras promociones especiales 🍗🔥</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.accesoperu.com/wp-content/uploads/2024/07/001084232W-1.jpg" alt="Promoción 2">
      <div class="carousel-caption">
        <h5>Pollos crocantes y jugosos</h5>
        <p>Atención rápida y amable en todas las áreas</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://aromasdelperu.cl/wp-content/uploads/2025/06/portada3-1.png" alt="Promoción 3">
      <div class="carousel-caption">
        <h5>Tu consulta es importante</h5>
        <p>Estamos aquí para atenderte mejor 💬</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselKroChicken" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselKroChicken" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- ======================================
     FORMULARIO DE CONSULTAS
====================================== -->
<div class="consulta-box text-center">
  <img src="https://previews.123rf.com/images/mrcocoa/mrcocoa1605/mrcocoa160501550/55943855-online-consulting-icon-suitable-for-info-graphics-websites-and-print-media-colorful-vector-flat.jpg"
       alt="Logo KroChicken" class="logo">
  <h2>Consultas del Cliente</h2>
  <p class="text-muted mb-4">Selecciona el área correspondiente para tu consulta 🍗</p>

  <?php if (!empty($alerta)): ?>
    <div class="alerta"><?= htmlspecialchars($alerta) ?></div>
  <?php endif; ?>

  <form action="" method="POST">
    <div class="mb-3 text-start">
      <label class="form-label">Nombre completo</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3 text-start">
      <label class="form-label">Correo electrónico</label>
      <input type="email" name="correo" class="form-control" required>
    </div>

    <div class="mb-3 text-start">
      <label class="form-label">Área de atención</label>
      <select class="form-select" name="id_area" required>
        <option value="">-- Selecciona un área --</option>
        <?php while ($row = $res_areas->fetch_assoc()): ?>
          <option value="<?= $row['id_area'] ?>"><?= htmlspecialchars($row['nombre_area']) ?></option>
        <?php endwhile; ?>
      </select>
    </div>

    <div class="mb-3 text-start">
      <label class="form-label">Mensaje</label>
      <textarea name="mensaje" class="form-control" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
    </div>

    <button type="submit" class="btn-enviar w-100 mt-3">Enviar consulta</button>
    <a href="index.php" class="btn-volver w-100 mt-3">← Volver al inicio</a>
  </form>
</div>

<!-- ======================================
     FOOTER
====================================== -->
<footer>
  <div class="container">
    <p class="mb-2">🍗 <strong>Pollería KroChicken</strong> — Sabor y atención de primera</p>
    <p class="mb-2">📍 Av. Los Sabores #321, Lima | ☎️ (01) 345-6789 | ✉️ contacto@krochicken.pe</p>
    <div class="social-icons mb-3">
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>
      <a href="#"><i class="bi bi-whatsapp"></i></a>
    </div>
    <p class="text-light small mb-0">© <?= date('Y') ?> KroChicken. Todos los derechos reservados.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
