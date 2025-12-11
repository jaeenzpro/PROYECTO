<?php if (isset($_GET["boleta"])): ?>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const modalBoleta = new bootstrap.Modal(document.getElementById("boletaReclamoModal"));
    modalBoleta.show();
});
</script>
<?php endif; ?>

