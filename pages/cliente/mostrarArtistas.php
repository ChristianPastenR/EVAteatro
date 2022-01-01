<?php
session_start();
?>
<?php
if (!isset($_SESSION['usuario'])) {
    header('location: ../inicio.php');
}
?>

<?php include('../cliente/nav.php'); ?>
<script src="../../dist/js/cliente/cerrarSesion.js"></script>
<div>
    <h5 style="text-align: center;font-size: 50px;">Artistas</h5>
</div>

<?php
require_once('../../bd/conexion.php');
require_once('../../bd/artista/getArtistas.php');
?>

<div style="width: 50%; text-align: center;margin: auto;">


<br>




<link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">
<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
<link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">
<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>


<script type="text/javascript" >

function changePlaceholder() {

 $(".form-control.search-input").attr("placeholder", "Type a Location").val("").focus().blur();


}

</script>







<table id="table" 
data-toggle="table"
  data-search="true"
  data-search-text=""
  >
    <thead>
        <tr>
            <th scope="col" data-sortable="true">Nombre</th>
            <th scope="col" data-sortable="true" >Nacionalidad</th>
            <th scope="col"data-sortable="true" >Tipo</th>
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

<script>
  $(function() {
    $('#table').bootstrapTable()
  })
</script>







</div>