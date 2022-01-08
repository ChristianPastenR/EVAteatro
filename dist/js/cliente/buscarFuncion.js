$(document).ready(function(){

    $('#buscarCliente').click(function(){

        
        $("#load").load("../../pages/admin/buscarCliente.php");
        
    });
    $('#venderBoleto').click(function(){

        
        $("#load").load("../../pages/admin/venderBoleto.php");
        
    });
    $('#crearArtista').click(function(){

        
        $("#load").load("../../pages/admin/crearArtista.php");
        
    });
    $('#crearFuncion').click(function(){

        
        $("#load").load("../../pages/admin/crearFuncion.php");
        
    });
    $('#actualizarEntrada').click(function(){

        
        $("#load").load("../../pages/admin/actualizarEntrada.php");
        
    });
    $('#consultarAsiento').click(function(){

        
        $("#load").load("../../pages/admin/consultarAsiento.php");
        
    });

});