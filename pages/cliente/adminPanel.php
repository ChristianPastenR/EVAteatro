<link rel="stylesheet" href="../../css/login.css">
<?php include('nav.php');
?>
<link rel="stylesheet" href="../../css/login.css">

<script src="../../dist/js/cliente/cerrarSesion.js"></script>


<?php

$admin = $_SESSION['usuario'][0]['admin'];
if ($admin == 0) {
    echo '<script type="text/javascript">
       window.location = "inicio.php"
  </script>';
}
?>
  <script src="../../dist/js/cliente/buscarFuncion.js"></script>


  <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;height:90%;margin-top:0%;padding-top: 0%;float:left">
    <a  class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href=""/></svg>
      <h3>Admin panel</h3>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
    <li>
        <a id="venderBoleto" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href=""/></svg>
          Vender boleto
        </a>
      </li>
      
      <li>
        <a id="buscarCliente"  class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use /></svg>
          Buscar cliente
        </a>
      </li>
      
      <li>
        <a id="crearArtista" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href=""/></svg>
          Crear artista
        </a>
      </li>
      <li>
        <a id="crearFuncion" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href=""/></svg>
          Crear función
        </a>
      </li>
      <li>
        <a id="actualizarEntrada" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href=""/></svg>
          Actualizar valor entrada
        </a>
      </li>
      <li>
        <a id="consultarAsiento" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href=""/></svg>
          Consultar disponibilidad asiento
        </a>
      </li>
    </ul>
    

    </div >
  <div style="float:left;width:80%;height:80%" id="load">
    
  </div>
  <script src="../../dist/js/cliente/buscarCliente.js"></script>
 