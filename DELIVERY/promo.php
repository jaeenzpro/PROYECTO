<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Promociones - Krochicken</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a2d04b56b6.js" crossorigin="anonymous"></script>
  <style>
    body { background-color: #000; font-family: 'Poppins', sans-serif; color: #fff; }
    .navbar { background-color: #ffcc00; }
    .navbar-brand { color: #000 !important; font-weight: 800; font-size: 1.5rem; }
    .promo-card { border: none; border-radius: 15px; overflow: hidden; background-color: #1a1a1a; color: white; transition: transform 0.3s, box-shadow 0.3s; }
    .promo-card:hover { transform: translateY(-5px); box-shadow: 0 8px 18px rgba(255,204,0,0.3); }
    .promo-img { height: 200px; object-fit: cover; border-bottom: 4px solid #ffcc00; }
    .btn-promo, .btn-cart { background-color: #ffcc00; color: #000; font-weight: bold; border-radius: 10px; }
    .modal-content { background-color: #1a1a1a; color: white; border-radius: 12px; }
    .form-control { background-color: #333; color: #fff; border: 1px solid #555; }
    .form-control:focus { border-color: #ffcc00; box-shadow: 0 0 6px #ffcc00; }
    .cart-img { width: 70px; height: 70px; object-fit: cover; border-radius: 10px; }
    .qty-controls button { min-width:36px; }
    .yape-img { width: 100%; border-radius: 12px; border: 3px solid #ffcc00; }
    .btn-pay { background-color: #28a745; color: #fff; font-weight: bold; border-radius: 10px; margin-top: 10px; }
    .btn-pay:hover { background-color: #218838; }
    #invoice-content { color: #000; }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container d-flex justify-content-between align-items-center">
      <a class="navbar-brand" href="index.php">🍗 Krochicken Promos</a>
      <div>
        <button class="btn btn-dark me-2" onclick="window.location.href='index.php'">
          <i class="fa-solid fa-arrow-left"></i> Volver
        </button>
        <button class="btn btn-cart" data-bs-toggle="modal" data-bs-target="#cartModal">
          <i class="fa-solid fa-cart-shopping"></i> Ver Carrito (<span id="cart-count">0</span>)
        </button>
      </div>
    </div>
  </nav>

  <!-- CATÁLOGO -->
  <div class="container my-5">
    <div class="row g-4" id="promo-container"></div>
  </div>

  <!-- MODAL: ORDENAR -->
  <div class="modal fade" id="buyModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-4">
        <h4 class="text-center mb-3 fw-bold text-warning">🛒 Ordenar Producto</h4>
        <div class="text-center mb-3">
          <img id="buyImage" class="rounded-3" style="width:160px; height:130px; object-fit:cover;">
        </div>
        <form id="buyForm">
          <div class="mb-2">
            <label class="form-label fw-bold">Producto</label>
            <input type="text" id="buyName" class="form-control" readonly>
          </div>
          <div class="mb-2">
            <label class="form-label fw-bold">Precio (S/)</label>
            <input type="text" id="buyPrice" class="form-control" readonly>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">DNI</label>
            <input type="text" id="buyDNI" class="form-control text-center" maxlength="8"
                   oninput="this.value=this.value.replace(/[^0-9]/g,'')" placeholder="Ingrese su DNI (8 dígitos)" required>
            <div class="form-text text-warning">Debe tener exactamente 8 dígitos numéricos</div>
          </div>

          <div class="text-center">
            <button type="button" class="btn btn-light btn-sm" id="showYape">
              <img src="img/yape.jpg" alt="Yape" style="height:26px"> Pagar con Yape
            </button>
            <br>
            <button type="button" class="btn btn-pay w-75 mt-3" onclick="payOrder()">
              <i class="fa-solid fa-bag-shopping"></i> Pagar Pedido
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL: YAPE -->
  <div class="modal fade" id="yapeModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3 text-center">
        <h5 class="text-warning fw-bold mb-3">Escanea con Yape 📱</h5>
        <img src="img/yape.jpg" width="500" height="500" alt="QR Yape" class="yape-img">
      </div>
    </div>
  </div>

  <!-- MODAL: CARRITO -->
  <div class="modal fade" id="cartModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content p-4">
        <h4 class="text-center text-warning fw-bold mb-4">🛍 Tu Carrito</h4>
        <div id="cart-items" class="mb-3"></div>
        <h5 class="text-end">Total: <span id="cart-total" class="text-warning fw-bold">S/ 0.00</span></h5>
        <div class="text-end mt-3">
          <button class="btn btn-danger me-2" id="clear-cart"><i class="fa-solid fa-trash"></i> Limpiar Carrito</button>
          <button class="btn btn-promo" id="checkoutBtn"><i class="fa-solid fa-credit-card"></i> Finalizar Compra</button>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL: BOLETA -->
  <div class="modal fade" id="invoiceModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-light text-dark p-4" id="invoice-content">
        <h4 class="text-center fw-bold text-dark mb-3">🧾 Boleta de Compra - Krochicken</h4>
        <div id="invoice-details"></div>
        <div class="text-center mt-4">
          <button class="btn btn-success" onclick="window.print()">
            <i class="fa-solid fa-print"></i> Imprimir Boleta
          </button>
          <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
/* === PRODUCTOS === */
const promos = [
  ["Combo Familiar", "papas + ensalada + cremas + 1 bebida 1.5L",60.00, "img/a1.jpg"],
  ["2 Pollos a la Brasa","papas fritas + ensalada + cremas",80.00, "img/a2.jpg"],
  ["Mini Pollo BOX","1/4 Pollo + Papas",15.00, "img/a3.jpg"],
  ["Pollito Combo","papas fritas + ensalada + crema",32.00, "img/a5.jpg"],
  ["2 Hamburguesas Mixtas","2 papas fritas + 2 gaseosas",15.00, "img/a4.jpg"],
  ["Hamburguesa personal","ensalada + carne + queso",6.00, "img/a6.jpg"],
  ["Salchipapa","papas + hot dog + crema",10.00, "img/a8.jpg"],
  ["Sandwich Crocante","Pollo frito + lechuga + pan artesanal",5.00, "img/a7.jpg"],
  ["Anticuchos Dobles","choclo + papitas fritas + cremas",12.00, "img/a10.jpg"],
  ["Tequeño Personal","6 porciones + crema",5.00, "img/a11.jpg"],
  ["Mega Combo","12 alitas crocantes + papas + salsa",14.00, "img/a12.jpg"],
  ["Picarones","4 porciones + miel",6.00, "img/a13.jpg"]
];

let cart = [];

/* === RENDER PROMOCIONES === */
const container = document.getElementById("promo-container");
promos.forEach((promo, index) => {
  const col = document.createElement('div');
  col.className = 'col-md-3';
  col.innerHTML = `
    <div class="card promo-card text-center p-3">
      <img src="${promo[3]}" class="promo-img mb-3" alt="${promo[0]}">
      <h5 class="fw-bold">${promo[0]}</h5>
      <p class="text-light small mb-2">${promo[1]}</p>
      <h5 class="text-warning fw-bold">S/ ${promo[2].toFixed(2)}</h5>
      <div class="d-flex justify-content-center gap-2 mt-3">
        <button class="btn btn-promo small-btn" onclick="openBuyModal(${index})">
          <i class="fa-solid fa-credit-card"></i> Ordenar
        </button>
        <button class="btn btn-add small-btn" onclick="addToCartQuick(${index})">
          <i class="fa-solid fa-cart-shopping"></i> Añadir
        </button>
      </div>
    </div>`;
  container.appendChild(col);
});

/* === MODAL ORDEN === */
function openBuyModal(index) {
  const promo = promos[index];
  document.getElementById("buyName").value = promo[0];
  document.getElementById("buyImage").src = promo[3];
  document.getElementById("buyPrice").value = promo[2].toFixed(2);
  document.getElementById("buyDNI").value = '';
  new bootstrap.Modal(document.getElementById("buyModal")).show();
}

/* === PAGAR UN SOLO PRODUCTO === */
function payOrder() {
  const name = document.getElementById("buyName").value;
  const price = parseFloat(document.getElementById("buyPrice").value);
  const dni = document.getElementById("buyDNI").value.trim();

  if (!/^\d{8}$/.test(dni)) {
    alert("⚠️ DNI inválido. Debe tener exactamente 8 dígitos numéricos.");
    return;
  }

  const formData = new FormData();
  formData.append("dni", dni);
  formData.append("promocion", name);

  fetch("guardar_promocion.php", { method: "POST", body: formData })
    .then(res => res.text())
    .then(data => console.log(data))
    .catch(err => console.error("Error:", err));

  const html = `
    <p><b>Cliente (DNI):</b> ${dni}</p>
    <table class="table table-bordered">
      <thead><tr><th>Producto</th><th>Cantidad</th><th>Precio Unitario</th><th>Total</th></tr></thead>
      <tbody><tr><td>${name}</td><td>1</td><td>S/ ${price.toFixed(2)}</td><td>S/ ${price.toFixed(2)}</td></tr></tbody>
    </table>
    <h5 class="text-end fw-bold">Total: S/ ${price.toFixed(2)}</h5>
    <p class="text-center mt-3">¡Gracias por su compra en <b>Krochicken</b>! 🍗</p>`;
  document.getElementById("invoice-details").innerHTML = html;
  new bootstrap.Modal(document.getElementById("invoiceModal")).show();
  bootstrap.Modal.getInstance(document.getElementById("buyModal")).hide();
}

/* === CARRITO === */
function addToCartQuick(index) {
  const promo = promos[index];
  const existing = cart.find(item => item.name === promo[0]);
  if (existing) existing.qty += 1;
  else cart.push({ name: promo[0], qty: 1, price: promo[2], img: promo[3] });
  updateCartUI();
  flashMessage(`${promo[0]} añadido al carrito.`);
}

function updateCartUI() {
  const cartItems = document.getElementById('cart-items');
  const cartCount = document.getElementById('cart-count');
  const cartTotal = document.getElementById('cart-total');
  cartItems.innerHTML = '';
  let total = 0;
  cart.forEach((it, idx) => {
    total += it.price * it.qty;
    const div = document.createElement('div');
    div.className = 'd-flex align-items-center mb-3';
    div.innerHTML = `
      <img src="${it.img}" class="cart-img me-3">
      <div style="flex:1">
        <h6 class="mb-1 fw-bold">${it.name}</h6>
        <small class="text-muted">S/ ${it.price.toFixed(2)} c/u</small>
        <div class="mt-2 d-flex align-items-center gap-2 qty-controls">
          <button class="btn btn-sm btn-outline-light" onclick="decrementItem(${idx})">-</button>
          <span class="px-2 bg-dark rounded">${it.qty}</span>
          <button class="btn btn-sm btn-outline-light" onclick="incrementItem(${idx})">+</button>
          <button class="btn btn-sm btn-outline-danger ms-3" onclick="removeItem(${idx})">Eliminar</button>
        </div>
      </div>
      <div class="text-end ms-3 text-warning fw-bold">S/ ${(it.price * it.qty).toFixed(2)}</div>`;
    cartItems.appendChild(div);
  });
  cartTotal.textContent = 'S/ ' + total.toFixed(2);
  cartCount.textContent = cart.reduce((s, i) => s + i.qty, 0);
}
function removeItem(i){ cart.splice(i,1); updateCartUI(); }
function decrementItem(i){ if(cart[i].qty>1) cart[i].qty--; else cart.splice(i,1); updateCartUI(); }
function incrementItem(i){ cart[i].qty++; updateCartUI(); }
document.getElementById('clear-cart').addEventListener('click', ()=>{ if(confirm('¿Limpiar carrito?')){cart=[]; updateCartUI();} });

/* === FINALIZAR COMPRA CON VALIDACIÓN DNI === */
document.getElementById('checkoutBtn').addEventListener('click', () => {
  if (cart.length === 0) {
    alert('Tu carrito está vacío.');
    return;
  }

  const dniModal = document.createElement('div');
  dniModal.className = 'modal fade';
  dniModal.id = 'dniModal';
  dniModal.innerHTML = `
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-4 text-dark">
        <h5 class="fw-bold text-center mb-3">🪪 Ingrese su DNI</h5>
        <input type="text" id="dniInput" class="form-control text-center mb-2"
          placeholder="8 dígitos numéricos" maxlength="8"
          oninput="this.value=this.value.replace(/[^0-9]/g,'')">
        <div id="dniError" class="text-danger text-center mb-2" style="display:none;">
          ⚠️ DNI inválido. Debe tener exactamente 8 dígitos.
        </div>
        <div class="text-center">
          <button class="btn btn-success w-50" id="confirmDniBtn">Confirmar</button>
        </div>
      </div>
    </div>`;
  document.body.appendChild(dniModal);

  const modal = new bootstrap.Modal(dniModal);
  modal.show();

  document.getElementById('confirmDniBtn').addEventListener('click', () => {
    const dni = document.getElementById('dniInput').value.trim();
    const errorMsg = document.getElementById('dniError');
    if (!/^\d{8}$/.test(dni)) {
      errorMsg.style.display = 'block';
      return;
    }
    errorMsg.style.display = 'none';
    modal.hide();

    const formData = new FormData();
    formData.append("dni", dni);
    formData.append("productos", JSON.stringify(cart));

    fetch("guardar_promocion.php", {
      method: "POST",
      body: formData
    })
    .then(res => res.json())
    .then(data => {
      if (data.status === "ok") {
        flashMessage("✅ Compra registrada correctamente.");
      } else {
        alert("⚠️ Error: " + data.msg);
      }
    })
    .catch(err => console.error("Error:", err));

    let total = 0;
    let rows = '';
    cart.forEach(i => {
      const subt = i.price * i.qty;
      total += subt;
      rows += `<tr><td>${i.name}</td><td>${i.qty}</td><td>S/ ${i.price.toFixed(2)}</td><td>S/ ${subt.toFixed(2)}</td></tr>`;
    });

    const html = `
      <p><b>DNI:</b> ${dni}</p>
      <table class="table table-bordered">
        <thead><tr><th>Producto</th><th>Cantidad</th><th>Precio Unitario</th><th>Total</th></tr></thead>
        <tbody>${rows}</tbody>
      </table>
      <h5 class="text-end fw-bold">Total: S/ ${total.toFixed(2)}</h5>
      <p class="text-center mt-3">¡Gracias por su compra en <b>Krochicken</b>! 🍗</p>`;
    document.getElementById("invoice-details").innerHTML = html;
    new bootstrap.Modal(document.getElementById("invoiceModal")).show();
    bootstrap.Modal.getInstance(document.getElementById('cartModal')).hide();

    cart = [];
    updateCartUI();
    setTimeout(() => dniModal.remove(), 500);
  });
});

/* === MENSAJE TEMPORAL === */
function flashMessage(text){
  const el=document.createElement('div');
  el.textContent=text;
  el.style="position:fixed;right:20px;bottom:120px;background:#222;color:#fff;padding:10px 14px;border-radius:8px;z-index:9999;box-shadow:0 6px 18px rgba(0,0,0,0.4)";
  document.body.appendChild(el);
  setTimeout(()=>el.remove(),1400);
}
</script>
</body>
</html>
