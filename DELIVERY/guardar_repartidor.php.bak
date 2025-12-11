<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "kfc_delivery");
if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

// Capturar datos del formulario
$dni = $_POST['dni'] ?? '';
$repartidor = $_POST['repartidor'] ?? '';
$hora = $_POST['hora'] ?? date("H:i");

// Validar
if (empty($dni) || empty($repartidor)) {
  echo "<script>alert('⚠️ Faltan datos del pedido'); window.history.back();</script>";
  exit;
}

// Insertar datos
$sql = "INSERT INTO repartidores_pedidos (dni, repartidor, hora) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sss", $dni, $repartidor, $hora);

if ($stmt->execute()) {
  echo "<script>alert('✅ Pedido registrado correctamente'); window.location='ver_repartidores.php';</script>";
} else {
  echo "<script>alert('❌ Error al guardar el pedido'); window.history.back();</script>";
}

$stmt->close();
$conexion->close();
?>
