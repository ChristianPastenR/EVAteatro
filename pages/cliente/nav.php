<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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
    <!--  SCRIPT BTN CERRAR SESION -->
    <script src="../../dist/js/cliente/cerrarSesion.js"></script>
    <?php
    session_start();
    ?>
    <?php
    if (!isset($_SESSION['usuario'])) {
        header('location: ../index.php');
    }
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.php">Mi teatro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="mostrarFunciones.php">Funciones</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="mostrarArtistas.php">Artistas</a>
                    </li>

                    <li style="position: absolute; right: 1%;" id="drop" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['usuario'][0]['nombre']; ?>
                            <?php echo $_SESSION['usuario'][0]['apellido']; ?>
                            

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li><a class="dropdown-item" href="miCuenta.php">Mi cuenta</a></li>
                            <li><a class="dropdown-item" href="verhistorial.php">Historial</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" data-toggle="modal" data-target="#myModal">Salir</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>



    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Esta apunto de cerrar sesión</h4>
                </div>
                <div class="modal-body">
                    <p>Cualquier cambio no confirmado sera descartado.</p>
                </div>
                <div class="modal-footer">
                    <button id="" type="button" class="btn btn-default" data-dismiss="modal">Descartar</button>
                    <button id="btnCerrarSesion" type="button" class="btn btn-default" data-dismiss="modal">Confirmar</button>

                </div>
            </div>

        </div>
    </div>


</body>

</html>