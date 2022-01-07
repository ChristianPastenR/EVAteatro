<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle boleto</title>
    <!--  JQUERY -->
    <script src="../../dist/js/jquery-3.6.0.js"></script>
    <!--  BOOSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">
<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
<link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">
<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>

</head>

<body>

    <?php

    $id = $_GET['idboleto'];
    $funcion = $_GET['funcionFK'];
    ?>
    <?php
    require_once('../../bd/conexion.php');
    require_once('../../bd/cliente/getFuncion.php');
    
    ?>
    <h3 style="text-align: center;">Detalle función</h3>

    <table id="table" data-toggle="table" data-search="" data-search-text="" data-pagination="">
        <thead>
            <tr>
                <th scope="col" data-sortable="true">id</th>
                <th scope="col" data-sortable="true">nombre</th>
                <th scope="col" data-sortable="true">Descripción</th>
               
                <th scope="col" data-sortable="true">fecha</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($resultados as $fila) {
                $artistaFK = $fila['artistaFK'];
                $artistas = getArtista($artistaFK,$conn);
                

                echo "<tr><td>" . $fila['idfuncion'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['descripcion'] . "</td>";
                
                echo "<td>" . $fila['fecha'] . "</td></tr>";

            }
            ?>
        </tbody>
    </table>

    <h3 style="text-align: center;">Detalle artista</h3>

    <table id="table" data-toggle="table" data-search="" data-search-text="" data-pagination="">
        <thead>
            <tr>
                <th scope="col" data-sortable="true">id</th>
                <th scope="col" data-sortable="true">nombre</th>
                <th scope="col" data-sortable="true">Nacionalidad</th>
                <th scope="col" data-sortable="true">Tipo</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($artistas as $artista) {
                
                
                echo "<tr><td>" . $artista['idartista'] . "</td>";
                echo "<td>" . $artista['nombre'] . "</td>";
                echo "<td>" . $artista['nacionalidad'] . "</td>";
                
                echo "<td>" . $artista['tipo'] . "</td></tr>";

            }
            ?>
        </tbody>
    </table>



    <?php
    
   
    ?>









</body>

</html>