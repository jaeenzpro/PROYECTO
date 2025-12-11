
<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <meta charset="utf-8">
    <title>Delivery KroChicken </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

	<!-- Bootstrap 5 CSS (si ya lo tienes, no lo dupliques) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome para íconos -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
</head>
<style>
.search-box{
  position:absolute;
  right:0;
  top:110%;
  width:320px;
  max-width:90vw;
  background:#111;
  padding:12px;
  border-radius:14px;
  display:none;
  z-index:9999;
}

.search-input-wrap{
  display:flex;
  align-items:center;
  background:#1b1b1b;
  border-radius:999px;
  padding:6px 10px;
}

.search-input{
  background:transparent !important;
  border:none !important;
  color:#fff !important;
  box-shadow:none !important;
}

.search-input::placeholder{ color:#aaa; }

.search-results{
  max-height:300px;
  overflow:auto;
  display:none;
  border-radius:10px;
}

.search-item{
  display:flex;
  align-items:center;
  gap:10px;
  background:#1b1b1b;
  color:#fff;
  border:none;
  padding:8px 10px;
  cursor:pointer;
}

.search-item:hover{ background:#2a2a2a; }

.search-item img{
  width:55px;
  height:40px;
  object-fit:cover;
  border-radius:6px;
  flex-shrink:0;
}

.search-item .meta{
  display:flex;
  flex-direction:column;
  line-height:1.1;
}

.search-item .meta small{
  color:#bbb;
  font-size:12px;
}

.product-highlight{
  outline:3px solid #ffc107;
  border-radius:12px;
  animation:pulse 1.2s ease-in-out 2;
}

@keyframes pulse{
  0%{transform:scale(1)}
  50%{transform:scale(1.02)}
  100%{transform:scale(1)}
}

/* --- Buscador --- */
.search-box{
  position:absolute;
  right:0;
  top:110%;
  width:320px;
  max-width:90vw;
  background:#111;
  padding:12px;
  border-radius:14px;
  display:none;
  z-index:9999;
}

.search-input-wrap{
  display:flex;
  align-items:center;
  background:#1b1b1b;
  border-radius:999px;
  padding:6px 10px;
}

.search-input{
  background:transparent !important;
  border:none !important;
  color:#fff !important;
  box-shadow:none !important;
}

.search-input::placeholder{ color:#aaa; }

.search-results{
  max-height:300px;
  overflow:auto;
  display:none;
  border-radius:10px;
}

/* item resultado */
.search-item{
  display:flex;
  align-items:center;
  gap:10px;
  background:#1b1b1b;
  color:#fff;
  border:none;
  padding:8px 10px;
  cursor:pointer;
}

.search-item:hover{
  background:#2a2a2a;
}

.search-item img{
  width:52px;
  height:38px;
  object-fit:cover;
  border-radius:6px;
  flex-shrink:0;
}

.search-item .meta{
  display:flex;
  flex-direction:column;
  line-height:1.1;
}

.search-item .meta small{
  color:#bbb;
  font-size:12px;
}

/* highlight producto */
.product-highlight{
  outline:3px solid #ffc107;
  border-radius:12px;
  animation:pulse 1.2s ease-in-out 2;
}

@keyframes pulse{
  0%{transform:scale(1)}
  50%{transform:scale(1.02)}
  100%{transform:scale(1)}
}


/* ===== Tabs del menú más grandes y modernos ===== */
.menu-tabs{
  background:#111;
  border-radius: 18px;
  gap: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,.4);
}

.menu-tabs .nav-link{
  background: #ffc107;      /* mismo color base */
  color: #111 !important;
  font-weight: 700;
  padding: 14px 28px;       /* más grandes */
  border-radius: 12px;
  border: 2px solid transparent;
  transition: .25s ease;
  font-size: 1.05rem;
  letter-spacing: 0.5px;
  min-width: 140px;         /* mismo tamaño */
  text-align: center;
  box-shadow: 0 3px 8px rgba(255,193,7,.25);
}

.menu-tabs .nav-link:hover{
  transform: translateY(-2px) scale(1.03);
  background: #ffca2c;
  box-shadow: 0 6px 14px rgba(255,193,7,.35);
}

.menu-tabs .nav-link.active{
  background: #ff5722 !important;  /* activo distinto pero combina */
  color: #fff !important;
  border-color: #ffc107;
  box-shadow: 0 6px 16px rgba(255,87,34,.45);
}



/* Todas las descripciones con el mismo alto */
.bebida-desc{
  min-height: 42px;          /* ajusta a tu gusto */
  display: -webkit-box;
  -webkit-line-clamp: 2;     /* 2 líneas máximo */
  -webkit-box-orient: vertical;
  overflow: hidden;
}



/* 🔥 BOTÓN VER DETALLES CON TAMAÑO FIJO REAL */
.btn-details {
  width: 140px;            /* 🔒 ANCHO FIJO (ajústalo si quieres) */
  height: 36px;            /* 🔒 ALTO FIJO */
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 999px;
  font-size: 0.85rem;
  padding: 0 !important;
  white-space: nowrap;      /* ❗ Evita que el texto haga crecer el botón */
  overflow: hidden;         /* Evita fugas del texto */
  margin-top: 6px !important;
  text-align: center;
  margin-left: auto;        /* Centra el botón */
  margin-right: auto;
}

/* Ensancha espacio del icono pero sin alterar tamaño del botón */
.btn-details i {
  margin-right: 6px;
}

/* Animaciones lindas */
.btn-details:hover {
  transform: scale(1.05);
  transition: 0.2s ease;
}

.btn-details:active {
  transform: scale(0.95);
}




/* FONDO OSCURO DEL MODAL */
.details-modal {
  display: none;
  position: fixed;
  inset: 0;
  z-index: 9999;
  background: rgba(0, 0, 0, 0.65);
  justify-content: center;
  align-items: center;
}

/* CUADRO DEL MODAL */
.details-modal-content {
  background: #fff7e6; /* amarillo suave */
  width: 420px;
  max-width: 90%;
  border-radius: 18px;
  padding: 18px 20px 22px;
  position: relative;
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.35);
  border: 2px solid #ffb347;
  animation: detailsFadeIn 0.25s ease-out;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
}

@keyframes detailsFadeIn {
  from { opacity: 0; transform: translateY(-8px) scale(0.96); }
  to   { opacity: 1; transform: translateY(0) scale(1); }
}

/* BOTÓN DE CERRAR (X) */
.details-close {
  position: absolute;
  right: 14px;
  top: 8px;
  font-size: 24px;
  cursor: pointer;
  color: #ff8c42;
  transition: transform 0.15s, color 0.15s;
}
.details-close:hover {
  transform: scale(1.15);
  color: #e36414;
}

/* CABECERA DEL MODAL */
.details-header {
  display: flex;
  gap: 14px;
  align-items: center;
  margin-bottom: 10px;
}

/* MARCO DE LA IMAGEN */
.details-image-wrapper {
  padding: 4px;
  border-radius: 14px;
  background: linear-gradient(135deg, #ffb347, #ffcc33);
}
.details-header img {
  width: 90px;
  height: 70px;
  object-fit: cover;
  border-radius: 10px;
}

/* TEXTOS DE CABECERA */
.details-info h4 {
  margin: 0;
  font-weight: 800;
  color: #3b1f0e;
}
.details-info p {
  margin: 4px 0 3px;
  font-weight: 700;
  color: #e36414;
}

/* CHIP / TAG */
.details-tag {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 12px;
  padding: 4px 8px;
  border-radius: 999px;
  background: #fff;
  color: #9a3412;
  border: 1px dashed #ffb347;
}

/* CUERPO DEL MODAL */
.details-body h6 {
  margin-top: 10px;
  margin-bottom: 4px;
  font-weight: 700;
  color: #422006;
  display: flex;
  align-items: center;
  gap: 6px;
}
.details-body h6 i {
  color: #ff8c42;
}
.details-body p {
  margin: 0;
  font-size: 14px;
  color: #4b2e14;
  line-height: 1.5;
}

/* RESPONSIVE */
@media (max-width: 480px) {
  .details-modal-content {
    padding: 14px 14px 18px;
  }
  .details-header img {
    width: 80px;
    height: 64px;
  }
}

/* 🔥 BOTÓN VER DETALLES UNIFORME */
.btn-details {
  width: 100%;               /* mismo ancho en todas las cards */
  height: 38px;              /* misma altura para todos */
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 999px;
  font-size: 0.85rem;
  padding: 0 !important;
  margin-top: 6px !important;
  text-align: center;
}

.btn-details i {
  margin-right: 6px;
  font-size: 0.95rem;
}

.btn-details:hover {
  transform: scale(1.03);
  transition: 0.15s ease;
}

.btn-details:active {
  transform: scale(0.97);
}




.btn-delivery {
  width: 150px;          /* 🔹 Mismo ancho para todos */
  height: 38px;          /* 🔹 Misma altura */
  font-size: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  border-radius: 8px;
}

/* === Lupa tipo lente sobre las imágenes del Team === */
.team-item .zoom-lens {
  position:absolute; pointer-events:none;
  width:120px; height:120px; border-radius:50%;
  border:3px solid #fff; box-shadow:0 8px 20px rgba(0,0,0,.35);
  background-repeat:no-repeat; background-position:center;
  background-size:200%; /* factor de zoom del lente */
  opacity:0; transition:opacity .15s ease;
  z-index:5;
}
.team-item .zoom-hint{
  position:absolute; right:10px; bottom:10px; z-index:6;
  background:rgba(0,0,0,.55); color:#fff; border:1px solid rgba(255,255,255,.2);
  border-radius:999px; padding:6px 10px; font-size:12px; display:flex; align-items:center; gap:6px;
}
.team-item .zoom-hint i{font-size:14px}
.team-item .position-relative:hover .zoom-lens{opacity:1}

/* === Modal visor ampliado === */
#imgZoomModal .modal-content{ background:#0e0e0e; border:1px solid #222 }
#imgZoomModal .modal-body{
  position:relative; overflow:hidden; padding:0; height:70vh;
  display:flex; align-items:center; justify-content:center;
}
#zoomCanvas{
  user-select:none; cursor:grab; transition: transform .05s linear;
  max-width:none; /* importante para escalar libre */
}
#zoomCanvas.dragging{ cursor:grabbing }
#imgZoomModal .zoom-toolbar{
  position:absolute; top:10px; right:10px; display:flex; gap:8px; z-index:5;
}
#imgZoomModal .zoom-toolbar .btn{
  background:rgba(255,255,255,.08); color:#fff; border:1px solid rgba(255,255,255,.2);
}


/* Botón Comprar ahora en el overlay */
.product-actions .buy-now{
  pointer-events: auto;
}

/* Modal Comprar: fondo KFC */
#buyModal .modal-content{
  background:
    radial-gradient(1200px 600px at -10% -20%, rgba(255,106,122,.25) 0%, transparent 60%),
    linear-gradient(180deg, #e4002b, #b1001f);
  color:#fff;
  border:0;
}
#buyModal .modal-header{ border-bottom: 1px solid rgba(255,255,255,.2); }
#buyModal .modal-body{ background: rgba(0,0,0,.15); }
#buyModal .card{ background:#111; color:#fff; border:1px solid rgba(255,255,255,.15); }
#buyModal .form-label{ font-weight:600; }
#buyModal .product-chip{
  background:#111; color:#ffb3bd; padding:.25rem .5rem; border-radius:.5rem; font-weight:700;
}

/* Imagen Yape */
.yape-box{
  background:#fff; border-radius:.5rem; padding:.75rem; display:flex; align-items:center; justify-content:center;
}
.yape-box img{ max-width: 160px; height:auto; }

/* Mapa */
#buyMap{ border:0; width:100%; height:260px; border-radius:.5rem; }

/* Botón Comprar bajo el precio (para miniaturas sin overlay) */
.buy-now-inline{
  margin-top:.35rem; width:150px; height:36px; font-weight:600; letter-spacing:.2px;
}




/* --- Quitar blur/zoom/oscurecido en los items del bloque Team --- */
.team-item .position-relative img{
  transform: none !important;
  filter: none !important;
  transition: none !important;   /* sin animación */
}

/* Evita que en :hover se aplique zoom/blur */
.team-item:hover .position-relative img{
  transform: none !important;
  filter: none !important;
}

/* Oculta la capa oscura/overlay y evita que capture clics */
.team-item .team-overlay{
  opacity: 0 !important;
  background: transparent !important;
  transition: none !important;
  pointer-events: none !important;
}

/* Por si el template pone sombras/escala al card */
.team-item,
.team-item:hover{
  transform: none !important;
  box-shadow: none !important;
}

/* Cursor normal (opcional) */
.team-item .position-relative,
.team-item .position-relative img{
  cursor: default !important;
}








  /* Botón de carrito más grande y con mejor “hit area” */
