<?php
/* ===== CONFIGURACIÓN ===== */
$DB_HOST = 'localhost';
$DB_NAME = 'pollos_delivery';
$DB_USER = 'root';
$DB_PASS = '';
$REDIRECT_URL = 'http://localhost/PROYECTO/DELIVERY/index.php';
/* ========================== */

ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
  $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
} catch (PDOException $e) {
  die('Error de conexión: ' . $e->getMessage());
}

$err = '';
$success = '';
$nombreGuardado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $dni = trim($_POST['dni'] ?? '');
  $nombre = trim($_POST['nombre'] ?? '');
  $telefono = trim($_POST['telefono'] ?? '');
  $direccion = trim($_POST['direccion'] ?? '');
  $correo = trim($_POST['correo'] ?? '');

  // ==== VALIDACIONES ====
  if ($dni === '' || $nombre === '' || $telefono === '' || $direccion === '') {
    $err = 'Por favor, completa todos los campos obligatorios.';
  } elseif (!preg_match('/^\d{8}$/', $dni)) {
    $err = 'El DNI debe tener exactamente 8 dígitos numéricos.';
  } elseif (!preg_match('/^[0-9]{9}$/', $telefono)) {
    $err = 'El teléfono debe tener exactamente 9 dígitos.';
  } else {
    try {
      // Verificar si ya existe el DNI
      $check = $pdo->prepare("SELECT id_cliente FROM clientes WHERE dni = ?");
      $check->execute([$dni]);
      if ($check->rowCount() > 0) {
        $err = "⚠️ El cliente con DNI $dni ya está registrado.";
      } else {
        // Insertar nuevo cliente
        $stmt = $pdo->prepare("INSERT INTO clientes (dni, nombre, telefono, direccion, correo) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$dni, $nombre, $telefono, $direccion, $correo]);

        $nombreGuardado = htmlspecialchars($nombre);
        $success = "✅ ¡$nombreGuardado, te registraste con éxito en KroChicken!";
      }
    } catch (Throwable $e) {
      $err = 'Error al registrar: ' . $e->getMessage();
    }
  }
}
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KroChicken — Registro de Clientes</title>
<link rel="icon" href="img/favicon.jpg">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=Oswald:wght@600;700&display=swap" rel="stylesheet">
<style>
  body {
    margin: 0; padding: 0;
    background: url('DELIVERY/img/pollo-fondo.jpg') no-repeat center center/cover;
    font-family: 'Inter', sans-serif;
    min-height: 100vh;
    display: flex; justify-content: center; align-items: center;
  }

  .container {
    display: flex;
    width: 90%;
    max-width: 1100px;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.3);
    background: rgba(255, 255, 255, 0.95);
  }

  .left {
    flex: 1;
    background: linear-gradient(145deg, #e4002b, #ffb800);
    color: #fff;
    display: flex; flex-direction: column; align-items: center; justify-content: center;
    padding: 40px; text-align: center;
  }

  .left img {
    width: 140px; height: 140px;
    border-radius: 50%; border: 5px solid #fff; margin-bottom: 20px;
  }

  .left h1 {
    font-family: 'Oswald', sans-serif;
    font-size: 3rem; margin: 0;
  }

  .left h1 span { color: #ffeb3b; }
  .left p { font-weight: 600; font-size: 1.2rem; margin-top: 15px; }

  .right {
    flex: 1.2;
    padding: 40px 50px;
  }

  h2 {
    text-align: center;
    color: #e4002b;
    font-family: 'Oswald', sans-serif;
    font-size: 2rem;
    margin-bottom: 25px;
  }

  label { display: block; font-weight: 600; margin-top: 15px; color: #222; }
  input {
    width: 100%; padding: 12px 15px;
    border-radius: 10px; border: 2px solid #ddd;
    margin-top: 6px; font-size: 15px;
    transition: border-color 0.3s;
  }
  input:focus { border-color: #e4002b; outline: none; }

  button {
    width: 100%;
    background: #ffb800; color: #111;
    border: none; padding: 15px; border-radius: 12px;
    font-weight: 800; font-size: 16px;
    cursor: pointer; margin-top: 25px;
    box-shadow: 0 4px 0 #c18b00;
    transition: 0.3s;
  }
  button:hover { background: #ffe000; transform: scale(1.03); }

  .err {
    background: #ffe5ea; color: #a8001d;
    padding: 10px; border-radius: 10px; font-weight: bold;
    margin-top: 12px; text-align: center;
  }

  .success {
    background: #dfffe0; color: #0a6c1a;
    padding: 15px; border-radius: 10px; font-weight: bold;
    margin-top: 12px; text-align: center;
  }

  @media (max-width: 850px) {
    .container { flex-direction: column; }
    .left, .right { width: 100%; padding: 25px; }
  }
</style>
</head>
<body>

<div class="container">
  <div class="left">
    <img src="img/favicon.jpg" alt="Logo KroChicken">
    <h1>Kro<span>Chicken</span></h1>
    <p>🔥 Sabor, crocancia y tradición a la brasa 🔥</p>
  </div>

  <div class="right">
    <h2>Registro de Cliente</h2>

    <?php if ($err): ?>
      <div class="err"><?= htmlspecialchars($err) ?></div>
    <?php elseif ($success): ?>
      <div class="success"><?= $success ?></div>
      <script>
        localStorage.setItem('cliente_nombre', '<?= addslashes($nombreGuardado) ?>');
        setTimeout(() => { window.location.href = "<?= $REDIRECT_URL ?>"; }, 1500);
      </script>
    <?php else: ?>
      <form method="post" autocomplete="off" id="registroForm">
        <label>DNI</label>
        <input type="text" name="dni" maxlength="8" pattern="[0-9]{8}" placeholder="8 dígitos numéricos" required>

        <label>Nombre completo</label>
        <input type="text" name="nombre" placeholder="Ej. Juan Pérez" required>

        <label>Teléfono</label>
        <input type="tel" name="telefono" maxlength="9" pattern="[0-9]{9}" placeholder="9 dígitos" required>

        <label>Dirección</label>
        <input type="text" name="direccion" placeholder="Distrito / Calle / Referencia" required>

        <label>Correo electrónico (opcional)</label>
        <input type="email" name="correo" placeholder="ejemplo@correo.com">

        <button type="submit">Registrar Cliente 🍗</button>
      </form>
    <?php endif; ?>
  </div>
</div>

</body>
</html>
