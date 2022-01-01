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

<div style="width: 30%;margin: auto;">
    


  <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="">Perfil</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled">Contraseña</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
  <form style="">
      <h5 class="card-title">Mis datos</h5><br>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input placeholder="" type="email" class="form-control" id="iUsuario" aria-describedby="emailHelp" value='<?php echo $_SESSION['usuario'][0]['nombre']; ?>'>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellido</label>
        <input placeholder="" type="email" class="form-control" id="iUsuario" aria-describedby="emailHelp" value='<?php echo $_SESSION['usuario'][0]['apellido']; ?>'>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Edad</label>
        <input placeholder="" type="email" class="form-control" id="iUsuario" aria-describedby="emailHelp" value='<?php echo $_SESSION['usuario'][0]['edad']; ?>'>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Para confirmar cambios ingrese su clave</label>
        <input type="password" class="form-control" id="iContrasenia" >
      </div><br>
      <button id="" type="button" class="btn btn-primary">Descartar</button>
      <button id="" type="button" class="btn btn-success">Confirmar</button>
    </form>
  </div>
</div>









</div>