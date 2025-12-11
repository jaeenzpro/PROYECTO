<?php
$conexion = new mysqli("localhost", "root", "", "kfc_delivery");
if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = $_POST['nombre'];
  $comentario = $_POST['comentario'];
  $calificacion = $_POST['calificacion'];

  $sql = "INSERT INTO calificaciones (nombre, comentario, calificacion) VALUES (?, ?, ?)";
  $stmt = $conexion->prepare($sql);
  $stmt->bind_param("ssi", $nombre, $comentario, $calificacion);
  $stmt->execute();
  $stmt->close();

  echo "<script>
          alert('✅ ¡Gracias por calificar nuestro delivery!');
          window.location.href='http://localhost/PROYECTO/KFC/index.html';
        </script>";
}
?>