.nav-cart{
  position: relative;
  display: inline-flex;
  align-items: center;
  gap: .5rem;
  line-height: 1;
  font-weight: 600;
  /* Sube el tamaño general del link */
  font-size: 1.05rem;
}

/* Icono más grande */
.nav-cart .fa-cart-shopping{
  font-size: 1.35rem; /* sube o baja este valor si quieres */
}

/* Badge más grande y visible */
.cart-badge{
  position: absolute;
  top: -6px; 
  right: -10px;
  padding: .35rem .5rem;          /* más grande */
  font-size: .8rem;               /* más legible */
  border: 2px solid #fff;         /* halo para contraste sobre el fondo */
}

/* En pantallas grandes: aún más grande */
@media (min-width: 992px){
  .nav-cart{ font-size: 1.1rem; }
  .nav-cart .fa-cart-shopping{ font-size: 1.5rem; }
  .cart-badge{ top: -8px; right: -12px; font-size: .85rem; }
}

/* Hover bonito */
.nav-cart:hover{
  filter: brightness(1.1);
  text-decoration: none;
}






/* Contenedor del logo (columna derecha del hero) */
.hero-logo-wrap{
  /* Elige cuánto puede crecer el logo en desktop */
  max-width: clamp(320px, 42vw, 780px);
  width: 100%;
  padding: 8px;
  border-radius: 18px;
  background: rgba(255,255,255,.06);
  backdrop-filter: blur(4px);
}

/* Imagen del logo: que llene el contenedor y escale perfecto */
.hero-logo{
  display: block;
  width: 100% !important;   /* ignora width HTML */
  height: auto !important;  /* ignora height HTML */
  object-fit: contain;
  filter: drop-shadow(0 12px 24px rgba(0,0,0,.35));
  border-radius: 12px;
  animation: heroFloat 6s ease-in-out infinite;
}

/* Pequeño efecto de movimiento */
@keyframes heroFloat{
  0%,100%{ transform: translateY(0) }
  50%{ transform: translateY(-8px) }
}

/* Ajustes por breakpoints (opcional, para afinar tamaños) */
@media (min-width: 1200px){
  .hero-logo-wrap{ max-width: clamp(360px, 38vw, 860px); }
}
@media (min-width: 1400px){
  .hero-logo-wrap{ max-width: clamp(420px, 36vw, 920px); }
}

/* Si algún CSS previo limita la imagen, fuerza prioridad */
.hero-logo, .hero-logo-wrap { max-height: none !important; }

/* Contenedor del logo a la derecha del hero */
.hero-logo-wrap{
  padding: 8px;
  border-radius: 18px;
  /* opcional: un suave vidrio sobre el rojo */
  background: rgba(255,255,255,.06);
  backdrop-filter: blur(4px);
}

/* Imagen del logo */
.hero-logo{
  width: 100%;
  max-width: 360px;   /* ajusta tamaño máximo del logo */
  height: auto;
  display: block;
  filter: drop-shadow(0 12px 24px rgba(0,0,0,.35));
  animation: heroFloat 6s ease-in-out infinite;
  object-fit: contain;
  border-radius: 12px; /* por si tu logo es cuadrado y quieres esquinas suaves */
}

/* Pequeño movimiento para darle vida */
@keyframes heroFloat{
  0%,100%{ transform: translateY(0) }
  50%{ transform: translateY(-8px) }
}

/* En pantallas XL puedes hacerlo un poco más grande */
@media (min-width: 1400px){
  .hero-logo{ max-width: 420px; }
}

/* Si quieres que también se vea en móviles, quita d-none d-lg-flex y controla aquí */
@media (max-width: 991.98px){
  .hero-logo{ max-width: 280px; margin: 16px auto 0; }
}

/* ==== KFC THEME (solo overrides, no cambia tu HTML) ==== */
:root{
  --kfc-red: #e4002b;   /* rojo KFC */
  --kfc-red-2:#ff364d;  /* rojo vivo para hovers */
  --kfc-white:#ffffff;
  --kfc-black:#111111;
}

/* Paleta base */
.text-primary{ color: var(--kfc-red) !important; }
.bg-primary{ background-color: var(--kfc-red) !important; }
.bg-secondary{ background-color: var(--kfc-white) !important; color: var(--kfc-black) !important; }
.bg-dark{ background-color: var(--kfc-black) !important; }

/* Botones */
.btn-primary{
  background-color: var(--kfc-red) !important;
  border-color: var(--kfc-red) !important;
  color: #fff !important;
}
.btn-primary:hover,
.btn-primary:focus{
  background-color: var(--kfc-red-2) !important;
  border-color: var(--kfc-red-2) !important;
}
.btn-dark{ background-color: var(--kfc-black) !important; border-color: var(--kfc-black) !important; }

/* Bordes interiores (cajas con borde doble) */
.border-inner{
  box-shadow: inset 0 0 0 6px var(--kfc-white) !important;
}

/* Topbar centro: ya es .bg-primary → queda rojo con logo blanco */
.navbar-brand h1,
h1.text-uppercase.text-white{
  letter-spacing: .5px;
}

