<script src="../../dist/js/cliente/buscarCliente.js"></script>

<div style="width: 70%;margin: auto;">
    <h3 style="margin:auto">Buscar cliente</h3><br>

    <form>
        <div class="mb-3" style="float: left;">

            <input placeholder="Ingrese rut cliente" type="text" class="form-control" id="iRut" aria-describedby="emailHelp" style="width:300px;margin:auto"><br>

        </div>
        <button style="margin-left:5%;" type="button" class="btn btn-primary" id="btnBuscarCliente">Buscar</button>

    </form>

</div>
<br><br>

<div style="width: 70%;margin: auto;">
    <h3>Resultados de busqueda</h3>
    <label for="exampleInputEmail1" class="form-label">RUT</label>
    <input id="iRut2" value="" disabled="true" type="text" class="form-control" aria-describedby="" style="width:300px;"><br>
    <div>
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <label for="exampleInputEmail1" class="form-label" style="margin-left: 295px;">Apellido</label>
    </div>


    <div>
        <input id="iNombre"  disabled="true" type="text" class="form-control" aria-describedby="" style="width:300px;float: left;margin-right: 50px;">

        <input id="iApellido" disabled="true" type="text" class="form-control" aria-describedby="" style="width:300px;float: none;">

    </div><br>
    <div>
        <label for="exampleInputEmail1" class="form-label">Edad</label>
        <label for="exampleInputEmail1" class="form-label" style="margin-left: 310px;">Clave</label>
    </div>
    <div>

        <input id="iEdad"  disabled="true" type="text" class="form-control" aria-describedby="" style="width:300px;float: left;margin-right: 50px;">

        <input id="iPassword" disabled="true" type="password" class="form-control" aria-describedby="" style="width:300px;float: none;">

    </div>


</div>