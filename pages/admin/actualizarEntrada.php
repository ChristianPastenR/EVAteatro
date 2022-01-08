<?php
require_once('../../bd/conexion.php');
require_once('../../bd/cliente/getFunciones.php');
?>
<script src="../../dist/js/admin/actualizarEntrada.js"></script>
<div style="width: 70%;margin: auto;">
    <h3 style="margin:auto">Actualizar valor entrada</h3><br>

    <form>
        <div class="mb-3" style="float: none;text-align: left;float: none;">

            <select id="select" class="form-select" aria-label="Default select example" style="width:300px;font-size: 12px;">

                <?php
                // CARGAR LOS DATOS EN UN SELECT

                foreach ($resultados as $fila) {


                    echo "<option value='" . $fila['idfuncion'] . "'>" . $fila['nombre'] . '                $' . $fila['valorentrada'] . "</option>";
                }
                ?>
            </select>
            <br>
            <input disabled="true" placeholder="Id función" type="text" class="form-control" id="iFuncion" aria-describedby="emailHelp" style="width:300px;"><br>
            <input placeholder="Ingrese nuevo valor" type="text" class="form-control" id="iValor" aria-describedby="emailHelp" style="width:300px;"><br>

            <script>
                $("#select").on("change", function() {

                    $('#iFuncion').val($("#select option:selected").val());
                });
            </script>
        </div>
        <div class="mb-3">

            <button type="button" class="btn btn-primary" id="btnActualizarEntrada" style="width: 300px;">Actualizar</button>

        </div>

    </form>


</div>
<br><br>