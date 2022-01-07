<?php include('nav.php'); ?>
<script src="../../dist/js/jquery-3.6.0.js"></script>
<script src="../../dist/js/funciones/detalleFuncion.js"></script>

<div>
    <h5 style="text-align: center;font-size: 50px;">Funciones</h5>
</div>


<?php
require_once('../../bd/conexion.php');
require_once('../../bd/cliente/getFunciones.php');
?>


<div style="width: 50%; text-align: left;margin: auto;">


    <br>
    <link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
    <link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>


    <table id="table" data-pagination="true" data-toggle="table" data-search="true" data-search-text="">
        <thead>
            <tr>
                <th scope="col" data-sortable="true">Nombre</th>

                <th scope="col" data-sortable="true">Fecha</th>

                <th scope="col" data-sortable="true">Descripción</th>
                <th scope="col" data-sortable="true">Valor entrada</th>

                
                <th scope="col">Disponibilidad</th>
            </tr>
        </thead>
        <tbody style="text-align: center;">
            <script src="../../dist/js/funciones/detalleFuncion.js"></script>

            <?php
            foreach ($resultados as $fila) {
                echo "<tr><td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['fecha'] . "</td>";
                echo "<td>" . $fila['descripcion'] . "</td>";
                echo "<td> $ "  . $fila['valorentrada'] . "</td>";
                
               

                echo "<td><a id='mDetalle' onclick='clic(123)' class='dropdown-item' data-toggle='modal' data-target='#modalDetalle'>Ver detalles</a></td></tr>";
            }
            ?>
        </tbody>
    </table>
    
    
    <script>
        $(function() {
            $('#table').bootstrapTable()
        })
    </script>

<!-- Modal -->
<div id="modalDetalle" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Detalle funcion</h4>
                </div>
                <div class="modal-body">
                    <p>Aqui se presentara todos los detalles de la funcion.</p>
                </div>
                <div class="modal-footer">
                    <button  type="button" class="btn btn-default" data-dismiss="modal">Descartar</button>
                    <button  type="button" class="btn btn-default" data-dismiss="modal">Confirmar</button>

                </div>
            </div>

        </div>
    </div>




</div>