$(document).ready(function(){

    $('#btnActualizarEntrada').click(function(){
        let formData = new FormData();
        formData.append('validador',true);
        formData.append('id',$('#iFuncion').val());
        formData.append('ivalor',$('#iValor').val());


        
        $.ajax({
            url: "../../bd/admin/actualizarEntrada.php",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(respuesta){
                alert(respuesta);

                $('#iFuncion').val("")
                $('#iValor').val("")
                location.reload();
            }
        });
    });
});