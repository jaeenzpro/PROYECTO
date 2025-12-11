<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
date_default_timezone_set('America/Lima');

$DB_HOST='127.0.0.1';
$DB_NAME='pollos_delivery';
$DB_USER='root';
$DB_PASS='';

$err='';
$pedido=[];

if($_SERVER['REQUEST_METHOD']==='POST'){
    $req = [
        'producto'  => trim($_POST['producto'] ?? ''),
        'precio'    => (float)($_POST['precio'] ?? 0),
        'cantidad'  => max(1,(int)($_POST['cantidad'] ?? 1)),
        'nombre'    => trim($_POST['nombre'] ?? ''),
        'telefono'  => trim($_POST['telefono'] ?? ''),
        'direccion' => trim($_POST['direccion'] ?? ''),
        'imagen'    => trim($_POST['imagen'] ?? ''),
    ];

    if($req['producto']==='' || $req['precio']<=0 || $req['cantidad']<=0 || 
       $req['nombre']==='' || $req['telefono']==='' || $req['direccion']===''){
        $err='Faltan datos o hay valores inválidos.';
    } else {
        try{
            $pdo=new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4",$DB_USER,$DB_PASS,
                [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]
            );

            // Crear tabla si no existe
            $pdo->exec("
                CREATE TABLE IF NOT EXISTS pedidosya (
                    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
                    producto VARCHAR(200) NOT NULL,
                    precio DECIMAL(10,2) NOT NULL,
                    cantidad INT UNSIGNED NOT NULL DEFAULT 1,
                    nombre VARCHAR(120) NOT NULL,
                    telefono VARCHAR(40) NOT NULL,
                    direccion VARCHAR(255) NOT NULL,
                    imagen VARCHAR(255) DEFAULT NULL,
                    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                    PRIMARY KEY(id)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
            ");

            // Insertar pedido
            $stmt=$pdo->prepare("
                INSERT INTO pedidosya (producto,precio,cantidad,nombre,telefono,direccion,imagen)
                VALUES (:producto,:precio,:cantidad,:nombre,:telefono,:direccion,:imagen)
            ");
            $stmt->execute([
                ':producto'=>$req['producto'],
                ':precio'=>$req['precio'],
                ':cantidad'=>$req['cantidad'],
                ':nombre'=>$req['nombre'],
                ':telefono'=>$req['telefono'],
                ':direccion'=>$req['direccion'],
                ':imagen'=>($req['imagen'] ? $req['imagen'] : null)
            ]);

            $pedidoId=$pdo->lastInsertId();

            // Leer pedido guardado
            $stmt=$pdo->prepare("SELECT * FROM pedidosya WHERE id=?");
            $stmt->execute([$pedidoId]);
            $pedido=$stmt->fetch();

        } catch(Throwable $e){
            $err='Error en BD: '.$e->getMessage();
        }
    }
} else {
    $err='Acceso inválido. Envía el formulario.';
}

$total= $pedido ? ($pedido['precio']*$pedido['cantidad']) : 0;
$horaCompra= date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Pedido Registrado</title>
<style>
body{background:#111;color:#f5f5f5;font-family:sans-serif;padding:20px}
.card{background:#161616;padding:20px;border-radius:12px;max-width:600px;margin:0 auto}
.prod{width:100%;height:auto;border-radius:8px}
.alert-success{background:#09310d;color:#d7ffde;padding:10px;border-radius:6px;margin-bottom:16px}
.line{display:flex;justify-content:space-between;padding:6px 0;border-bottom:1px dashed #333}
.btn{padding:10px 14px;border-radius:8px;background:#e4002b;color:#fff;text-decoration:none;display:inline-block;margin-top:12px}
</style>
</head>
<body>
<div class="card">
<?php if($err): ?>
    <div class="alert alert-success"><?=$err?></div>
<?php else: ?>
    <div class="alert alert-success">
        ✅ Pedido registrado exitosamente. ¡Llegará pronto!<br>
        Pedido #: <?=$pedido['id']?> • Hora: <?=$pedido['created_at']?>
    </div>

    <img class="prod" src="<?=htmlspecialchars($pedido['imagen']?:'img/p1.jpg')?>" alt="Producto">
    <div class="line"><span>Producto</span><strong><?=htmlspecialchars($pedido['producto'])?></strong></div>
    <div class="line"><span>Cantidad</span><strong><?=htmlspecialchars($pedido['cantidad'])?></strong></div>
    <div class="line"><span>Precio unitario</span><strong>S/ <?=number_format($pedido['precio'],2)?></strong></div>
    <div class="line"><span>Total</span><strong>S/ <?=number_format($total,2)?></strong></div>
    <div class="line"><span>Nombre</span><strong><?=htmlspecialchars($pedido['nombre'])?></strong></div>
    <div class="line"><span>Teléfono</span><strong><?=htmlspecialchars($pedido['telefono'])?></strong></div>
    <div class="line"><span>Dirección</span><strong><?=htmlspecialchars($pedido['direccion'])?></strong></div>

    <div style="margin-top:16px;text-align:center">
        <h4>Paga con Yape</h4>
        <img src="img/yape.jpg" alt="QR Yape" style="width:180px;border-radius:8px">
    </div>

    <a href="index.html" class="btn">Volver al inicio</a>
<?php endif; ?>
</div>
</body>
</html>
