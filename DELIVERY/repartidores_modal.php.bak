<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "pollos_delivery";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

$result = $conn->query("SELECT id, dni, id_recibo, repartidor,hora, fecha FROM repartidores_pedidos ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pedidos de Repartidores</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">
  <h3 class="mb-4 text-center">📦 Pedidos Registrados</h3>

  <?php if ($result && $result->num_rows > 0): ?>
  <table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>DNI</th>
        <th>Repartidor</th>
        <th>Hora</th>
        <th>Fecha</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= htmlspecialchars($row['id']) ?></td>
          <td><?= htmlspecialchars($row['dni']) ?></td>
          <td><?= htmlspecialchars($row['id_recibo']) ?></td>
	      <td><?= htmlspecialchars($row['repartidor']) ?></td>
          <td><?= htmlspecialchars($row['hora']) ?></td>
          <td><?= htmlspecialchars($row['fecha']) ?></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
  <?php else: ?>
    <p class="text-center text-muted">⚠️ No hay pedidos registrados aún.</p>
  <?php endif; ?>
</div>
</body>
</html>
<?php $conn->close(); ?>
