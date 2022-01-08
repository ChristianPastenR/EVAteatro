$(document).ready(function(){

    $('#btnRegistrarArtista').click(function(){
        let formData = new FormData();
        formData.append('validador',true);
        formData.append('iNombre',$('#iNombre').val());
        formData.append('iNacionalidad',$('#iNacionalidad').val());
        formData.append('iTipo',$('#iTipo').val());
        $.ajax({
            url: "../../bd/admin/crearArtista.php",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(respuesta){
                alert(respuesta);
                $('#iNombre').val("");
                $('#iNacionalidad').val("");
                $('#iTipo').val("");
            }
        });
    });
});