/* Navbar (mantiene negro para contraste) */
.navbar{ background-color: var(--kfc-black) !important; }
.navbar .nav-link{ color:#eee !important; }
.navbar .nav-link.active,
.navbar .nav-link:hover{ color:#fff !important; border-bottom:2px solid var(--kfc-red); }

/* Hero: fondo rojo con degradé sutil */
.hero-header{
  background: radial-gradient(1200px 600px at -10% -20%, #ff435a 0%, transparent 60%),
              radial-gradient(1000px 600px at 110% -10%, #ff6a7a 0%, transparent 60%),
              linear-gradient(180deg, var(--kfc-red), #b1001f) !important;
}
.hero-header .text-primary{ color:#ffeaea !important; } /* subtítulo “Super Crispy” más suave */
.hero-header .btn-play span,
.hero-header .btn-play::before{ background:#fff !important; }

/* Pills del menú */
.nav-pills{
  background-color: var(--kfc-black) !important;
  box-shadow: inset 0 0 0 4px var(--kfc-white);
}
.nav-pills .nav-link{
  border:2px solid var(--kfc-white) !important;
  color:#fff !important;
}
.nav-pills .nav-link.active{
  background-color: var(--kfc-red) !important;
  border-color: var(--kfc-red) !important;
}

/* Tarjetas de producto (precio en franja) */
.bg-secondary.border-inner{ background-color:#fff !important; }
.bg-dark.text-primary{ background-color: var(--kfc-black) !important; color: var(--kfc-red) !important; }

/* Secciones con imagen/fondo */
.bg-img{ background-color: var(--kfc-red) !important; } /* si usa overlay, lo tiñe rojo */
.bg-offer{
  background: linear-gradient(135deg, var(--kfc-red) 0%, #b1001f 100%) !important;
}

/* Testimonial */
.testimonial-item.bg-dark{ background-color: var(--kfc-black) !important; }
.testimonial-item .text-primary{ color: var(--kfc-red) !important; }

/* Footer */
.container-fluid.text-secondary[style*="background: #111111"]{
  background: var(--kfc-black) !important;
}
.text-secondary a.text-white.border-bottom:hover{
  color: var(--kfc-red) !important;
  border-color: var(--kfc-red) !important;
}

/* “Back to Top” botón */
.back-to-top{
  background: var(--kfc-red) !important;
  border-color: var(--kfc-white) !important;
  color:#fff !important;
}
.back-to-top:hover{ background: var(--kfc-red-2) !important; }

/* Logo en topbar y móvil: tamaño consistente */
.brand-logo{
  height: 48px;
  width: auto;
  object-fit: contain;
  vertical-align: middle;
  filter: drop-shadow(0 1px 0 rgba(0,0,0,.25));
}
@media (max-width: 576px){
  .brand-logo{ height: 40px; }
}




.brand-logo{
  height: 48px;           /* ajusta el alto a tu gusto */
  width: auto;            /* mantiene proporción */
  object-fit: contain;    /* por si tu logo tiene fondo */
  display: inline-block;
  vertical-align: middle;
}

/* En pantallas chicas, hazlo un poco más pequeño si quieres */
@media (max-width: 576px){
  .brand-logo{ height: 40px; }
}



</style>
<body>
<!-- 🔝 Topbar / Bienvenida -->
<div class="container-fluid bg-dark text-white py-2 px-lg-5">
  <div class="row align-items-center justify-content-between">
    
    <!-- 👤 Mensaje de bienvenida -->
    <div class="col-auto">
      <i class="bi bi-person-circle text-warning me-2"></i>
      <span id="mensajeBienvenida">Bienvenido, Invitado 🍗</span>
    </div>

  <!-- 🚪 Botón de cerrar sesión -->
<div class="col-auto">
  <button id="cerrarSesion" class="btn btn-sm btn-danger">
    <i class="bi bi-box-arrow-right me-1"></i> Cerrar sesión
  </button>
</div>
  </div>
</div>



<!-- 🔝 Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger py-3 shadow sticky-top">
  <div class="container">
    <!-- 🍗 LOGO -->
    <a href="#inicio" class="navbar-brand d-flex align-items-center">
      <img src="img/kfc.jpg" alt="KroChicken" class="me-2 rounded-circle border border-2 border-white" style="width:60px; height:60px;">
      <h2 class="m-0 text-uppercase fw-bold text-white">Kro<span class="text-warning">Chicken</span></h2>  
	<!-- 🔎 BUSCADOR -->
<div class="position-relative ms-3">
  <button class="btn btn-dark rounded-pill px-3" id="btnAbrirBuscador" type="button">
    <i class="fa-solid fa-magnifying-glass text-warning"></i>
  </button>

  <div id="boxBuscador" class="search-box shadow">
    <div class="search-input-wrap">
      <i class="fa-solid fa-magnifying-glass text-warning me-2"></i>
      <input id="buscadorProductos"
        type="text"
        class="form-control form-control-sm search-input"
        placeholder="Buscar productos..."
        autocomplete="off">
    </div>

    <div id="resultadosBusqueda" class="search-results list-group mt-2"></div>
  </div>
</div>


	  <!-- 🔘 Botón registro -->
    <div class="col-md-4 text-center text-md-end">
      <a href="http://localhost/PROYECTO/registro_clientes.php" 
         class="btn btn-warning text-dark fw-bold px-4 py-2 rounded-pill shadow-sm">
        Regístrate Aquí
      </a>

    </div>
    </a>




      <!-- 📱 Botón responsive -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

   <!-- 🔗 Enlaces -->
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
  <ul class="navbar-nav text-center text-uppercase fw-semibold">
    <li class="nav-item mx-2"><a class="nav-link active" href="#inicio">Inicio</a></li>
    <li class="nav-item mx-2"><a class="nav-link" href="#menu">Menú</a></li>
    <li class="nav-item mx-2"><a class="nav-link" href="#servicios">Servicios</a></li>
    <li class="nav-item mx-2"><a class="nav-link" href="#testimonios">Testimonios</a></li>
    <li class="nav-item mx-2">
      <a class="btn btn-outline-warning fw-bold px-3 py-2 rounded-pill" href="consultas.php">
        <i class="bi bi-chat-dots-fill me-1"></i> Consultas
      </a>
    </li>
  </ul>
</div>

      
      <a href="#" data-bs-toggle="offcanvas" data-bs-target="#cartOffcanvas" class="btn btn-dark position-relative rounded-pill px-3 ms-3">
        <i class="fa-solid fa-cart-shopping text-warning"></i>
        <span id="cartCount" class="badge bg-warning text-dark position-absolute top-0 start-100 translate-middle rounded-pill">0</span>
      </a>
    </div>
  </div>
</nav>
<!-- 🔝 Navbar End -->


<!-- 🎠 Hero (Carrusel Moderno) -->
<div id="inicio"></div>
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="hero-slide text-white d-flex align-items-center justify-content-center text-center" 
           style="background: url('img/deli.jpg') center/cover no-repeat; height: 90vh;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.45);"></div>
        <div class="container position-relative">
          <h1 class="display-1 fw-bold text-uppercase mb-3 text-warning">¡KroChicken a tu hogar!</h1>
          <p class="lead mb-4 text-white">Disfruta el sabor más crocante, caliente y rápido del delivery 🍗</p>
        <button type="button" class="btn btn-light fw-bold py-3 px-5 rounded-pill shadow-lg"
        onclick="window.location.href='promo.php'">
  <i class="bi bi-fire me-2"></i> Ver Promociones
</button>

        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="hero-slide text-white d-flex align-items-center justify-content-center text-center" 
           style="background: url('img/carro.jpg') center/cover no-repeat; height: 90vh;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.45);"></div>
        <div class="container position-relative">
          <h1 class="display-3 fw-bold text-uppercase mb-3 text-warning">Delivery rápido y seguro</h1>
          <p class="lead mb-4 text-white">Recibe tu pedido caliente y listo en minutos 🚴‍♂️🔥</p>
<a href="estado_repartidores.php" class="btn btn-warning fw-bold py-3 px-5 rounded-pill shadow-lg text-dark">
  <i class="bi bi-bicycle me-2"></i> Ver Delivery
</a>




        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="hero-slide text-white d-flex align-items-center justify-content-center text-center" 
           style="background: url('img/contactanos.jpg') center/cover no-repeat; height: 90vh;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.45);"></div>
        <div class="container position-relative">
          <h1 class="display-3 fw-bold text-uppercase mb-3 text-warning">¡Sabores que conquistan!</h1>
          <p class="lead mb-4 text-white">Crocante por fuera, jugoso por dentro 😋</p>
         <a href="https://wa.me/51953744310?text=Hola,%20deseo%20más%20información%20sobre%20las%20promociones" target="_blank" class="btn btn-light fw-bold py-3 px-5 rounded-pill shadow-lg">
  <i class="fa-solid fa-phone me-2"></i> Contáctanos
</a>

        </div>
      </div>
    </div>

  </div>

  <!-- Controles -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

  <!-- Indicadores -->
  <div class="carousel-indicators mb-4">
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
  </div>
</div>
<!-- 🎠 Hero End -->


<!-- 🎬 Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 rounded-3 shadow-lg">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">🎥 Promoción KroChicken</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
          <iframe id="videoFrame" src="" allowfullscreen title="Video Promocional"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // 🎬 Control del video modal
  function toEmbedUrl(url) {
    try {
      const u = new URL(url);
      if (u.hostname.includes('youtu.be')) return 'https://www.youtube.com/embed/' + u.pathname.slice(1);
      if (u.hostname.includes('youtube.com')) {
        if (u.pathname.startsWith('/embed/')) return url;
        if (u.pathname === '/watch') {
          const id = u.searchParams.get('v');
          if (id) return 'https://www.youtube.com/embed/' + id;
        }
      }
    } catch(e) {}
    return url;
  }

  const modalEl = document.getElementById('videoModal');
  const frame   = document.getElementById('videoFrame');

  modalEl.addEventListener('show.bs.modal', (ev) => {
    const btn  = ev.relatedTarget;
    const raw  = btn?.getAttribute('data-src') || '';
    const embed = toEmbedUrl(raw);
    frame.src = embed + (embed.includes('?') ? '&' : '?') + 'autoplay=1&rel=0&modestbranding=1';
  });

  modalEl.addEventListener('hide.bs.modal', () => { frame.src = ''; });

  // 🧭 Scroll suave
  document.querySelectorAll('a.nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
      if (this.hash) {
        e.preventDefault();
        document.querySelector(this.hash).scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
</script>



    <!-- About Start -->

<div id="servicios" class="container-fluid about py-5">
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Nuestros Servicios</h2>
                <h1 class="display-4 text-uppercase">Comparte el sabor, comparte KroChicken .</h1>
            </div>
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/promo.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <h4 class="mb-4">¡Aprovecha las ofertas irresistibles que KroChicken  tiene para ti!</h4>
                    <p class="mb-5">En KroChicken  ofrecemos una amplia variedad de platos preparados con el inconfundible sabor del pollo frito original, elaborado con la receta secreta del Coronel Sanders.</p>
                    <div class="row g-5">
                        <div class="col-sm-6">
                    
                               <img src="img/icono1.jpg" width="50" height="50">
                      
                            <h4 class="text-uppercase">Delivery a tu hogar</h4>
                            <p class="mb-0">Personal capacitado y servicio rápido hasta tu puerta.</p>
                        </div>
                        <div class="col-sm-6">
                           
                                 <img src="img/descuento.jpg" width="50" height="50">
                          
                            <h4 class="text-uppercase">Promociones</h4>
                            <p class="mb-0">En KroChicken  contamos con promociones y mucho más para ti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


 

	<!-- Products Start -->
<div id="menu" class="container-fluid about py-5">

    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Menu & Catálagos</h2>
                <h1 class="display-4 text-uppercase">Servicio a tu Hogar</h1>
            </div>
            <div class="tab-class text-center">
              <ul class="nav nav-pills d-inline-flex justify-content-center text-uppercase p-3 mb-5 menu-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="pill" href="#tab-1">
      🍗 Chicken
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#tab-2">
      🥤 Bebidas
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#tab-3">
      🍰 Postres
    </a>
  </li>
</ul>

                <div class="tab-content">
               <!-- ================= TAB 1: POLLOS / COMBOS ================= -->
<div id="tab-1" class="tab-pane fade show active p-0">
  <div class="row g-3">

    <!-- Producto 1 -->
 <div class="col-lg-6 product-card"
     id="prod-p1"
     data-name="Pollo Crocante Dúo"
     data-tab="tab-1"
     data-img="img/p1.jpg">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid product-img" src="img/p1.jpg" alt="" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0 product-price">S/30.00</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase product-name">Pollo Crocante Dúo</h5>
          <span class="product-desc">2 Piezas de pollo + papas + 2 bebidas personales</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({
                name:'Pollo Crocante Dúo',
                price:30.00,
                img:'img/p1.jpg',
                desc:'2 piezas de pollo crocante, papas fritas y 2 bebidas personales.'
              })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Pollo Crocante Dúo',
                '2 piezas de pollo crocante, papas fritas y 2 bebidas personales.',
                'S/30.00',
                `- Pollo marinado con especias<br>
                 - Harina sazonada crocante<br>
                 - Aceite vegetal<br>
                 - Papas fritas<br>
                 - Sal y pimienta<br>
                 - Bebidas personales`,
                'img/p1.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Producto 2 -->
<div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid product-img" src="img/p2.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0 product-price">S/49.90</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase product-name">Combo Familiar</h5>
          <span class="product-desc">1 Pollo entero + papas + ensalada + gaseosa helada 1L</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({
                name:'Combo Familiar',
                price:49.90,
                img:'img/p2.jpg',
                desc:'Pollo entero jugoso acompañado de papas familiares, ensalada fresca y gaseosa de 1 litro.'
              })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Combo Familiar',
                'Pollo entero jugoso acompañado de papas familiares, ensalada fresca y gaseosa de 1 litro.',
                'S/49.90',
                `- Pollo entero marinado<br>
                 - Papas fritas familiares<br>
                 - Ensalada (lechuga, tomate, zanahoria)<br>
                 - Especias naturales<br>
                 - Gaseosa 1L`,
                'img/p2.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Producto 3 -->
   <div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid product-img" src="img/p3.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0 product-price">S/15.00</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase product-name">Chaufa con Pollo</h5>
          <span class="product-desc">1/8 de pollo dorado + arroz chaufa + papitas fritas</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({
                name:'Chaufa con Pollo',
                price:15.00,
                img:'img/p3.jpg',
                desc:'Delicioso chaufa con trozos de pollo, papas fritas y acompañamiento fresco.'
              })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Chaufa con Pollo',
                'Delicioso chaufa con trozos de pollo, papas fritas y acompañamiento fresco.',
                'S/15.00',
                `- Arroz salteado<br>
                 - Pollo en trozos<br>
                 - Salsa de soya<br>
                 - Cebolla china<br>
                 - Huevo<br>
                 - Papas fritas`,
                'img/p3.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Producto 4 -->
<div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid product-img" src="img/p4.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0 product-price">S/38.00</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase product-name">Combo Krunchy Lovers</h5>
          <span class="product-desc">1 Sandwich Krunchy + papitas fritas + 1L bebida Inka Kola</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({
                name:'Combo Krunchy Lovers',
                price:38.00,
                img:'img/p4.jpg',
                desc:'Sandwich crocante con papas y bebida personal.'
              })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Combo Krunchy Lovers',
                'Sandwich crocante con papas y bebida personal.',
                'S/38.00',
                `- Pan suave<br>
                 - Pollo crocante<br>
                 - Lechuga<br>
                 - Tomate<br>
                 - Salsa especial<br>
                 - Papas fritas<br>
                 - Bebida`,
                'img/p4.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Producto 5 -->
<div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid product-img" src="img/p5.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0 product-price">S/55.00</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase product-name">Combo Parrillero</h5>
          <span class="product-desc">12 piezas mixtas + papitas fritas + ensalada y crema</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({
                name:'Combo Parrillero',
                price:55.00,
                img:'img/p5.jpg',
                desc:'12 piezas mixtas con papas fritas y ensalada familiar.'
              })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Combo Parrillero',
                '12 piezas mixtas con papas fritas y ensalada familiar.',
                'S/55.00',
                `- Alitas y piernas<br>
                 - Salsa BBQ<br>
                 - Especias parrilleras<br>
                 - Papas fritas<br>
                 - Ensalada familiar`,
                'img/p5.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Producto 6 -->
 <div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid product-img" src="img/p6.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0 product-price">S/27.90</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase product-name">Pollo BBQ Especial</h5>
          <span class="product-desc">3 piezas de pollo frito aderezado y bañadas en BBQ + crema</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({
                name:'Pollo BBQ Especial',
                price:27.90,
                img:'img/p6.jpg',
                desc:'Tres piezas de pollo bañadas en salsa BBQ ahumada.'
              })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Pollo BBQ Especial',
                'Tres piezas de pollo bañadas en salsa BBQ ahumada.',
                'S/27.90',
                `- Pollo marinado<br>
                 - Salsa BBQ<br>
                 - Especias<br>
                 - Aceite vegetal`,
                'img/p6.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- =============== FIN TAB 1 =============== -->


<!-- ================= TAB 2: BEBIDAS ================= -->
<div id="tab-2" class="tab-pane fade show p-0">
  <div class="row g-3">

    <!-- Bebida 1 -->
   <div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid" src="img/b1.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0">S/2.00</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
        <h5 class="text-uppercase">Fanta 500 ml</h5>
<span class="bebida-desc">Gaseosa personal sabor naranja, bien helada y refrescante.</span>


          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({ name:'Fanta 500 ml', price:2.00, img:'img/b1.jpg', desc:'Bebida gaseosa sabor naranja.' })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Fanta 500 ml','Bebida gaseosa sabor naranja.','S/2.00',
                `- Agua carbonatada<br>- Azúcar<br>- Sabor naranja<br>- Colorantes permitidos`,
                'img/b1.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bebida 2 -->
<div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid" src="img/b2.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0">S/3.50</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase">Inka Kola sin azúcar 500 ml</h5>
          <span class="bebida-desc">Inka Kola personal sin azúcar, ligera y siempre refrescante.</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({ name:'Inka Kola sin azúcar 500 ml', price:3.50, img:'img/b2.jpg', desc:'La bebida del sabor nacional sin azúcar.' })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Inka Kola sin azúcar 500 ml','La bebida del sabor nacional sin azúcar.','S/3.50',
                `- Agua carbonatada<br>- Endulzantes<br>- Sabor Inka Kola<br>- Colorante amarillo 5`,
                'img/b2.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bebida 3 -->
  <div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid" src="img/b3.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0">S/4.00</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase">Coca-Cola sin azúcar</h5>
          <span class="bebida-desc">Coca-Cola personal sin azúcar, fría, ligera y muy rica</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({ name:'Coca-Cola sin azúcar', price:4.00, img:'img/b3.jpg', desc:'Refresco de cola sin azúcar.' })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Coca-Cola sin azúcar','Refresco de cola sin azúcar.','S/4.00',
                `- Agua carbonatada<br>- Endulzantes<br>- Cafeína<br>- Aroma cola`,
                'img/b3.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bebida 4 -->
<div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid" src="img/b4.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0">S/2.00</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase">Concordia 500 ml</h5>
   <span class="bebida-desc">Concordia personal fría, sabor frutado suave y refrescante.</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({ name:'Concordia 500 ml', price:2.00, img:'img/b4.jpg', desc:'Gaseosa refrescante sabor frutado.' })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Concordia 500 ml','Gaseosa refrescante sabor frutado.','S/2.00',
                `- Agua carbonatada<br>- Azúcar<br>- Saborizantes<br>- Colorantes`,
                'img/b4.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bebida 5 -->
    <div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid" src="img/b5.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0">S/1.50</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase">Guaraná 450 ml</h5>
        
   <span class="bebida-desc">Guaraná personal bien fría, dulce, suave y refrescante.</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({ name:'Guaraná 450 ml', price:1.50, img:'img/b5.jpg', desc:'Bebida gaseosa sabor guaraná.' })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Guaraná 450 ml','Bebida gaseosa sabor guaraná.','S/1.50',
                `- Agua carbonatada<br>- Azúcar<br>- Extracto de guaraná<br>- Color natural`,
                'img/b5.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bebida 6 -->
<div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid" src="img/b6.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0">S/2.00</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase">Sprite 450 ml</h5>
          <span class="bebida-desc">Sprite personal bien helada, sabor limón suave y refrescante.</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({ name:'Sprite 450 ml', price:2.00, img:'img/b6.jpg', desc:'Bebida gaseosa sabor limón.' })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Sprite 450 ml','Bebida gaseosa sabor limón.','S/2.00',
                `- Agua carbonatada<br>- Azúcar<br>- Lima-limón natural`,
                'img/b6.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- =============== FIN TAB 2 =============== -->


<!-- ================= TAB 3: POSTRES ================= -->
<div id="tab-3" class="tab-pane fade show p-0">
  <div class="row g-3">

    <!-- Postre 1 -->
<div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid" src="img/pie.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0">S/7.50</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase">Torta de Chocolate</h5>
          <span class="bebida-desc">Torta suave de chocolate con manjar, bien fresca y dulce.</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({ name:'Torta de Chocolate', price:7.50, img:'img/pie.jpg', desc:'Pastel húmedo de chocolate con relleno de manjar.' })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Torta de Chocolate','Pastel húmedo de chocolate con relleno de manjar.','S/7.50',
                `- Harina<br>- Cacao<br>- Azúcar<br>- Huevos<br>- Mantequilla<br>- Manjar`,
                'img/pie.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Postre 2 -->
<div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid" src="img/torta.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0">S/5.00</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase">Pastel de Crema</h5>
          <span class="bebida-desc">Pastel esponjoso con crema dulce, ligero y muy suave.</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({ name:'Pastel de Crema', price:5.00, img:'img/torta.jpg', desc:'Pastel suave acompañado con crema pastelera dulce.' })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Pastel de Crema','Pastel suave acompañado con crema pastelera dulce.','S/5.00',
                `- Harina<br>- Azúcar<br>- Crema pastelera<br>- Huevos<br>- Vainilla`,
                'img/torta.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Postre 3 -->
<div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid" src="img/leche.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0">S/6.00</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase">Tres Leches de Chocolate</h5>
          <span class="bebida-desc">Bizcocho clásico tres leches con cacao, húmedo y rico.</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({ name:'Tres Leches de Chocolate', price:6.00, img:'img/leche.jpg', desc:'Bizcocho suave bañado en mezcla de tres leches con cacao.' })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Tres Leches de Chocolate','Bizcocho suave bañado en mezcla de tres leches con cacao.','S/6.00',
                `- Bizcocho<br>- Leche evaporada<br>- Leche condensada<br>- Crema de leche<br>- Cacao`,
                'img/leche.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Postre 4 -->
   <div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid" src="img/lu.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0">S/9.00</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase">Mousse de Lúcuma</h5>
          <span class="bebida-desc">Mousse cremoso de lúcuma natural, frío, suave y dulce.</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({ name:'Mousse de Lúcuma', price:9.00, img:'img/lu.jpg', desc:'Postre cremoso con pulpa natural de lúcuma.' })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Mousse de Lúcuma','Postre cremoso con pulpa natural de lúcuma.','S/9.00',
                `- Lúcuma<br>- Crema de leche<br>- Gelatina<br>- Azúcar<br>- Leche condensada`,
                'img/lu.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Postre 5 -->
    <div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid" src="img/galleta.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0">S/1.50</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase">Galleta de Avena</h5>
          <span class="bebida-desc">Galleta casera de avena, suave, dorada y deliciosa.</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({ name:'Galleta de Avena', price:1.50, img:'img/galleta.jpg', desc:'Galleta casera suave elaborada con avena.' })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Galleta de Avena','Galleta casera suave elaborada con avena.','S/1.50',
                `- Avena<br>- Harina<br>- Azúcar<br>- Mantequilla<br>- Huevos<br>- Vainilla`,
                'img/galleta.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Postre 6 -->
<div class="col-lg-6 product-card">

      <div class="d-flex h-100">
        <div class="flex-shrink-0">
          <img class="img-fluid" src="img/cake-3.jpg" style="width:150px;height:85px;">
          <h4 class="bg-dark text-primary p-2 m-0">S/6.00</h4>
        </div>

        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
          <h5 class="text-uppercase">Tres Leches de Vainilla</h5>
          <span class="bebida-desc">Tres leches tradicional de vainilla, húmedo y esponjoso.</span>

          <div class="d-flex gap-2 mt-2">
            <button class="btn btn-warning text-dark btn-sm w-50 btn-add-cart"
              onclick="addToCart({ name:'Tres Leches de Vainilla', price:6.00, img:'img/cake-3.jpg', desc:'Bizcocho clásico bañado en mezcla de tres leches.' })">
              <i class="fa-solid fa-cart-plus"></i> Agregar
            </button>

            <button class="btn btn-danger text-dark btn-sm w-50 btn-details"
              onclick="openDetailsModal(
                'Tres Leches de Vainilla','Bizcocho clásico bañado en mezcla de tres leches.','S/6.00',
                `- Bizcocho<br>- Leche evaporada<br>- Leche condensada<br>- Crema de leche<br>- Vainilla`,
                'img/cake-3.jpg'
              )">
              <i class="fa-solid fa-circle-info"></i> Ver detalles
            </button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- =============== FIN TAB 3 =============== -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


 

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Lo más top del momento 🔥 </h2>
                <h1 class="display-4 text-uppercase">En nuestra Plataforma</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/promo.jpeg" alt="">
                            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                               
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary">Promociones </h4>
                            <p class="text-white m-0">50% en piezas de Pollo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/delivery.jpg" alt="">
                            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                               
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary">Delivery</h4>
                            <p class="text-white m-0">Gratuito</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/promo3.jpg" alt="">
                            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                               
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary">Pago con Yape</h4>
                            <p class="text-white m-0">Servicios </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


   


    <!-- Testimonial Start -->
<div id="testimonios" class="container-fluid about py-5">
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Testimonios</h2>
                <h1 class="display-4 text-uppercase">de Clientes</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Lorena Gómez</h4>
                           
                        </div>
                    </div>
                 <p class="mb-0" style="text-align: justify;">
  El servicio de delivery de KroChicken  es excelente. Siempre llega a tiempo y la comida llega calientita, justo como si la pidiera en el local.
</p>

                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Diego Costa</h4>
                         
                        </div>
                    </div>
                   <p class="mb-0" style="text-align: justify;">
  El delivery de KroChicken  siempre cumple con mis expectativas. Los pedidos llegan rápido, bien empacados y con el pollo crujiente.
</p>

                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Camilo Aguirre</h4>
                            <span>Profession</span>
                        </div>
                    </div>
                   <p class="mb-0" style="text-align: justify;">
  Las promociones de KroChicken  son lo mejor. Siempre encuentro combos con muy buen precio y porciones generosas.
</p>

                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1"> Adriana Mejia</h4>
                         
                        </div>
                    </div>
                   <p class="mb-0" style="text-align: justify;">
  Me encanta pedir en KroChicken  porque siempre tienen buenos descuentos y puedo pagar fácilmente con Yape. 
</p>

                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    
<!-- Footer Start -->
<div class="container-fluid bg-img text-secondary pt-5" style="margin-top: 90px;">
  <div class="container">
    <div class="row gx-5">

      <!-- 🐔 Acerca del negocio -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h4 class="text-uppercase text-warning mb-3">KroChicken</h4>
        <p class="mb-3">
          Pollos a la brasa, combos familiares y postres deliciosos, preparados con ingredientes
          frescos y el mejor sabor casero. Delivery rápido y seguro hasta tu puerta.
        </p>
        <p class="mb-1"><i class="fa-solid fa-location-dot me-2 text-warning"></i>Lima Metropolitana</p>
       
        <p class="mb-3"><i class="fa-brands fa-whatsapp me-2 text-warning"></i>+51 953 744 310</p>
        <div class="d-flex gap-2">
          <a href="#" class="btn btn-sm btn-outline-light rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="btn btn-sm btn-outline-light rounded-circle"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" class="btn btn-sm btn-outline-light rounded-circle"><i class="fa-brands fa-tiktok"></i></a>
        </div>
      </div>

      <!-- 📞 Contacto & Horario -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h5 class="text-uppercase text-warning mb-3">Contacto & horario</h5>
        <p class="mb-2">
          <i class="fa-solid fa-envelope me-2 text-warning"></i>
          contacto@krochicken.com
        </p>
        <p class="mb-2">
          <i class="fa-solid fa-phone-volume me-2 text-warning"></i>
          Central: (01) 123 4567
        </p>
        <p class="mb-3">
          <i class="fa-solid fa-motorcycle me-2 text-warning"></i>
          Delivery a zonas seleccionadas de Lima.
        </p>
        <h6 class="text-uppercase text-light mt-3 mb-2">Horario de atención</h6>
        <ul class="list-unstyled small">
          <li>Lunes a Viernes: 12:00 p.m. - 22:30 p.m.</li>
          <li>Sábados: 12:00 p.m. - 23:00 p.m.</li>
          <li>Domingos y feriados: 8:00 a.m. - 12:00 p.m.</li>
        </ul>
      </div>

      <!-- 🔗 Enlaces & Libro de Reclamaciones -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h5 class="text-uppercase text-warning mb-3">Enlaces útiles</h5>
        <ul class="list-unstyled mb-3">
          <li class="mb-1"><a href="#inicio" class="text-secondary text-decoration-none"><i class="fa-solid fa-angle-right me-2"></i>Inicio</a></li>
          <li class="mb-1"><a href="#menu" class="text-secondary text-decoration-none"><i class="fa-solid fa-angle-right me-2"></i>Menú</a></li>
          <li class="mb-1"><a href="#servicios" class="text-secondary text-decoration-none"><i class="fa-solid fa-angle-right me-2"></i>Servicios</a></li>
          <li class="mb-1"><a href="#testimonios" class="text-secondary text-decoration-none"><i class="fa-solid fa-angle-right me-2"></i>Testimonios</a></li>
          <li class="mb-1"><a href="consultas.php" class="text-secondary text-decoration-none"><i class="fa-solid fa-angle-right me-2"></i>Consultas</a></li>
        </ul>

        <!-- ✅ BOTÓN LIBRO DE RECLAMACIONES (Google Form) -->
        <div class="mt-3">
          <h6 class="text-uppercase text-light mb-2">Libro de Reclamaciones</h6>
          <p class="small mb-2">
            Si tienes algún reclamo o queja, regístralo aquí.
          </p>

          <a
            href="https://forms.gle/THxQVXysWXjpkicq9"
            target="_blank"
            class="btn btn-danger text-white fw-bold w-100 rounded-3 shadow-sm py-2"
            style="font-size:1rem; letter-spacing:.4px;"
          >
            <i class="fa-solid fa-book me-2"></i> Libro de Reclamaciones
          </a>
        </div>
        <!-- ✅ FIN BOTÓN -->

      </div>

    </div>
  </div>
</div>

<!-- 🔹 Barra inferior -->
<div class="container-fluid text-secondary py-3" style="background:#111111;">
  <div class="container text-center small">
    <p class="mb-0">
      &copy; <span class="text-white">2025 KroChicken</span>. Todos los derechos reservados.
    </p>
  </div>
</div>
<!-- Footer End -->

  



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
	

<script>
// Convierte cualquier link de YouTube (youtu.be o watch?v=) a /embed/<id>
function toEmbedUrl(url) {
  try {
    const u = new URL(url);
    if (u.hostname.includes('youtu.be')) {
      // https://youtu.be/<ID>?...
      return 'https://www.youtube.com/embed/' + u.pathname.slice(1);
    }
    if (u.hostname.includes('youtube.com')) {
      if (u.pathname.startsWith('/embed/')) return url;
      if (u.pathname === '/watch') {
        const id = u.searchParams.get('v');
        if (id) return 'https://www.youtube.com/embed/' + id;
      }
    }
  } catch (e) {}
  return url;
}

const modal = document.getElementById('videoModal');
const iframe = document.getElementById('video');

modal.addEventListener('show.bs.modal', function (ev) {
  const btn = ev.relatedTarget;
  const raw = btn?.getAttribute('data-src') || '';
  let embed = toEmbedUrl(raw);

  // autoplay + opciones
  const sep = embed.includes('?') ? '&' : '?';
  embed = embed + sep + 'autoplay=1&rel=0&modestbranding=1';

  iframe.setAttribute('src', embed);
  iframe.setAttribute('allow', 'autoplay; encrypted-media; picture-in-picture');
  iframe.setAttribute('allowfullscreen', 'true');
  iframe.setAttribute('title', 'YouTube video');
});

// Limpiar src para detener el video al cerrar
modal.addEventListener('hide.bs.modal', function () {
  iframe.setAttribute('src', '');
});
</script>

<script>
  // Convierte youtu.be / watch?v= a /embed/
  function toEmbedUrl(url) {
    try {
      const u = new URL(url);
      if (u.hostname.includes('youtu.be')) return 'https://www.youtube.com/embed/' + u.pathname.slice(1);
      if (u.hostname.includes('youtube.com')) {
        if (u.pathname.startsWith('/embed/')) return url;
        if (u.pathname === '/watch') {
          const id = u.searchParams.get('v');
          if (id) return 'https://www.youtube.com/embed/' + id;
        }
      }
    } catch(e) {}
    return url;
  }

  const modalEl = document.getElementById('videoModal');
  const frame   = document.getElementById('videoFrame');

  modalEl.addEventListener('show.bs.modal', (ev) => {
    const btn  = ev.relatedTarget;
    const raw  = btn?.getAttribute('data-src') || '';
    let embed  = toEmbedUrl(raw);
    const sep  = embed.includes('?') ? '&' : '?';
    // Autoplay ON; si no lo quieres, quita autoplay=1
    frame.src  = embed + sep + 'autoplay=1&rel=0&modestbranding=1&playsinline=1';
    frame.allow = 'autoplay; encrypted-media; picture-in-picture';
  });

  modalEl.addEventListener('hide.bs.modal', () => {
    frame.src = ''; // Detiene el video al cerrar
  });
</script>
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="cartOffcanvas"
     aria-labelledby="cartOffcanvasLabel"
     data-bs-backdrop="false"
     data-bs-scroll="true">

  <div class="offcanvas-header">
    <h5 id="cartOffcanvasLabel" class="mb-0">
      <i class="fa-solid fa-cart-shopping me-2"></i>Tu carrito
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
  </div>

  <div class="offcanvas-body d-flex flex-column">
    <!-- LISTA -->
    <ul id="cartList" class="list-group mb-3"></ul>

    <!-- TOTAL -->
    <div class="mt-auto d-flex justify-content-between align-items-center">
      <strong>Total:</strong>
      <span id="cartTotal" class="fs-5">S/ 0.00</span>
    </div>

    <!-- BOTONES -->
    <div class="mt-3 d-flex gap-2">
      <button id="clearCart" class="btn btn-outline-secondary w-50">Vaciar</button>

      <!-- ✅ pagar con submit -->
      <button id="checkout" class="btn btn-primary w-50 text-white">
        Pagar
      </button>
    </div>

    <!-- FORM OCULTO PARA ENVÍO -->
    <form id="payForm" action="pago.php" method="post" class="d-none">
      <input type="hidden" name="carrito" id="carritoField">
    </form>
  </div>
</div>


<div class="modal fade" id="zoomModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark">
      <div class="modal-body p-0">
        <img id="zoomImg" src="" alt="Vista ampliada" class="img-fluid w-100">
      </div>
      <div class="modal-footer justify-content-between">
        <div id="zoomTitle" class="text-white small"></div>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap 5 JS (si ya lo tienes, no lo dupliques) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

// === Botón para vaciar carrito ===
document.getElementById('clearCart').addEventListener('click', () => {
  // Limpia el carrito del localStorage
  localStorage.removeItem('carrito');

  // Limpia visualmente el carrito (offcanvas)
  document.getElementById('cartList').innerHTML = '';
  document.getElementById('cartTotal').textContent = 'S/ 0.00';

  // Lanza un evento para que otras páginas (como pago.php) sepan que se limpió
  localStorage.setItem('carritoLimpio', Date.now());

  alert("🧹 Carrito vaciado correctamente.");
});

(function() {
  // --- UTILIDADES ---
  const $ = (sel, ctx=document) => ctx.querySelector(sel);
  const $$ = (sel, ctx=document) => [...ctx.querySelectorAll(sel)];

  // Carrito en memoria + persistencia
  let cart = [];
  try { cart = JSON.parse(localStorage.getItem('cart') || '[]'); } catch(e){ cart = []; }

  const money = s => {
    // Acepta "S/35.00" o "35.00" y devuelve número
    const n = parseFloat(String(s).replace(/[^\d.]/g,''));
    return isNaN(n) ? 0 : n;
  };

  function updateCartCount() {
    const count = cart.reduce((acc, item) => acc + (item.qty || 1), 0);
    const el = $('#cartCount');
    if (el) el.textContent = count;
  }

  function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
    renderCart();
  }

  function addToCart(item) {
    // Agrupa por título+precio
    const key = item.title + '|' + item.price;
    const found = cart.find(i => (i.title + '|' + i.price) === key);
    if (found) found.qty += 1;
    else cart.push({...item, qty: 1});
    saveCart();
  }

  function removeFromCart(idx) {
    cart.splice(idx, 1);
    saveCart();
  }

  function renderCart() {
    const list = $('#cartList');
    const totalEl = $('#cartTotal');
    if (!list || !totalEl) return;

    list.innerHTML = '';
    let total = 0;

    cart.forEach((item, idx) => {
      const line = money(item.price) * item.qty;
      total += line;

      const li = document.createElement('li');
      li.className = 'list-group-item d-flex align-items-center justify-content-between';
      li.innerHTML = `
        <div class="d-flex align-items-center">
          <img src="${item.img}" alt="" class="rounded me-3" style="width:56px;height:32px;object-fit:cover;">
          <div>
            <div class="fw-semibold">${item.title}</div>
            <div class="text-muted small">${item.price} × ${item.qty}</div>
          </div>
        </div>
        <div class="d-flex align-items-center gap-2">
          <strong>S/ ${line.toFixed(2)}</strong>
          <button class="btn btn-sm btn-outline-secondary" data-action="qty-" data-idx="${idx}">-</button>
          <button class="btn btn-sm btn-outline-secondary" data-action="qty+" data-idx="${idx}">+</button>
          <button class="btn btn-sm btn-outline-danger" data-action="remove" data-idx="${idx}"><i class="fa-solid fa-trash"></i></button>
        </div>`;
      list.appendChild(li);
    });

    totalEl.textContent = 'S/ ' + total.toFixed(2);
  }

  // --- INYECTAR BOTONES SOBRE CADA IMAGEN ---
  // Detecta el patrón que me pasaste (img dentro de .flex-shrink-0)
  $$('.row.g-3 .d-flex.h-100 .flex-shrink-0').forEach(box => {
    const img = box.querySelector('img');
    if (!img) return;

    // Envolver imagen con un contenedor para overlay
    const wrapper = document.createElement('div');
    wrapper.className = 'product-thumb';
    img.parentNode.insertBefore(wrapper, img);
    wrapper.appendChild(img);

    // Hacer que la imagen también agregue al carrito
    img.classList.add('product-img');
    img.style.cursor = 'pointer';
    img.title = 'Click para agregar al carrito';

    // Capa de acciones
    const actions = document.createElement('div');
    actions.className = 'product-actions';
    actions.innerHTML = `
     
      <button class="btn btn-light btn-sm zoom-image" title="Ver más grande">
        <i class="fa-solid fa-magnifying-glass-plus"></i>
      </button>
    `;
    wrapper.appendChild(actions);
  });

  // --- HANDLERS GLOBALES ---
  document.addEventListener('click', (e) => {
    const addBtn = e.target.closest('.add-to-cart');
    const zoomBtn = e.target.closest('.zoom-image');
    const imgClick = e.target.closest('.product-img');

    if (addBtn || imgClick) {
      const cell = e.target.closest('.d-flex.h-100');
      if (!cell) return;
      const img = cell.querySelector('img');
      const priceEl = cell.querySelector('h4');
      const titleEl = cell.querySelector('h5');

      const item = {
        title: titleEl ? titleEl.textContent.trim() : 'Producto',
        price: priceEl ? priceEl.textContent.trim() : 'S/0.00',
        img: img ? img.getAttribute('src') : ''
      };
      addToCart(item);

      // feedback rápido
      if (imgClick) {
        const button = $('#cartButton');
        if (button) {
          const offcanvas = bootstrap.Offcanvas.getOrCreateInstance($('#cartOffcanvas'));
          offcanvas.show();
        }
      }
    }

    if (zoomBtn) {
      const cell = e.target.closest('.d-flex.h-100');
      const img = cell?.querySelector('img');
      const title = cell?.querySelector('h5')?.textContent.trim() || '';
      if (img) {
        $('#zoomImg').src = img.getAttribute('src');
        $('#zoomTitle').textContent = title;
        const modal = new bootstrap.Modal($('#zoomModal'));
        modal.show();
      }
    }

    // Controles del carrito (+, -, remover)
    const actionBtn = e.target.closest('[data-action]');
    if (actionBtn) {
      const idx = +actionBtn.dataset.idx;
      const action = actionBtn.dataset.action;
      const item = cart[idx];
      if (!item) return;

      if (action === 'qty+') item.qty += 1;
      if (action === 'qty-' && item.qty > 1) item.qty -= 1;
      if (action === 'qty-' && item.qty === 1) cart.splice(idx,1);
      if (action === 'remove') removeFromCart(idx);

      saveCart();
    }

    // Vaciar carrito
    if (e.target.id === 'clearCart') {
      cart = [];
      saveCart();
    }
  });

  // Init UI
  updateCartCount();
  renderCart();
})();
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const clean = () => {
    document.querySelectorAll('.modal-backdrop, .offcanvas-backdrop').forEach(el => el.remove());
    document.body.classList.remove('modal-open');
  };
  clean();
  document.addEventListener('hidden.bs.modal', clean);
  document.addEventListener('hidden.bs.offcanvas', clean);
});
</script>

<!-- 🔹 Modal Pedido con Repartidor -->
<div class="modal fade" id="repartidorModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">
          <i class="fa-solid fa-motorcycle text-warning"></i> Confirmar Pedido
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body bg-light">
        <form id="pedidoForm" method="POST" action="guardar_pedido.php">

          <!-- Imagen del producto -->
          <div class="text-center mb-3">
            <img id="prodImg" src="" alt="Producto" class="img-fluid rounded shadow-sm" style="max-width:250px;">
            <p class="fw-bold mt-2 mb-1" id="prodNombre">Producto</p>
            <p class="text-danger mb-2">Precio: S/ <span id="prodPrecio">0.00</span></p>
          </div>

          <!-- Cantidad -->
          <div class="mb-3">
            <label for="cantidad" class="form-label fw-bold">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" class="form-control" min="1" value="1" required>
          </div>

          <!-- DNI -->
          <div class="mb-3">
            <label for="dni" class="form-label fw-bold">DNI del cliente</label>
            <input type="text" id="dni" name="dni" class="form-control" maxlength="8" pattern="[0-9]{8}" required>
          </div>

          <!-- Repartidor -->
          <div class="mb-3">
            <label for="repartidor" class="form-label fw-bold">Selecciona tu repartidor</label>
            <select id="repartidor" name="repartidor" class="form-select" required>
              <option value="">-- Elige quién llevará tu pedido --</option>
              <option value="Carlos">Carlos - Moto Roja</option>
              <option value="María">María - Scooter Azul</option>
              <option value="Luis">Luis - Bicimoto</option>
              <option value="Jorge">Jorge - Auto Gris</option>
              <option value="Andrea">Andrea - Moto Negra</option>
            </select>
          </div>

          <!-- Pago con Yape -->
          <div class="text-center mb-3">
            <p class="fw-bold text-dark">💰 Paga con Yape al instante</p>
            <img src="img/yape.jpg" alt="Yape QR" class="img-fluid rounded shadow-sm" style="max-width:200px;">
          </div>

          <!-- Botones -->
          <div class="d-flex justify-content-end gap-2">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-dark text-white fw-bold">
              <i class="fa-solid fa-check"></i> Aceptar Pedido
            </button>
          </div>

          <!-- Ocultos -->
          <input type="hidden" id="producto" name="producto">
          <input type="hidden" id="precio" name="precio">
          <input type="hidden" id="hora" name="hora">
        </form>
      </div>
    </div>
  </div>
</div>


<!-- 🔹 Modal de Confirmación del Pedido -->
<div class="modal fade" id="confirmacionModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4">
      <h4 class="text-success fw-bold mb-3">
        <i class="fa-solid fa-circle-check"></i> ¡Pedido Confirmado!
      </h4>
      <img src="img/delii.gif" alt="Delivery en camino" class="img-fluid mb-3" style="max-width:250px;">
      <p class="fw-bold fs-5">
        🚴‍♂️ <span id="repartidorNombre"></span> está en camino.<br>
        Tu pedido llegará en <span class="text-danger">5 minutos</span>.
      </p>
      <button class="btn btn-dark mt-3" data-bs-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>

<!-- 🔹 Contador visible fuera del modal -->
<div id="contadorGlobal" 
     style="position: fixed; bottom: 20px; right: 20px; background: #212529; color: #fff; 
            padding: 15px 20px; border-radius: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.4); 
            display: none; text-align: center; z-index: 2000; cursor: move;">
  <p class="fw-bold mb-2">⏱ Tiempo:</p>
  <h4 id="tiempoRestante" class="text-warning fw-bold">5:00</h4>
  <button id="pararPedido" class="btn btn-danger btn-sm mt-2">Parar pedido</button>
</div>

<script>
let temporizador; // variable global del reloj

// Evento al confirmar el pedido

document.getElementById('pedidoForm').addEventListener('submit', function(e) {
  e.preventDefault(); 

  const form = e.target;
  const repartidor = document.getElementById('repartidor').value;

  const formData = new FormData(form);
  fetch('guardar_pedido.php', { method: 'POST', body: formData })
    .then(r => r.text())
    .then(() => {
      const modalPedido = bootstrap.Modal.getInstance(document.getElementById('repartidorModal'));
      modalPedido.hide();
      document.getElementById('repartidorNombre').textContent = repartidor;
      new bootstrap.Modal(document.getElementById('confirmacionModal')).show();

      // ⏰ Inicia el contador con 5 minutos (300 segundos)
      iniciarContadorGlobal(5 * 60);
    })
    .catch(err => alert("Error al guardar el pedido: " + err));
});

// 🔹 Función para iniciar el contador fuera del modal
function iniciarContadorGlobal(segundos) {
  clearInterval(temporizador);
  const contenedor = document.getElementById('contadorGlobal');
  const tiempoElem = document.getElementById('tiempoRestante');
  contenedor.style.display = 'block'; // Mostrar contador

  function actualizar() {
    const min = Math.floor(segundos / 60);
    const seg = segundos % 60;
    tiempoElem.textContent = `${min}:${seg < 10 ? '0' : ''}${seg}`;

    if (segundos <= 0) {
      clearInterval(temporizador);
      tiempoElem.textContent = "🚪 ¡Repartidor afuera!";
      tiempoElem.classList.remove('text-warning');
      tiempoElem.classList.add('text-success');
      return;
    }
    segundos--;
  }

  actualizar();
  temporizador = setInterval(actualizar, 1000);
}

// 🔹 Botón para parar el pedido (detener el tiempo)
document.getElementById('pararPedido').addEventListener('click', () => {
  clearInterval(temporizador);
  const tiempoElem = document.getElementById('tiempoRestante');
  tiempoElem.textContent = "⏸ Pedido detenido";
  tiempoElem.classList.remove('text-warning');
  tiempoElem.classList.add('text-danger');
});

// 🔹 Hacer que el contador sea arrastrable
dragElement(document.getElementById("contadorGlobal"));

function dragElement(elmnt) {
  let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  elmnt.onmousedown = dragMouseDown;

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    elmnt.style.bottom = "auto"; // Evita que vuelva abajo
    elmnt.style.right = "auto";
  }

  function closeDragElement() {
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>


<script>
function openRepartidorModal(nombre, precio, imagen) {
  document.getElementById('prodNombre').textContent = nombre;
  document.getElementById('prodPrecio').textContent = precio.toFixed(2);
  document.getElementById('prodImg').src = imagen;
  document.getElementById('producto').value = nombre;
  document.getElementById('precio').value = precio;
  
  const ahora = new Date();
  const hora = ahora.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
  document.getElementById('hora').value = hora;

  new bootstrap.Modal(document.getElementById('repartidorModal')).show();
}


</script>




<!-- === Chat Bot Flotante (Delivery) === -->
<style>
  :root{
    --kfc-red:#e4002b; --kfc-red-2:#ff364d; --ink:#f2f2f2; --bg:#111; --line:#262626;
  }
  .chat-launcher{
    position:fixed; bottom:88px; right:20px; width:56px; height:56px; z-index:9999;
    border-radius:50%; display:flex; align-items:center; justify-content:center;
    background:var(--kfc-red); color:#fff; border:2px solid #000; box-shadow:0 10px 24px rgba(0,0,0,.35);
    cursor:pointer; font-size:22px;
  }
  .chat-launcher:hover{ filter:brightness(1.08) }
  .chatbot{
    position:fixed; bottom:20px; right:20px; width:320px; max-width:92vw; z-index:10000;
    background:#181818; color:var(--ink); border:1px solid var(--line);
    border-radius:16px; box-shadow:0 20px 48px rgba(0,0,0,.45); display:none; overflow:hidden;
  }
  .chatbot-header{
    display:flex; align-items:center; justify-content:space-between; gap:8px;
    padding:10px 12px; background:linear-gradient(180deg,#1b1b1b,#141414);
    border-bottom:1px solid var(--line);
  }
  .chatbot-header h6{margin:0; font-weight:900; letter-spacing:.3px}
  .chatbot-header .badge{background:var(--kfc-red); padding:4px 8px; border-radius:999px; font-size:11px}
  .chatbot-body{ height:360px; overflow:auto; padding:12px; background:#0f0f0f }
  .msg{ display:flex; gap:8px; margin:8px 0 }
  .msg .bubble{
    padding:10px 12px; border-radius:12px; font-size:14px; line-height:1.35;
    border:1px solid #222; max-width:78%;
  }
  .msg.bot .bubble{ background:#141414; color:#eaeaea }
  .msg.you{ justify-content:flex-end }
  .msg.you .bubble{ background:#222; color:#fff; border-color:#333 }
  .typing{ font-size:12px; color:#aaa; margin-left:34px }
  .chatbot-footer{ padding:8px; border-top:1px solid var(--line); background:#151515 }
  .quick-replies{ display:flex; flex-wrap:wrap; gap:6px; margin:4px 0 8px }
  .qr-btn{
    background:#1a1a1a; color:#ddd; border:1px solid #2a2a2a; border-radius:999px; padding:6px 10px; font-size:12px; cursor:pointer;
  }
  .qr-btn:hover{ border-color:#3a3a3a }
  .input-row{ display:flex; gap:6px }
  .input-row input{
    flex:1; border-radius:10px; border:1px solid #2b2b2b; background:#101010; color:#eee; padding:10px 12px; outline:none;
  }
  .input-row button{
    background:var(--kfc-red); color:#fff; border:2px solid #000; border-radius:10px; padding:10px 12px; font-weight:800; cursor:pointer;
  }
  .input-row button:hover{ background:var(--kfc-red-2) }
  .cta-row{ display:flex; gap:6px; margin-top:6px }
  .cta-row a{
    flex:1; text-align:center; text-decoration:none; padding:8px 10px; border-radius:10px; font-weight:800;
    border:2px solid #000; background:#0f0f0f; color:#fff; border-color:#333;
  }
  .cta-row a.wh{ background:#25d366; color:#fff; border-color:#0b5 }
  .hide{ display:none !important }
</style>

<div id="chatLauncher" class="chat-launcher" title="Chatear con KroChicken ">
  <i class="fa-solid fa-message"></i>
</div>

<div id="chatBot" class="chatbot" aria-live="polite">
  <div class="chatbot-header">
    <div class="d-flex align-items-center gap-2">
      <span style="width:10px;height:10px;background:#18c964;border-radius:50%;display:inline-block"></span>
      <h6 class="m-0">KroChicken  Asistente</h6>
    </div>
    <span class="badge">En línea</span>
  </div>

  <div class="chatbot-body" id="chatBody">
    <!-- mensajes -->
  </div>

  <div class="chatbot-footer">
    <div class="quick-replies" id="quickReplies">
      <button class="qr-btn">Promos</button>
      <button class="qr-btn">Menú</button>
      <button class="qr-btn">Delivery</button>
      <button class="qr-btn">Ubicación</button>
      <button class="qr-btn">Pagar con Yape</button>
    </div>
    <div class="input-row">
      <input id="chatInput" type="text" placeholder="Escribe aquí... (Enter para enviar)">
      <button id="chatSend"><i class="fa-solid fa-paper-plane"></i></button>
    </div>
    <div class="cta-row">
      <a id="whBtn" class="wh" target="_blank" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
      <a href="#" id="minBtn"><i class="fa-solid fa-chevron-down"></i> Minimizar</a>
    </div>
  </div>
</div>

<script>
(function(){
  // Config
  const WHATSAPP_NUM = '51953744310'; // tu número sin '+'
  const START_PROMPT = '¿Quieres hacer algún delivery hoy? 🛵🍗';

  // Helpers
  const $ = s => document.querySelector(s);
  const chat = $('#chatBot'), launcher = $('#chatLauncher');
  const body = $('#chatBody'), input = $('#chatInput'), sendBtn = $('#chatSend');
  const qr = $('#quickReplies'), whBtn = $('#whBtn'), minBtn = $('#minBtn');

  function openChat(){
    chat.style.display = 'block';
    launcher.classList.add('hide');
    if(!body.dataset.started){
      body.dataset.started = '1';
      bot(START_PROMPT);
      setTimeout(()=>bot('Puedo ayudarte con *promos, menú, delivery, ubicación* o *pagar con Yape*.'), 500);
    }
  }
  function closeChat(){
    chat.style.display = 'none';
    launcher.classList.remove('hide');
  }

  launcher.addEventListener('click', openChat);
  minBtn.addEventListener('click', (e)=>{ e.preventDefault(); closeChat(); });

  // Render
  function scrollDown(){ body.scrollTop = body.scrollHeight; }
  function htmlMsg(cls, text){
    const el = document.createElement('div');
    el.className = 'msg '+cls;
    el.innerHTML = `<div class="bubble">${text}</div>`;
    body.appendChild(el);
    scrollDown();
  }
  function you(text){ htmlMsg('you', escapeHtml(text)); }
  function bot(text){
    // typing simulada corta
    const t = document.createElement('div');
    t.className = 'typing'; t.textContent = 'Escribiendo…';
    body.appendChild(t); scrollDown();
    setTimeout(()=>{ t.remove(); htmlMsg('bot', linkify(text)); }, 350);
  }
  function escapeHtml(str){ return str.replace(/[&<>"']/g, m=>({ '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;' }[m])); }
  function linkify(str){
    // mini markdown para *negrita*
    return escapeHtml(str).replace(/\*([^*]+)\*/g,'<strong>$1</strong>');
  }

  // Respuestas simples (Reglas)
  function reply(q){
    const s = q.toLowerCase();
    if(/promo|descuento|oferta/.test(s)){
      return 'Tenemos *50% en piezas de pollo* hoy. 👉 Ve al menú Promos, o escribe *Menú*.';
    }
    if(/men[uú]/.test(s)){
      return 'Nuestro *menú* incluye combos, bebidas y postres. ¿Qué te antoja hoy? 🍗🥤🍰';
    }
    if(/ubicaci|d[oó]nde|mapa/.test(s)){
      return 'Estamos en Lima (referencia). Mira el mapa en la web, o comparte tu dirección para coordinar el *delivery*.';
    }
    if(/yape|pagar|pago/.test(s)){
      return 'Puedes *pagar con Yape*. Al confirmar tu pedido verás el *QR* para cancelar al instante.';
    }
    if(/delivery|enviar|reparto|env[ií]o/.test(s)){
      return '¡Sí! Hacemos *delivery* 🚚. Dime tu distrito y qué combo deseas.';
    }
    if(/hola|buenas|buenos d[ií]as|buenas tardes|buenas noches/.test(s)){
      return '¡Hola! 👋 ¿Quieres hacer algún *delivery* hoy?';
    }
    if(/gracias|thank/.test(s)){
      return '¡Con gusto! ¿Algo más en lo que te ayude?';
    }
    if(/whats|wa|whatsapp/.test(s)){
      return 'Puedes escribirnos por *WhatsApp* con el botón de abajo. 💬';
    }
    return 'No estoy seguro de entender. Prueba con *Promos, Menú, Delivery, Ubicación* o *Pagar con Yape*.';
  }

  // Enviar
  function send(){
    const text = (input.value || '').trim();
    if(!text) return;
    you(text);
    input.value = '';
    const r = reply(text);
    bot(r);
    // Actualiza link de WhatsApp con el último mensaje
    const waText = encodeURIComponent('Hola, quiero más información: '+text);
    whBtn.href = 'https://wa.me/'+WHATSAPP_NUM+'?text='+waText;
  }
  sendBtn.addEventListener('click', (e)=>{ e.preventDefault(); send(); });
  input.addEventListener('keydown', (e)=>{ if(e.key==='Enter'){ e.preventDefault(); send(); } });

  // Quick Replies
  qr.addEventListener('click', (e)=>{
    const btn = e.target.closest('.qr-btn'); if(!btn) return;
    input.value = btn.textContent.trim();
    send();
  });

  // Abre el chat si el user hace hover en el launcher en desktop (opcional)
  launcher.addEventListener('mouseenter', ()=>{ launcher.style.transform='translateY(-1px)' });
  launcher.addEventListener('mouseleave', ()=>{ launcher.style.transform='none' });

  // Inicializa botón de WhatsApp
  whBtn.href = 'https://wa.me/'+WHATSAPP_NUM+'?text='+encodeURIComponent('Hola, quiero hacer un delivery.');
})();
</script>
<!-- === /Chat Bot Flotante === -->

<!-- Visor ampliado -->
<div class="modal fade" id="imgZoomModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="zoom-toolbar">
          <button type="button" class="btn btn-sm" id="btnZoomOut" title="-"><i class="fa-solid fa-magnifying-glass-minus"></i></button>
          <button type="button" class="btn btn-sm" id="btnZoomReset" title="1:1"><i class="fa-solid fa-rotate"></i></button>
          <button type="button" class="btn btn-sm" id="btnZoomIn" title="+"><i class="fa-solid fa-magnifying-glass-plus"></i></button>
          <button type="button" class="btn btn-sm" data-bs-dismiss="modal" title="Cerrar"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <img id="zoomCanvas" src="" alt="Vista ampliada">
      </div>
    </div>
  </div>
</div>
<script>
(function(){
  const $ = (s, c=document) => c.querySelector(s);
  const $$ = (s, c=document) => [...c.querySelectorAll(s)];

  // === 3.1 LENTE sobre imágenes del Team ===
  // Aplica a todas las imágenes dentro de .team-item .position-relative
  $$('.team-item .position-relative').forEach(box => {
    const img = box.querySelector('img.img-fluid');
    if(!img) return;

    // Botón/indicador de lupa
    if(!box.querySelector('.zoom-hint')){
      const hint = document.createElement('div');
      hint.className = 'zoom-hint';
      hint.innerHTML = '<i class="fa-solid fa-magnifying-glass-plus"></i> Lupa';
      box.appendChild(hint);
    }

    // Crea el lente
    const lens = document.createElement('div');
    lens.className = 'zoom-lens';
    box.appendChild(lens);

    // Actualiza el fondo del lente con la imagen
    function syncLensBackground(){
      // Usa la ruta real del <img>
      lens.style.backgroundImage = `url("${img.src}")`;
      // Ajusta size del fondo en base al zoom deseado (en CSS está 200%)
      // Se mantiene como está.
    }
    syncLensBackground();

    // Mover lente con el puntero
    function moveLens(e){
      const rect = img.getBoundingClientRect();
      const x = (e.touches ? e.touches[0].clientX : e.clientX) - rect.left;
      const y = (e.touches ? e.touches[0].clientY : e.clientY) - rect.top;

      // Limitar el lente dentro de la imagen
      const half = lens.offsetWidth / 2;
      const lx = Math.max(rect.left + half, Math.min((e.touches ? e.touches[0].clientX : e.clientX), rect.right - half));
      const ly = Math.max(rect.top  + half, Math.min((e.touches ? e.touches[0].clientY : e.clientY), rect.bottom - half));

      lens.style.left = (lx - box.getBoundingClientRect().left - half) + 'px';
      lens.style.top  = (ly - box.getBoundingClientRect().top  - half) + 'px';

      // Posición de fondo (porcentaje) para centrar el zoom donde está el puntero
      const px = ((x / rect.width) * 100);
      const py = ((y / rect.height) * 100);
      lens.style.backgroundPosition = `${px}% ${py}%`;
    }

    function enter(){ lens.style.opacity = '1'; }
    function leave(){ lens.style.opacity = '0'; }

    // Eventos
    box.addEventListener('mousemove', moveLens);
    box.addEventListener('touchmove', moveLens, {passive:true});
    box.addEventListener('mouseenter', enter);
    box.addEventListener('mouseleave', leave);
    box.addEventListener('touchstart', enter, {passive:true});
    box.addEventListener('touchend', leave);

    // Click para abrir visor ampliado
    box.addEventListener('click', () => openZoomModal(img.src));
  });

  // === 3.2 VISOR ampliado con zoom y arrastre ===
  const modalEl = $('#imgZoomModal');
  const zoomImg = $('#zoomCanvas');
  const btnIn   = $('#btnZoomIn');
  const btnOut  = $('#btnZoomOut');
  const btn1x   = $('#btnZoomReset');

  let scale = 1, minScale = 1, maxScale = 5;
  let pos = {x:0,y:0}, last = {x:0,y:0}, dragging = false;

  function openZoomModal(src){
    zoomImg.src = src;
    // Reset transform
    scale = 1; pos.x = 0; pos.y = 0; applyTransform();
    const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
    modal.show();
  }

  function applyTransform(){
    zoomImg.style.transform = `translate(${pos.x}px, ${pos.y}px) scale(${scale})`;
  }
  function zoomBy(f){
    const newScale = Math.max(minScale, Math.min(maxScale, scale * f));
    scale = newScale; applyTransform();
  }
  function zoomTo(s){
    scale = Math.max(minScale, Math.min(maxScale, s));
    applyTransform();
  }

  // Arrastre
  zoomImg.addEventListener('mousedown', e => {
    dragging = true; zoomImg.classList.add('dragging');
    last.x = e.clientX - pos.x; last.y = e.clientY - pos.y;
  });
  window.addEventListener('mousemove', e => {
    if(!dragging) return;
    pos.x = e.clientX - last.x; pos.y = e.clientY - last.y;
    applyTransform();
  });
  window.addEventListener('mouseup', () => { dragging = false; zoomImg.classList.remove('dragging'); });

  // Wheel zoom
  zoomImg.addEventListener('wheel', e => {
    e.preventDefault();
    zoomBy(e.deltaY < 0 ? 1.1 : 0.9);
  }, {passive:false});

  // Botones
  btnIn?.addEventListener('click', () => zoomBy(1.15));
  btnOut?.addEventListener('click', () => zoomBy(0.87));
  btn1x?.addEventListener('click', () => { zoomTo(1); pos.x=0; pos.y=0; applyTransform(); });

  // Exponer función global para reusar si quieres
  window.openZoomModal = openZoomModal;
})();
</script>
<script>
document.getElementById("checkout")?.addEventListener("click", () => {
  localStorage.setItem("carrito", getCarritoJSON());
  window.location.href = "pago.php";
});

</script>

<!-- 🧡 Modal Calificación -->
<div class="modal fade" id="modalCalificacion" tabindex="-1" aria-labelledby="modalCalificacionLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg rounded-4">
      <div class="modal-header bg-danger text-white rounded-top-4">
        <h5 class="modal-title" id="modalCalificacionLabel">💬 Califica tu experiencia</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form action="guardar_calificacion.php" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label fw-bold">Tu nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Puntuación (1 a 5 ⭐)</label>
            <input type="number" name="calificacion" min="1" max="5" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Tu comentario</label>
            <textarea name="comentario" class="form-control" rows="3" placeholder="Escribe tu opinión..." required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger w-100 rounded-pill fw-bold">Enviar Calificación</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
// --- Sistema de carrito --- //
const botones = document.querySelectorAll('.add-to-cart');

botones.forEach(boton => {
  boton.addEventListener('click', e => {
    const card = e.target.closest('.d-flex.h-100'); // contenedor del producto
    const nombre = card.querySelector('h5').textContent.trim();
    const precioTexto = card.querySelector('h4').textContent.trim();
    const precio = parseFloat(precioTexto.replace(/[^\d.]/g, ''));
   const img = card.querySelector('.product-img')?.src || '';

    // Recuperar carrito actual
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

    // Verificar si ya existe
    const existente = carrito.find(p => p.nombre === nombre);
    if (existente) {
      existente.cantidad++;
    } else {
      carrito.push({ nombre, precio, cantidad: 1, img });
    }

    // Guardar de nuevo
    localStorage.setItem('carrito', JSON.stringify(carrito));

    // Confirmar al usuario
    alert(`✅ ${nombre} agregado al carrito`);
  });
});
</script>

<script>
// --- LIMPIAR CARRITO EN pago.php ---
document.getElementById('btnLimpiar').addEventListener('click', () => {
  // Vacía el localStorage del carrito
  localStorage.removeItem('carrito');

  // Limpia visualmente el carrito en esta página
  const lista = document.getElementById('listaCarrito');
  const total = document.getElementById('totalCarrito');
  if (lista) lista.innerHTML = '';
  if (total) total.textContent = 'S/ 0.00';

  alert("🧹 Carrito limpiado correctamente.");

  // También limpia el carrito del index.html (usará el mismo localStorage)
});
</script>


<script>
// ✅ Mostrar el nombre guardado
document.addEventListener("DOMContentLoaded", () => {
  const nombre = localStorage.getItem("cliente_nombre");
  const mensaje = document.getElementById("mensajeBienvenida");

  if (nombre) {
    mensaje.textContent = `Bienvenido, ${nombre} 🍗`;
  } else {
    mensaje.textContent = "Bienvenido, Invitado 🍗";
  }
});

// ✅ Borrar nombre y redirigir al cerrar sesión
document.getElementById("cerrarSesion").addEventListener("click", () => {
  localStorage.removeItem("cliente_nombre");
  alert("Has cerrado sesión correctamente 🍗");
  window.location.href = "index.php";
});
</script>
<script>
(function(){
  const $ = (s, c=document)=>c.querySelector(s);
  const KEY = 'carrito';

  const moneyNum = s => parseFloat(String(s).replace(/[^\d.]/g,''))||0;
  const moneyStr = n => 'S/ ' + (Number(n)||0).toFixed(2);

  let carrito = [];
  try { carrito = JSON.parse(localStorage.getItem(KEY)||'[]'); } catch(_) { carrito = []; }

  function save(){ localStorage.setItem(KEY, JSON.stringify(carrito)); pintar(); }

  function pintar(){
    const badge = $('#cartCount');
    if(badge) badge.textContent = carrito.reduce((a,p)=>a+p.cantidad,0);

    const ul = $('#cartList');
    const totalEl = $('#cartTotal');
    if(!ul || !totalEl) return;

    ul.innerHTML = '';
    let total = 0;
    carrito.forEach((p,i)=>{
      const line = p.precio * p.cantidad; total += line;
      const li = document.createElement('li');
      li.className = 'list-group-item d-flex align-items-center justify-content-between';
      li.innerHTML = `
        <div class="d-flex align-items-center">
          <img src="${p.img||''}" style="width:56px;height:36px;object-fit:cover" class="rounded me-2">
          <div>
            <div class="fw-semibold">${p.nombre}</div>
            <div class="text-muted small">${moneyStr(p.precio)} × <strong>${p.cantidad}</strong></div>
          </div>
        </div>
        <div class="d-flex align-items-center gap-2">
          <strong>${moneyStr(line)}</strong>
          <button class="btn btn-sm btn-outline-secondary" data-act="menos" data-i="${i}">−</button>
          <button class="btn btn-sm btn-outline-secondary" data-act="mas" data-i="${i}">+</button>
          <button class="btn btn-sm btn-outline-danger" data-act="del" data-i="${i}"><i class="fa-solid fa-trash"></i></button>
        </div>`;
      ul.appendChild(li);
    });
    totalEl.textContent = moneyStr(total);
  }

  // Agregar desde tus cards (clases .btn-add o .add-to-cart)
  document.addEventListener('click', (e)=>{
    // controles del carrito
    const k = e.target.closest('[data-act]');
    if(k){
      const i = +k.dataset.i; const act = k.dataset.act; const it = carrito[i];
      if(!it) return;
      if(act==='mas') it.cantidad += 1;
      if(act==='menos'){ it.cantidad -= 1; if(it.cantidad<=0) carrito.splice(i,1); }
      if(act==='del') carrito.splice(i,1);
      save(); return;
    }

    // botón Agregar
    const add = e.target.closest('.btn-add, .add-to-cart');
    if(add){
      const card = add.closest('.wine-card, .d-flex.h-100') || document;
      const nombre = (card.querySelector('.wine-name, h5')?.textContent||'Producto').trim();
      const priceTxt = (card.querySelector('.wine-price, h4')?.textContent||'S/0').trim();
      const precio = moneyNum(priceTxt);
      // ✅ ahora (siempre absoluta)
const img = card.querySelector('img')?.src || '';
      // si hay input de cantidad cerca, lo usamos
      const qty = Math.max(1, parseInt(card.querySelector('input.qty')?.value||'1',10));

      const exist = carrito.find(p=>p.nombre===nombre && p.precio===precio);
      if(exist) exist.cantidad += qty; else carrito.push({nombre, precio, cantidad: qty, img});
      save();

      // abrir carrito (opcional)
      const off = $('#cartOffcanvas');
      if(off) bootstrap.Offcanvas.getOrCreateInstance(off).show();
    }
  });

  $('#clearCart')?.addEventListener('click', ()=>{ carrito = []; save(); });

  // Exponer para el botón Pagar
  window.getCarritoJSON = ()=>localStorage.getItem(KEY)||'[]';

  pintar();
})();
</script>

<!-- MODAL DETALLES DE PRODUCTO -->
<div id="detailsModal" class="details-modal">
  <div class="details-modal-content">
    
    <!-- Botón cerrar -->
    <span class="details-close" onclick="closeDetailsModal()">&times;</span>

    <!-- Cabecera: imagen + info -->
    <div class="details-header">
      <div class="details-image-wrapper">
        <img id="detailsImage" src="" alt="Producto">
      </div>
      <div class="details-info">
        <h4 id="detailsName"></h4>
        <p id="detailsPrice"></p>
        <span class="details-tag">
          <i class="fa-solid fa-drumstick-bite"></i> Pollo a tu gusto
        </span>
      </div>
    </div>

    <!-- Cuerpo: descripción + ingredientes -->
    <div class="details-body">
      <h6><i class="fa-solid fa-info-circle"></i> Descripción</h6>
      <p id="detailsDescription"></p>

      <h6><i class="fa-solid fa-carrot"></i> Ingredientes</h6>
      <p id="detailsIngredients"></p>
    </div>

  </div>
</div>
<script>
  function openDetailsModal(nombre, descripcion, precio, ingredientes, imagen) {
    document.getElementById('detailsName').textContent = nombre;
    document.getElementById('detailsDescription').innerHTML = descripcion;
    document.getElementById('detailsPrice').textContent = precio;
    document.getElementById('detailsIngredients').innerHTML = ingredientes;

    const img = document.getElementById('detailsImage');
    img.src = imagen;
    img.alt = nombre;

    document.getElementById('detailsModal').style.display = 'flex';
  }

  function closeDetailsModal() {
    document.getElementById('detailsModal').style.display = 'none';
  }

  // Cerrar clickeando fuera del modal
  window.addEventListener('click', function(e) {
    const modal = document.getElementById('detailsModal');
    if (e.target === modal) {
      closeDetailsModal();
    }
  });

  // Cerrar con tecla ESC
  window.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeDetailsModal();
    }
  });
</script>


<script>
// Validar teléfono (solo números + 9 dígitos)
document.getElementById('telefonoInput').addEventListener('input', function () {
  this.value = this.value.replace(/\D/g, '').slice(0, 9);
});

// Validación final antes de enviar
document.querySelector('form[method="POST"]')?.addEventListener('submit', function (e) {
  const telefono = document.getElementById('telefonoInput').value.trim();

  if (telefono.length !== 9) {
    e.preventDefault();
    Swal.fire({
      icon: 'warning',
      title: 'Número incorrecto',
      text: 'El número de teléfono debe tener exactamente 9 dígitos.',
      confirmButtonColor: '#ffc107'
    });
    return;
  }
});

<?php if ($boletaReclamo): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {

  // 🎉 Alerta bonita de éxito
  Swal.fire({
    icon: 'success',
    title: '¡Reclamo registrado!',
    text: 'Tu reclamo ha sido enviado correctamente.',
    confirmButtonColor: '#ffc107'
  });

  // Abrir boleta después del OK
  setTimeout(() => {
    const modalBoleta = new bootstrap.Modal(document.getElementById('boletaReclamoModal'));
    modalBoleta.show();
  }, 500);

});
</script>
<?php endif; ?>
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (!empty($mensajeExito)): ?>
  <!-- Alerta Bootstrap de éxito -->
  <div class="alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow"
       role="alert" style="z-index: 2000; min-width: 320px;">
    <?php echo htmlspecialchars($mensajeExito); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
  </div>
<?php endif; ?>

<!-- ✅ SweetAlert SOLO UNA VEZ -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (!empty($mensajeExito)): ?>
  <div class="alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow"
       role="alert" style="z-index: 2000; min-width: 320px;">
    <?php echo htmlspecialchars($mensajeExito); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
  </div>
<?php endif; ?>

<?php if (!empty($mensajeError)): ?>
  <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow"
       role="alert" style="z-index: 2000; min-width: 320px;">
    <?php echo htmlspecialchars($mensajeError); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
  </div>
<?php endif; ?>

<!-- ✅ Bootstrap bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
// ===============================
//  VALIDACIONES TUYAS (RECLAMO)
// ===============================
document.getElementById('telefonoInput')?.addEventListener('input', function () {
  this.value = this.value.replace(/\D/g, '').slice(0, 9);
});

const formReclamo = document.querySelector('form[method="POST"][action=""]') 
                 || document.querySelector('form[method="POST"]');

if (formReclamo) {
  formReclamo.addEventListener('submit', function (e) {
    const tel = document.getElementById('telefonoInput')?.value.trim() || "";
    if (tel.length !== 9) {
      e.preventDefault();
      Swal.fire({
        icon: 'warning',
        title: 'Número inválido',
        text: 'El teléfono debe tener exactamente 9 dígitos.',
        confirmButtonColor: '#ffc107'
      });
    }
  });
}

<?php if (!empty($mensajeExito)): ?>
document.addEventListener('DOMContentLoaded', function() {
  Swal.fire({
    icon: 'success',
    title: '¡Reclamo enviado!',
    text: 'Tu reclamo fue registrado correctamente.',
    confirmButtonColor: '#ffc107'
  });
});
<?php endif; ?>
</script>


<!-- =========================================
     ======= SCRIPTS CORREGIDOS CARRITO =======
     ========================================= -->
<script>
  // ✅ SOLO UN CARRITO
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  // =========================
  //  AGREGAR DESDE PRODUCTOS
  // =========================
  window.addToCart = function(product) {
    if (!product || !product.name) return;

    product.price = Number(product.price) || 0;

    const existing = cart.find(p => p.name === product.name);
    if (existing) existing.qty += 1;
    else cart.push({ ...product, qty: 1 });

    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartCount();
    renderCart();
  };

  // =========================
  //  CONTADOR BADGE
  // =========================
  function updateCartCount() {
    const el = document.getElementById("cartCount");
    if (!el) return;
    el.textContent = cart.reduce((s,p)=>s+p.qty,0);
  }

  // =========================
  //  PINTAR CARRITO EN OFFCANVAS
  // =========================
  function renderCart() {
    const list = document.getElementById("cartList");
    const totalEl = document.getElementById("cartTotal");
    if (!list || !totalEl) return;

    if (cart.length === 0) {
      list.innerHTML = `
        <li class="list-group-item bg-dark text-light text-center">
          Carrito vacío
        </li>`;
      totalEl.textContent = "S/ 0.00";
      return;
    }

    let total = 0;

    list.innerHTML = cart.map((p, i) => {
      total += p.price * p.qty;

      return `
        <li class="list-group-item bg-dark text-light d-flex align-items-center justify-content-between">
          
          <div class="d-flex align-items-center gap-2">
            <img src="${p.img}" style="width:60px;height:45px;object-fit:cover;border-radius:6px;">
            <div>
              <div class="fw-bold">${p.name}</div>
              <div class="small text-secondary">S/ ${p.price.toFixed(2)}</div>
            </div>
          </div>

          <div class="d-flex align-items-center gap-1">
            <button class="btn btn-sm btn-outline-light" onclick="changeQty(${i}, -1)">−</button>
            <span class="px-2">${p.qty}</span>
            <button class="btn btn-sm btn-outline-light" onclick="changeQty(${i}, 1)">+</button>
          </div>

          <button class="btn btn-sm btn-outline-danger ms-2" onclick="removeItem(${i})">
            <i class="fa-solid fa-trash"></i>
          </button>

        </li>
      `;
    }).join("");

    totalEl.textContent = "S/ " + total.toFixed(2);
  }

  // =========================
  //  + / - / eliminar / vaciar
  // =========================
  window.changeQty = function(i, delta) {
    cart[i].qty += delta;
    if (cart[i].qty <= 0) cart.splice(i, 1);

    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartCount();
    renderCart();
  };

  window.removeItem = function(i) {
    cart.splice(i, 1);
    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartCount();
    renderCart();
  };

  window.clearCart = function() {
    cart = [];
    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartCount();
    renderCart();
  };

  // =========================
  //  JSON PARA PAGO.PHP
  // =========================
  window.getCarritoJSON = function() {
    return JSON.stringify(
      cart.map(p => ({
        nombre: p.name,
        precio: p.price,
        cantidad: p.qty,
        img: p.img
      }))
    );
  };

  // =========================
  //  EVENTOS UI
  // =========================
  document.addEventListener("DOMContentLoaded", () => {
    updateCartCount();
    renderCart();

    document.getElementById("clearCart")
      ?.addEventListener("click", clearCart);

    // ✅ PAGAR: guarda en localStorage "carrito" y entra a pago.php
    document.getElementById("checkout")
      ?.addEventListener("click", () => {

        localStorage.setItem("carrito", getCarritoJSON());

        // 👉 Si pago.php está en otra carpeta, cambia esta ruta:
        window.location.href = "pago.php";
      });

    document.getElementById("cartOffcanvas")
      ?.addEventListener("show.bs.offcanvas", renderCart);
  });
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {

  const btn = document.getElementById("btnAbrirBuscador");
  const box = document.getElementById("boxBuscador");
  const input = document.getElementById("buscadorProductos");
  const resultados = document.getElementById("resultadosBusqueda");

  let productos = [];

  // ====== 1. Detectar TODOS los productos dentro de los tabs ======
  const tabs = ["tab-1","tab-2","tab-3"];

  tabs.forEach(tabId => {
    const tabPane = document.getElementById(tabId);
    if(!tabPane) return;

    const cards = tabPane.querySelectorAll(".col-lg-6"); // detecta todos tus productos

    cards.forEach((card, i) => {

      // buscar nombre (product-name o h5)
      const nameEl = card.querySelector(".product-name") || card.querySelector("h5");
      const imgEl  = card.querySelector("img");
      const priceEl= card.querySelector(".product-price") || card.querySelector("h4");

      if(!nameEl || !imgEl) return;

      // id obligatorio para scroll
      if(!card.id) card.id = `${tabId}-producto-${i+1}`;

      productos.push({
        id: card.id,
        tabId: tabId,
        name: nameEl.textContent.trim(),
        img: imgEl.getAttribute("src"),
        price: priceEl ? priceEl.textContent.trim() : ""
      });
    });
  });

  console.log("Productos cargados:", productos); // 👈 mira en consola cuántos detecta

  // ====== 2. Abrir / cerrar buscador ======
btn.addEventListener("click", (e) => {
  e.preventDefault();      // ✅ evita que el <a> padre navegue
  e.stopPropagation();     // ✅ evita burbujeo al document click

  const abierto = box.style.display === "block";
  box.style.display = abierto ? "none" : "block";

  resultados.style.display = "none";
  input.value = "";

  setTimeout(() => input.focus(), 50); // ✅ focus seguro
});
// ✅ evita que clicks dentro del buscador cierren o activen el link padre
box.addEventListener("click", (e) => e.stopPropagation());
input.addEventListener("click", (e) => e.stopPropagation());
input.addEventListener("mousedown", (e) => e.stopPropagation());


  document.addEventListener("click", (e) => {
    if (!box.contains(e.target) && !btn.contains(e.target)) {
      box.style.display = "none";
      resultados.style.display = "none";
    }
  });

  // ====== 3. Buscar ======
  input.addEventListener("input", () => {
    const q = input.value.toLowerCase().trim();
    resultados.innerHTML = "";

    if(!q){
      resultados.style.display = "none";
      return;
    }

    const filtrados = productos.filter(p => 
      p.name.toLowerCase().includes(q)
    );

    if(!filtrados.length){
      resultados.innerHTML = `<div class="text-secondary small px-2 py-2">No se encontró producto</div>`;
      resultados.style.display = "block";
      return;
    }

    filtrados.forEach(p => {
      const item = document.createElement("button");
      item.type = "button";
      item.className = "list-group-item list-group-item-action search-item";

      item.innerHTML = `
        <img src="${p.img}" alt="${p.name}">
        <div class="meta">
          <strong>${p.name}</strong>
          <small>${p.price}</small>
        </div>
      `;

      item.onclick = () => irAProducto(p);
      resultados.appendChild(item);
    });

    resultados.style.display = "block";
  });

  // ====== 4. Ir al producto ======
  function irAProducto(p){

    box.style.display = "none";
    resultados.style.display = "none";

    const tabBtn = document.querySelector(`a[href="#${p.tabId}"]`);
    if(tabBtn){
      new bootstrap.Tab(tabBtn).show();
    }

    setTimeout(() => {
      const target = document.getElementById(p.id);
      if(target){
        target.scrollIntoView({behavior:"smooth", block:"center"});
        target.classList.add("product-highlight");
        setTimeout(() => target.classList.remove("product-highlight"), 2500);
      }
    }, 300);
  }

});
</script>


</body>

</html>