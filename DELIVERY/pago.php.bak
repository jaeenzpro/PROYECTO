<?php
// === CONEXIÓN A LA BASE DE DATOS ===
$conexion = new mysqli("localhost", "root", "", "pollos_delivery");
if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

/*
  ✅ ARREGLO CLAVE:
  - SOLO compra cuando llega POST con "finalizar=1".
*/
if (
    $_SERVER["REQUEST_METHOD"] === "POST"
    && isset($_POST["carrito"])
    && isset($_POST["finalizar"])
) {

  date_default_timezone_set("America/Lima");

  $carrito = json_decode($_POST["carrito"], true);

  // DNI genérico para no pedirlo al cliente
  $dni  = "00000000";
  $hora = date("Y-m-d H:i:s");

  // 🧍 Cliente genérico si no existe
  $existe = $conexion->query("SELECT dni FROM clientes WHERE dni = '$dni'");
  if ($existe->num_rows === 0) {
    $conexion->query("INSERT INTO clientes (dni, nombre) VALUES ('$dni', 'Cliente Online')");
  }

  // 1️⃣ Insertar pedido principal (recibo_pedido)
  $conexion->query("INSERT INTO recibo_pedido (dni, hora) VALUES ('$dni', '$hora')");
  $id_recibo = $conexion->insert_id;

  // 2️⃣ Insertar detalles (detalle_pedido)
  foreach ($carrito as $item) {
    $producto = $conexion->real_escape_string($item["nombre"]);
    $cantidad = (int)$item["cantidad"];
    $precio   = (float)$item["precio"];
    $subtotal = $precio * $cantidad;
    $imagen   = isset($item["img"]) ? $conexion->real_escape_string($item["img"]) : null;

    $conexion->query("
      INSERT INTO detalle_pedido (id_recibo, producto, cantidad, precio, subtotal, imagen)
      VALUES ('$id_recibo', '$producto', '$cantidad', '$precio', '$subtotal', '$imagen')
    ");
  }

  echo "<script>
        localStorage.removeItem('carrito');
        localStorage.removeItem('cart');
        alert('✅ Pedido registrado. ¡Gracias por tu compra!');
        window.location.href = 'index.php';
      </script>";
  exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Pago - KroChicken</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
body {
  background-color: #0a0a0a;
  color: #f8f8f8;
  font-family: 'Poppins', sans-serif;
}
.container {
  max-width: 850px;
  margin-top: 50px;
  background: #1b1b1b;
  padding: 35px;
  border-radius: 18px;
  box-shadow: 0 4px 15px rgba(255, 193, 7, 0.2);
  position: relative;
}
h2 {
  color: #ffc107;
  font-weight: 600;
  text-align: center;
  margin-bottom: 15px;
  text-shadow: 0 0 8px rgba(255,193,7,0.6);
}
.subtitulo-hora {
  text-align: center;
  margin-bottom: 25px;
  font-size: 0.95rem;
}
#horaActual {
  color: #ffc107;
  font-weight: 600;
}
th { background: #ffc107; color: #000; }
.table { color: #fff; border-color: #444; }
tfoot td { font-weight: bold; color: #ffc107; }
.product-img {
  width: 70px; height: 70px; object-fit: cover; border-radius: 8px;
  border: 2px solid #ffc107;
}
.btn-primary {
  background-color: #ffc107; border: none; color: #000; font-weight: 600; transition: all 0.3s;
}
.btn-primary:hover { background-color: #ffca2c; transform: scale(1.05); }
.btn-secondary {
  background-color: #333; border: none; color: #fff; transition: 0.3s;
}
.btn-secondary:hover { background-color: #444; }
.btn-success {
  background-color: #ff5722; border: none; transition: 0.3s;
}
.btn-success:hover { background-color: #e64a19; transform: scale(1.05); }

/* tracking */
#trackingPedido {
  border-radius: 12px;
  border: 1px dashed #ffc107;
  padding: 15px;
  margin-top: 15px;
  background: #121212;
}
#trackingBarra { height: 8px; border-radius: 999px; }

.modal-body{ max-height: 80vh; overflow-y: auto; }
</style>
</head>
<body>

<div class="container">
  <h2>🔥 Resumen de tu Pedido - KroChicken</h2>
  <p class="subtitulo-hora">
    ⏰ Hora actual: <span id="horaActual"></span>
  </p>

  <table class="table table-bordered text-center align-middle">
    <thead>
      <tr>
        <th>Imagen</th>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio (S/)</th>
        <th>Subtotal (S/)</th>
      </tr>
    </thead>
    <tbody id="tablaCarrito"></tbody>
    <tfoot>
      <tr>
        <td colspan="4" class="text-end">Total a Pagar:</td>
        <td id="totalPagar">0.00</td>
      </tr>
    </tfoot>
  </table>

  <div class="text-center mt-4 d-flex justify-content-center gap-3 flex-wrap">
    <a href="index.php" class="btn btn-secondary">⬅️ Seguir Comprando</a>
    <button class="btn btn-success" id="btnPagar">💳 Finalizar Compra</button>
    <button class="btn btn-primary" id="btnImprimir">🖨️ Imprimir Pedido</button>
  </div>

  <!-- ✅ Formulario oculto SOLO para finalizar -->
  <form id="formPago" method="POST" class="d-none">
    <input type="hidden" name="carrito" id="carritoData">
    <input type="hidden" name="dni" id="dniData" value="00000000">
    <input type="hidden" name="finalizar" value="1">

    <!-- extras -->
    <input type="hidden" name="metodo_pago" id="metodoPagoData">
    <input type="hidden" name="telefono" id="telefonoData">
    <input type="hidden" name="direccion" id="direccionData">
    <input type="hidden" name="distrito" id="distritoData">
  </form>
</div>

<!-- ===================== -->
<!-- MODAL: MÉTODO PAGO -->
<!-- ===================== -->
<div class="modal fade" id="modalMetodo" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-dark text-light">
      <div class="modal-header border-0">
        <h5 class="modal-title">💳 Elige tu método de pago</h5>
        <button type="button" class="btn-close btn-close-white"
                data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">

        <div class="d-flex gap-3 flex-wrap justify-content-center">
          <button class="btn btn-warning fw-bold" id="btnElegirYape">
            📲 Pagar con Yape
          </button>
          <button class="btn btn-success fw-bold" id="btnElegirContra">
            💵 Pago contra entrega
          </button>
        </div>

        <hr class="border-warning my-4">

        <!-- ===================== -->
        <!-- SECCIÓN YAPE -->
        <!-- ===================== -->
        <div id="seccionYape" style="display:none;">
          <h5 class="text-warning">📲 Yape</h5>
          <p>Escanea el QR para pagar:</p>

          <div class="text-center">
            <img src="img/yape.jpg" width="400" height="400"
                 alt="QR Yape"
                 class="rounded-3 border border-warning">
          </div>

          <div class="text-center mt-3">
            <p class="mb-2 fw-bold">📌 Comunícate a este número:</p>
            <a href="https://wa.me/51953744310"
               target="_blank"
               class="btn btn-warning fw-bold w-100"
               id="btnConfirmarYape">
              📲 WhatsApp +51 953 744 310
            </a>
          </div>
        </div>

        <!-- ===================== -->
        <!-- SECCIÓN CONTRAENTREGA -->
        <!-- ===================== -->
        <div id="seccionContra" style="display:none;">
          <h5 class="text-warning">💵 Contra entrega</h5>

          <form id="formContraEntrega" class="mt-3">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Distrito</label>
                <input type="text"
                       class="form-control bg-dark text-light"
                       id="distritoContra"
                       placeholder="Ej: Los Olivos"
                       required>
              </div>
              <div class="col-12">
                <label class="form-label">Dirección</label>
                <input type="text"
                       class="form-control bg-dark text-light"
                       id="direccionContra"
                       placeholder="Av / Calle + número"
                       required>
              </div>
            </div>

            <button type="submit" class="btn btn-success mt-3 w-100 fw-bold">
              🚀 Aceptar y ver ubicación
            </button>
          </form>

          <!-- MAPA -->
          <div id="contenedorMapa" class="mt-4 d-none">
            <h6>📍 Ubicación de tu entrega</h6>

            <div style="width:100%; height:320px; border:2px solid #ffc107; border-radius:12px; overflow:hidden;">
              <iframe id="mapaIframe"
                      src="about:blank"
                      width="100%"
                      height="320"
                      style="border:0;"
                      loading="lazy"></iframe>
            </div>

            <a id="mapaLink" target="_blank" class="btn btn-outline-warning btn-sm mt-2">
              Ver en Google Maps
            </a>
          </div>

          <!-- TRACKING -->
          <div id="trackingPedido" class="mt-4 d-none">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span>🛵 Tu pedido está llegando...</span>
              <span id="trackingTiempo" class="fw-bold text-warning">01:00</span>
            </div>
            <div class="progress bg-secondary">
              <div id="trackingBarra" class="progress-bar bg-warning"
                   role="progressbar" style="width:0%;"></div>
            </div>
          </div>

          <!-- WHATSAPP FINAL -->
          <div id="bloqueWsap" class="mt-4 d-none text-center">
            <h5 class="text-success">✅ ¡El delivery está afuera!</h5>
            <p class="mb-2">Si aún no llega comunícate al número del repartidor:</p>

            <a id="wsapLink"
               href="https://wa.me/51953744310"
               target="_blank"
               class="btn btn-success fw-bold">
              📲 WhatsApp +51 953 744 310
            </a>

            <p class="text-muted mt-2">Número: +51 953 744 310</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Helpers dinero
const moneyNum = v => parseFloat(String(v).replace(/[^\d.]/g,'')) || 0;
const moneyStr = n => (Number(n)||0).toFixed(2);

// Fix URL imágenes
const fixURL = (u) => {
  if (!u) return 'https://via.placeholder.com/70x70?text=IMG';
  try { return new URL(u, location.href).href; } catch (_) { return u; }
};

function renderResumen() {
  const tabla = document.getElementById('tablaCarrito');
  const totalPagar = document.getElementById('totalPagar');

  let carrito = JSON.parse(localStorage.getItem('carrito') || '[]');

  if (!carrito.length) {
    const cartRaw = JSON.parse(localStorage.getItem('cart') || '[]');
    carrito = cartRaw.map(p => ({
      nombre: p.name,
      precio: p.price,
      cantidad: p.qty,
      img: p.img
    }));
    localStorage.setItem("carrito", JSON.stringify(carrito));
  }

  let total = 0, html = '';

  carrito.forEach(prod => {
    const nombre   = prod.nombre ?? '—';
    const img      = fixURL(prod.img);
    const cantidad = Number(prod.cantidad) > 0 ? Number(prod.cantidad) : 1;
    const precio   = moneyNum(prod.precio);
    const subtotal = precio * cantidad;
    total += subtotal;

    html += `
      <tr>
        <td><img src="${img}" class="product-img" alt=""></td>
        <td>${nombre}</td>
        <td>${cantidad}</td>
        <td>${moneyStr(precio)}</td>
        <td>${moneyStr(subtotal)}</td>
      </tr>`;
  });

  tabla.innerHTML = html || `
    <tr><td colspan="5" class="text-center">Tu carrito está vacío</td></tr>
  `;
  totalPagar.textContent = moneyStr(total);
}

// Hora Perú
function actualizarHora() {
  const opciones = { timeZone: 'America/Lima', hour12: false };
  document.getElementById('horaActual').textContent =
    new Date().toLocaleString('es-PE', opciones);
}
setInterval(actualizarHora, 1000);
actualizarHora();

renderResumen();

/* ABRIR MODAL MÉTODO */
const btnPagar = document.getElementById("btnPagar");
const modalMetodo = new bootstrap.Modal(document.getElementById("modalMetodo"));
btnPagar?.addEventListener("click", ()=>{
  const carrito = JSON.parse(localStorage.getItem("carrito") || "[]");
  if(!carrito.length){
    alert("⚠️ El carrito está vacío.");
    return;
  }

  const normalizado = carrito.map(it => ({
    nombre: it.nombre ?? "—",
    img: fixURL(it.img),
    cantidad: Number(it.cantidad) > 0 ? Number(it.cantidad) : 1,
    precio: moneyNum(it.precio)
  }));
  document.getElementById("carritoData").value = JSON.stringify(normalizado);

  modalMetodo.show();
});

/* SELECCIÓN MÉTODO */
const seccionYape = document.getElementById("seccionYape");
const seccionContra = document.getElementById("seccionContra");
const btnElegirYape = document.getElementById("btnElegirYape");
const btnElegirContra = document.getElementById("btnElegirContra");

btnElegirYape?.addEventListener("click", ()=>{
  seccionYape.style.display = "block";
  seccionContra.style.display = "none";
});
btnElegirContra?.addEventListener("click", ()=>{
  seccionContra.style.display = "block";
  seccionYape.style.display = "none";
});

/* YAPE: abrir WhatsApp y registrar pedido */
document.getElementById("btnConfirmarYape")?.addEventListener("click", (e)=>{
  e.preventDefault();

  document.getElementById("metodoPagoData").value = "YAPE";
  document.getElementById("telefonoData").value = ""; // ya no se pide

  const numero = "51953744310";
  const mensaje = "Hola, hice un pedido por Yape. Quiero coordinar mi pedido.";
  window.open(`https://wa.me/${numero}?text=${encodeURIComponent(mensaje)}`, "_blank");

  document.getElementById("formPago").submit();
});

/* CONTRA ENTREGA */
const formContra = document.getElementById("formContraEntrega");
let timerTracking = null;

formContra?.addEventListener("submit",(e)=>{
  e.preventDefault();

  const distrito = document.getElementById("distritoContra").value.trim();
  const direccion = document.getElementById("direccionContra").value.trim();

  if(!distrito || !direccion){
    alert("🏠 Completa distrito y dirección.");
    return;
  }

  document.getElementById("metodoPagoData").value = "CONTRAENTREGA";
  document.getElementById("telefonoData").value = ""; // ya no se pide
  document.getElementById("direccionData").value = direccion;
  document.getElementById("distritoData").value = distrito;

  const fullAddress = `${direccion}, ${distrito}, Lima, Perú`;
  const urlMapa = "https://www.google.com/maps?output=embed&q=" +
                  encodeURIComponent(fullAddress);

  const contMapa = document.getElementById("contenedorMapa");
  const iframe = document.getElementById("mapaIframe");
  const mapaLink = document.getElementById("mapaLink");

  iframe.src = urlMapa;
  mapaLink.href = "https://www.google.com/maps/search/?api=1&query="+encodeURIComponent(fullAddress);
  contMapa.classList.remove("d-none");
  contMapa.scrollIntoView({behavior:"smooth", block:"start"});

  iniciarTracking(direccion, distrito);
});

function iniciarTracking(direccion, distrito){
  const tracking = document.getElementById("trackingPedido");
  const tiempo = document.getElementById("trackingTiempo");
  const barra = document.getElementById("trackingBarra");
  const bloqueWsap = document.getElementById("bloqueWsap");

  if(timerTracking) clearInterval(timerTracking);

  tracking.classList.remove("d-none");
  tracking.scrollIntoView({behavior:"smooth", block:"start"});

  let restante = 60;
  let transcurrido = 0;

  tiempo.textContent = "01:00";
  barra.style.width = "0%";

  timerTracking = setInterval(()=>{
    restante--;
    transcurrido++;

    const m = String(Math.floor(restante/60)).padStart(2,"0");
    const s = String(restante%60).padStart(2,"0");
    tiempo.textContent = `${m}:${s}`;
    barra.style.width = (transcurrido/60*100)+"%";

    if(restante<=0){
      clearInterval(timerTracking);
      tiempo.textContent = "00:00";
      barra.style.width = "100%";

      bloqueWsap.classList.remove("d-none");
      bloqueWsap.scrollIntoView({behavior:"smooth", block:"start"});

      const numero = "51953744310";
      const mensaje = `Hola, mi pedido era contra entrega. Estoy en ${direccion}, ${distrito}.`;
      window.open(`https://wa.me/${numero}?text=${encodeURIComponent(mensaje)}`, "_blank");

      setTimeout(()=>{
        document.getElementById("formPago").submit();
      }, 4000);
    }
  },1000);
}

// imprimir
document.getElementById('btnImprimir')?.addEventListener('click', () => window.print());

// sync tabs
window.addEventListener('storage', (e) => {
  if (e.key === 'carrito' || e.key === 'cart') renderResumen();
});
</script>

</body>
</html>
