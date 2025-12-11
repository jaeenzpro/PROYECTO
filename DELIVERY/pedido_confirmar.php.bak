<?php
/* ============ CONFIGURA TUS CREDENCIALES ============ */
$DB_HOST = '127.0.0.1';       // En XAMPP/WAMP suele funcionar 127.0.0.1
$DB_NAME = 'delivery_ya';    // Tu base de datos
$DB_USER = 'pedidos';            // Usuario
$DB_PASS = '';                // Password (vacío en XAMPP)
$REDIRECT_URL = 'http://localhost/PROYECTO/KFC/index.html'; // A dónde volver tras el alert
/* ==================================================== */

ini_set('display_errors', 1);
error_reporting(E_ALL);

function fail($msg){
  echo "<script>alert(".json_encode('❌ '.$msg).");history.back();</script>";
  exit;
}

try{
  $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4",
    $DB_USER, $DB_PASS, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
  );
}catch(Throwable $e){
  fail('Error de conexión: '.$e->getMessage());
}

/* Crear tabla si no existe */
try{
  $pdo->exec("
    CREATE TABLE IF NOT EXISTS `pedidosya` (
      `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
      `producto`  VARCHAR(200) NOT NULL,
      `precio`    DECIMAL(10,2) NOT NULL,
      `cantidad`  INT UNSIGNED NOT NULL DEFAULT 1,
      `nombre`    VARCHAR(120) NOT NULL,
      `telefono`  VARCHAR(40)  NOT NULL,
      `direccion` VARCHAR(255) NOT NULL,
      `imagen`    VARCHAR(255) DEFAULT NULL,
      `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`),
      KEY `idx_telefono` (`telefono`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  ");
}catch(Throwable $e){
  fail('No se pudo preparar la tabla: '.$e->getMessage());
}

/* Solo acepta POST del formulario */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  fail('Solicitud inválida.');
}

/* Recibir y validar */
$producto  = trim($_POST['producto']  ?? '');
$precio    = floatval($_POST['precio'] ?? 0);
$cantidad  = max(1, intval($_POST['cantidad'] ?? 1));
$nombre    = trim($_POST['nombre']    ?? '');
$telefono  = trim($_POST['telefono']  ?? '');
$direccion = trim($_POST['direccion'] ?? '');
$imagen    = trim($_POST['imagen']    ?? '');

if ($producto==='' || $precio<=0 || $cantidad<=0 || $nombre==='' || $telefono==='' || $direccion==='') {
  fail('Completa todos los campos y un precio/cantidad válidos.');
}

/* Insertar */
try{
  $stmt = $pdo->prepare("
    INSERT INTO `pedidosya`
      (`producto`,`precio`,`cantidad`,`nombre`,`telefono`,`direccion`,`imagen`)
    VALUES
      (:producto,:precio,:cantidad,:nombre,:telefono,:direccion,:imagen)
  ");
  $stmt->execute([
    ':producto'  => $producto,
    ':precio'    => $precio,
    ':cantidad'  => $cantidad,
    ':nombre'    => $nombre,
    ':telefono'  => $telefono,
    ':direccion' => $direccion,
    ':imagen'    => $imagen !== '' ? $imagen : null,
  ]);

  // ✅ Alerta de éxito y redirección
  echo "<script>
    alert('✅ Sus datos han sido enviados a la empresa de KFC');
    window.location = ".json_encode($REDIRECT_URL).";
  </script>";
  exit;

}catch(Throwable $e){
  fail('No se pudo guardar el pedido: '.$e->getMessage());
}
const res = await fetch('api/crear_pedido.php', {
  method: 'POST',
  headers:{ 'Content-Type':'application/json' },
  body: JSON.stringify(payload)
});
const data = await res.json();
if (res.ok && data?.ok){
  showBuyAlert('success', '✅ Pedido registrado correctamente.');
  setTimeout(()=> bootstrap.Modal.getInstance($('#buyModal'))?.hide(), 1200);
  form.reset(); form.classList.remove('was-validated');
}else{
  showBuyAlert('danger', '❌ No se pudo registrar el pedido. ' + (data?.error || 'Intenta de nuevo.') + (data?.stage ? ' [Paso: '+data.stage+']' : ''));
}
