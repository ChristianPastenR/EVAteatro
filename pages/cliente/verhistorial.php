<?php include('nav.php'); ?>
<div style="width: 50%;margin: auto;">
<div>
    <h5 style="text-align: center;font-size: 50px;">Mi historial</h5>
</div>
    <?php
    require_once('../../bd/conexion.php');
    require_once('../../bd/cliente/getHistorial.php');
    ?>
    <link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
    <link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>

 


    <table id="table" data-pagination="true" data-toggle="table" data-search="true" data-search-text="">
        <thead>
            <tr>
                <th scope="col" data-sortable="true">N° boleto</th>

                <th scope="col" data-sortable="true">Valor</th>

                <th scope="col" data-sortable="true">Asiento</th>
                <th scope="col" data-sortable="true">Estado</th>
                
                <th scope="col" data-sortable="true">Función</th>
                
            </tr>
        </thead>
        <script src="../../dist/js/cliente/popUpBoleto.js"></script>
        <tbody style="text-align: center;">
            

            <?php
            foreach ($resultados as $fila) {
                echo "<tr><td>" . $fila['idboleto'] . "</td>";
                echo "<td>$ " . $fila['valorentrada'] . "</td>";
                echo "<td>" . $fila['asiento'] . "</td>";
                echo "<td>"  . $fila['estado'] . "</td>";
                
                echo "<td><a  class='pop'target='popup' href='detalleBoleto.php?idboleto=".$fila['idboleto']."&funcionFK=" .$fila['funcionFK']."' title='Función, Artista, fecha, etc.'  >Ver detalles</a></td></tr>";
               
                               
            }
            ?>
            
        </tbody>
       
    </table>
    <script>
        $(function() {
            $('#table').bootstrapTable()
        })
    </script>



  