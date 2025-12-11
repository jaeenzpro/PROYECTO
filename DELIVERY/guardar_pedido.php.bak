<?php
// ==========================================
// 🔹 Conexión a la base de datos
// ==========================================
$conexion = new mysqli("localhost", "root", "", "pollos_delivery");
if ($conexion->connect_error) {
  die("❌ Error de conexión: " . $conexion->connect_error);
}

// ==========================================
// 🔹 Verificar si se envió el formulario
// ==========================================
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  date_default_timezone_set("America/Lima"); // 🇵🇪 Hora Perú

  // Recibir datos del formulario
  $dni        = $conexion->real_escape_string($_POST["dni"]);
  $producto   = $conexion->real_escape_string($_POST["producto"]);
  $cantidad   = isset($_POST["cantidad"]) ? (int)$_POST["cantidad"] : 1;
  $precio     = isset($_POST["precio"]) ? (float)$_POST["precio"] : 0.0;
  $repartidor = $conexion->real_escape_string($_POST["repartidor"]);
  $hora       = $conexion->real_escape_string($_POST["hora"]);
  $fecha      = date("Y-m-d H:i:s");

  // ==========================================
  // 🔹 Paso 1: Registrar cliente (si no existe)
  // ==========================================
  $existe = $conexion->query("SELECT dni FROM clientes WHERE dni = '$dni'");
  if ($existe->num_rows === 0) {
    $conexion->query("INSERT INTO clientes (dni, nombre) VALUES ('$dni', 'Cliente Nuevo')");
  }

  // ==========================================
  // 🔹 Paso 2: Crear el recibo del pedido
  // ==========================================
  $conexion->query("INSERT INTO recibo_pedido (dni, hora) VALUES ('$dni', '$fecha')");
  $id_recibo = $conexion->insert_id;

  // ==========================================
  // 🔹 Paso 3: Registrar el detalle del pedido
  // ==========================================
  $subtotal = $precio * $cantidad;
  $conexion->query("
    INSERT INTO detalle_pedido (id_recibo, producto, cantidad, precio, subtotal)
    VALUES ('$id_recibo', '$producto', '$cantidad', '$precio', '$subtotal')
  ");

  // ==========================================
  // 🔹 Paso 4: Registrar en la tabla de repartidores
  // ==========================================
  $conexion->query("
    INSERT INTO repartidores_pedidos (dni, id_recibo, repartidor, hora)
    VALUES ('$dni', '$id_recibo', '$repartidor', '$hora')
  ");

  // ==========================================
  // 🔹 Respuesta al navegador
  // ==========================================
  echo "✅ Pedido guardado correctamente en la base de datos";
} else {
  echo "⚠️ No se recibieron datos válidos.";
}

$conexion->close();
?>
