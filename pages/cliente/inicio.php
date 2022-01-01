<?php
session_start();
?>
<?php
if (!isset($_SESSION['usuario'])) {
    header('location: ../inicio.php');
}else{


    
}
?>


<link rel="stylesheet" href="../../css/login.css">
<?php include('nav.php'); 
?>
<link rel="stylesheet" href="../../css/login.css">

<script src="../../dist/js/cliente/cerrarSesion.js"></script>

<div>
    <h5 style="margin: 10% 40%;font-size: 100px;">Inicio de cliente</h5>
    
</div>

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>