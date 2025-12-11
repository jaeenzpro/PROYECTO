<?php
$DB_HOST = 'localhost';
$DB_NAME = 'pollos_delivery';
$DB_USER = 'root';
$DB_PASS = '';

header('Content-Type: application/json');

try {
  $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
} catch (PDOException $e) {
  echo json_encode(['ok' => false, 'msg' => 'Error de conexión a BD']);
  exit;
}

$dni = $_POST['dni'] ?? '';

if (!$dni || !preg_match('/^\d{8}$/', $dni)) {
  echo json_encode(['ok' => false, 'msg' => 'Formato de DNI inválido']);
  exit;
}

$stmt = $pdo->prepare("SELECT * FROM clientes WHERE dni = ?");
$stmt->execute([$dni]);
$cliente = $stmt->fetch();

if ($cliente) {
  echo json_encode(['ok' => true]);
} else {
  echo json_encode(['ok' => false, 'msg' => 'DNI no encontrado']);
}
?>
