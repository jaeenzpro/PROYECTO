<?php
/* ============== deli.php (SIN BASE DE DATOS) ==============
   - Recibe el POST desde tu modal/formulario
   - Muestra una página de confirmación (fondo negro)
   - Con botón para Imprimir
   - Campos esperados (name=""): producto, precio, cantidad, nombre, telefono, direccion, imagen (opcional)
============================================================ */

ini_set('display_errors', 1);
error_reporting(E_ALL);

$posted = ($_SERVER['REQUEST_METHOD'] === 'POST');

$req = [
  'producto'  => trim($_POST['producto']  ?? ''),
  'precio'    => (float)($_POST['precio'] ?? 0),
  'cantidad'  => max(1, (int)($_POST['cantidad'] ?? 1)),
  'nombre'    => trim($_POST['nombre']    ?? ''),
  'telefono'  => trim($_POST['telefono']  ?? ''),
  'direccion' => trim($_POST['direccion'] ?? ''),
  'imagen'    => trim($_POST['imagen']    ?? ''),
];

$err = '';
if ($posted) {
  if ($req['producto']==='' || $req['precio']<=0 || $req['cantidad']<=0 ||
      $req['nombre']==='' || $req['telefono']==='' || $req['direccion']==='') {
    $err = '⚠️ Completa todos los campos y envía precio/cantidad válidos.';
  }
}
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title><?= $posted && !$err ? 'Confirmación de pedido' : 'Enviar Pedido' ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  :root{--kfc-red:#e4002b;--kfc-red-2:#ff364d;--ink:#f5f5f5;--muted:#a7a7a7;--card:#161616}
  *{box-sizing:border-box}
  body{margin:0;font-family:system-ui,Segoe UI,Roboto,Arial}
  .wrap{max-width:980px;margin:28px auto;padding:0 16px}
  .alert{padding:12px 14px;border-radius:10px;margin-bottom:16px}
  .alert-danger{background:#3b0d12;color:#ffd6df;border:1px solid #6b1220}
  .alert-success{background:#09310d;color:#d7ffde;border:1px solid #145c20}

  /* Confirmación (fondo negro) */
  body.dark{background:#111;color:var(--ink)}
  .card{background:var(--card);border:1px solid #262626;border-radius:16px;box-shadow:0 20px 50px rgba(0,0,0,.35)}
  .grid{display:grid;grid-template-columns:360px 1fr;gap:20px}
  .media{padding:16px;border-right:1px solid #222}
  .media img{width:100%;height:auto;border-radius:12px;display:block;object-fit:cover;background:#000}
  .media .yape{margin-top:12px;background:#000;border-radius:12px;padding:10px;text-align:center}
  .media .yape img{max-height:90px}
  .info{padding:16px}
  .title{display:flex;align-items:center;gap:10px;flex-wrap:wrap}
  .chip{background:#0d0d0d;border:1px solid #262626;color:#ddd;padding:6px 10px;border-radius:999px;font-weight:700}
  .row{display:flex;flex-wrap:wrap;gap:12px}
  .col{flex:1 1 260px}
  label{display:block;margin-bottom:6px;color:#ccc}
  input{width:100%;padding:10px 12px;border-radius:10px;border:1px solid #333;background:#0f0f0f;color:#eee}
  input[readonly]{opacity:.9}
  .actions{display:flex;gap:10px;flex-wrap:wrap;margin-top:16px}
  .btn{cursor:pointer;border-radius:10px;border:2px solid #000;font-weight:800;padding:10px 14px}
  .btn-primary{background:var(--kfc-red);color:#fff}
  .btn-primary:hover{background:var(--kfc-red-2)}
  .btn-outline{background:#111;color:#fff;border-color:#333}
  .muted{color:var(--muted)}
  @media (max-width:900px){.grid{grid-template-columns:1fr}.media{border-right:0;border-bottom:1px solid #222}}
  @media print{.actions{display:none !important}body{background:#000}.card{box-shadow:none}}

  /* Formulario simple (fondo claro) */
  body.light{background:#fafafa;color:#111}
  .panel{background:#fff;border:1px solid #eee;border-radius:16px;box-shadow:0 10px 30px rgba(0,0,0,.06);padding:18px}
  .grid2{display:grid;grid-template-columns:1fr 1fr;gap:12px}
  .grid2 .full{grid-column:1 / -1}
  .btn-send{background:var(--kfc-red);color:#fff;border:2px solid #000;border-radius:12px;padding:12px 16px;font-weight:900;cursor:pointer;width:100%}
</style>
</head>

<?php if($posted && !$err): ?>
<body class="dark">
  <div class="wrap">
    <div class="alert alert-success">✅ Sus datos han sido enviados a la empresa de KFC.</div>

    <div class="card">
      <div class="grid">
        <!-- Imagen del producto + Yape -->
        <div class="media">
          <img src="<?=htmlspecialchars($req['imagen'] ?: 'img/p1.jpg')?>" alt="Producto">
          <div class="yape">
            <img src="img/yape.jpg" alt="Pague con Yape">
          </div>
        </div>

        <!-- Datos enviados (solo lectura) -->
        <div class="info">
          <div class="title" style="margin-bottom:8px">
            <h2 style="margin:0"><?=htmlspecialchars($req['producto'])?></h2>
            <span class="chip">S/ <?=number_format((float)$req['precio'],2)?> c/u</span>
            <span class="chip">Cant: <?=htmlspecialchars($req['cantidad'])?></span>
          </div>

          <form onsubmit="return false;">
            <div class="row">
              <div class="col">
                <label>Nombre</label>
                <input readonly value="<?=htmlspecialchars($req['nombre'])?>">
              </div>
              <div class="col">
                <label>Teléfono</label>
                <input readonly value="<?=htmlspecialchars($req['telefono'])?>">
              </div>
            </div>

            <div class="row" style="margin-top:10px">
              <div class="col" style="flex:1 1 100%">
                <label>Dirección de entrega</label>
                <input readonly value="<?=htmlspecialchars($req['direccion'])?>">
              </div>
            </div>

            <div style="margin-top:12px;display:flex;justify-content:flex-end;gap:24px;font-size:18px">
              <div class="muted">Total</div>
              <div style="font-weight:900">S/ <?=number_format((float)$req['precio']*(int)$req['cantidad'],2)?></div>
            </div>

            <div class="actions">
              <button class="btn btn-primary" onclick="window.print()">Imprimir</button>
              <a class="btn btn-outline" href="index.html">Volver al inicio</a>
            </div>

            <div class="muted" style="margin-top:10px">
              Fecha de registro: <?=date('Y-m-d H:i:s')?>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div style="margin-top:18px" class="muted">Ubicación de referencia:</div>
    <div class="card" style="margin-top:8px">
      <iframe loading="lazy" src="https://www.google.com/maps?q=KFC%20Lima&output=embed"
              style="border:0;width:100%;height:320px;border-radius:16px"></iframe>
    </div>
  </div>
</body>

<?php else: ?>
<!-- Si entras directo (GET) o hay error, muestra un pequeño formulario de prueba -->
<body class="light">
  <div class="wrap">
    <?php if($err): ?><div class="alert alert-danger"><?=htmlspecialchars($err)?></div><?php endif; ?>
    <div class="panel">
      <h2 style="margin:0 0 10px">Enviar Pedido (prueba sin BD)</h2>
      <form method="post" class="grid2">
        <div>
          <label>Producto *</label>
          <input name="producto" required placeholder="Mega Delivery - 6 Piezas">
        </div>
        <div>
          <label>Precio (S/.) *</label>
          <input name="precio" type="number" step="0.01" min="0" required placeholder="35.00">
        </div>
        <div>
          <label>Cantidad *</label>
          <input name="cantidad" type="number" min="1" value="1" required>
        </div>
        <div>
          <label>Teléfono *</label>
          <input name="telefono" required placeholder="+51 ...">
        </div>
        <div class="full">
          <label>Nombre *</label>
          <input name="nombre" required placeholder="Nombre completo">
        </div>
        <div class="full">
          <label>Dirección *</label>
          <input name="direccion" required placeholder="Calle, número, referencia…">
        </div>
        <div class="full">
          <label>URL Imagen (opcional)</label>
          <input name="imagen" placeholder="img/p1.jpg o https://...">
        </div>

        <div class="full" style="margin-top:6px">
          <button class="btn-send" type="submit">Confirmar pedido</button>
        </div>
      </form>
      <p class="muted" style="margin-top:10px">Este demo NO guarda en base de datos; solo muestra los datos enviados por POST en una página de confirmación con fondo negro.</p>
    </div>
  </div>
</body>
<?php endif; ?>
</html>
