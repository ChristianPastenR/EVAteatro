$(document).ready(function(){

    $('#btnCerrarSesion').click(function(){
        alert("click");
        $(location).attr('href','../../bd/cliente/cerrarSesion.php')


    });
});       