$(document).ready(function(){

    $('#btnIniciarSesion').click(function(){
        
        if($('#iUsuario').val()==""){
            alert("Ingrese un usuario");
        }else{
            if ($('#iContrasenia').val()=="") {
                alert("Ingrese una clave");
            }else{
                let formData = new FormData();
                formData.append('validador', true);
                formData.append('iUsuario', $('#iUsuario').val());
                formData.append('iContrasenia', $('#iContrasenia').val());

                $.ajax({
                    url: "../../bd/cliente/iniciarSesionCliente.php",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (respuesta) {
                        if (respuesta == true) {
                            alert("Exito");
                            $(location).attr('href','../../pages/cliente/inicio.php')
                        } else {
                            alert("Usuario no registrado");
                        }


                    }
                });
            }

        }

    });
});