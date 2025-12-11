<?php
header("Content-Type: application/json; charset=utf-8");

$conexion = new mysqli("localhost", "root", "", "pollos_delivery");
if ($conexion->connect_error) {
  echo json_encode(["status" => "error", "msg" => "Error de conexión: " . $conexion->connect_error]);
  exit;
}

if (!isset($_POST['dni'])) {
  echo json_encode(["status" => "error", "msg" => "Falta DNI"]);
  exit;
}

// Si se envía desde el carrito (varios productos)
if (isset($_POST['productos'])) {
  $dni = $conexion->real_escape_string($_POST['dni']);
  $productos = json_decode($_POST['productos'], true);
  $hora = date("H:i:s");

  if (!is_array($productos)) {
    echo json_encode(["status" => "error", "msg" => "Formato de productos inválido"]);
    exit;
  }

  $errores = [];
  foreach ($productos as $p) {
    $nombre = $conexion->real_escape_string($p['name']);
    $cantidad = (int)$p['qty'];
    $precio = (float)$p['price'];
    $total = $precio * $cantidad;

    $sql = "INSERT INTO promociones (dni, producto, cantidad, total, hora)
            VALUES ('$dni', '$nombre', '$cantidad', '$total', '$hora')";
    if (!$conexion->query($sql)) {
      $errores[] = $conexion->error;
    }
  }

  if (count($errores) > 0) {
    echo json_encode(["status" => "error", "msg" => implode(", ", $errores)]);
  } else {
    echo json_encode(["status" => "ok", "msg" => "Compra registrada correctamente."]);
  }

  $conexion->close();
  exit;
}

// Si se envía desde “Pagar Pedido” (solo un producto)
if (isset($_POST['promocion'])) {
  $dni = $conexion->real_escape_string($_POST['dni']);
  $promocion = $conexion->real_escape_string($_POST['promocion']);
  $hora = date("H:i:s");

  $sql = "INSERT INTO promociones (dni, producto, cantidad, total, hora)
          VALUES ('$dni', '$promocion', 1, 0, '$hora')";

  if ($conexion->query($sql)) {
    echo json_encode(["status" => "ok", "msg" => "Compra individual registrada."]);
  } else {
    echo json_encode(["status" => "error", "msg" => $conexion->error]);
  }

  $conexion->close();
  exit;
}

echo json_encode(["status" => "error", "msg" => "No se recibieron datos válidos."]);
?>
