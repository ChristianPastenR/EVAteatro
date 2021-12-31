<?php
session_start();
?>
<?php
if (!isset($_SESSION['usuario'])) {
    header('location: ../inicio.php');
}else{

    
    
}
?>




<?php include('../cliente/nav.php'); ?>
<div>
    <h5 style="text-align: center;font-size: 50px;">Artistas</h5>
</div>

<?php
require_once('../../bd/conexion.php');
require_once('../../bd/artista/getArtistas.php');
?>

<div style="width: 50%; text-align: center;margin: auto;">

<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
    <button class="btn btn-outline-success" type="button">Buscar</button>
</form>
<br>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Nacionalidad</th>
            <th scope="col">Tipo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($resultados as $fila) {

            echo "<tr><td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['nacionalidad'] . "</td>";
            echo "<td>" . $fila['tipo'] . "</td></tr>";
        }
        ?>
    </tbody>
</table>
</div>