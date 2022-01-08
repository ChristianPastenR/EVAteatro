$(document).ready(function () {

    $('#btnBuscarCliente').click(function () {
        let formData = new FormData();
        formData.append('validador', true);
        formData.append('iRut', $('#iRut').val());

        //depuracion
       


        $.ajax({
            url: "../../bd/admin/buscarCliente.php",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (respuesta) {
                try {
                    respuesta = JSON.parse(respuesta)[0];
                    console.log(respuesta);
                    $('#iRut2').val(respuesta['rut']);
                    $('#iNombre').val(respuesta['nombre']);
                    $('#iApellido').val(respuesta['apellido']);
                    $('#iEdad').val(respuesta['edad']);
                    $('#iPassword').val(respuesta['clave']);
                    //$('#iIdCliente').val(respuesta['idCliente']);
                 
                } catch (error) {
                    alert("usuario no encontrado");
                }
                
            }
        });





    });
});