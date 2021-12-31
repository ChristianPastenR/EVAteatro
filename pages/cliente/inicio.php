<?php include('nav.php'); ?>
<?php
session_start();
?>
<script src="../../dist/js/cliente/cerrarSesion.js"></script>
<div>
    <h5 style="margin: 10% 40%;font-size: 100px;">Inicio de cliente</h5>
    <?php
    print_r($_SESSION);
    ?>
</div>