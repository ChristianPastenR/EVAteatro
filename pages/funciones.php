<?php include('nav.php'); ?>
<script src="../dist/js/jquery-3.6.0.js"></script>

<div>
    <h5 style="text-align: center;font-size: 50px;">Funciones</h5>
</div>


<?php
require_once('../bd/conexion.php');
require_once('../bd/cliente/getFunciones.php');
?>


<div style="width: 50%; text-align: left;margin: auto;">


    <br>
    <link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
    <link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>

    <table id="table" data-pagination="true" data-toggle="table" data-search="" data-search-text="">
        <thead>
            <tr>
                <th scope="col" data-sortable="true">Nombre</th>

                <th scope="col" data-sortable="true">Fecha</th>


                <th scope="col" data-sortable="true">Artista</th>
                <th scope="col">Disponibilidad</th>
            </tr>
        </thead>
        <tbody style="text-align: center;">
            <?php
            foreach ($resultados as $fila) {
                echo "<tr><td>" . $fila['nombre'] . "</td>";

                echo "<td>" . $fila['fecha'] . "</td>";


                echo "<td>" . $fila['artistaFK'] . "</td>";
                echo "<td><a class='iconoCandado' href=''><i class='bi bi-lock-fill'></i></a></td></tr>";
            }
            ?>
        </tbody>
    </table>

    <script>
        $(function() {
            $('#table').bootstrapTable()
        })
    </script>


<script src="../dist/js/funciones/iconoDisponibilidad.js"></script>




</div>