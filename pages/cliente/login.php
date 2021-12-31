<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesion</title>
  <!--  JQUERY -->
  <script src="../../dist/js/jquery-3.6.0.js"></script>
  <!--  BOOSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../css/login.css">
  
  <script src="../../dist/js/cliente/iniciarSesionCliente.js"></script>
</head>

<body>
  <div id="btnSalirLogin">
    <a href="../inicio.php">
      <span>Volver</span>
      <i id="iconoSalir" class="bi bi-box-arrow-left"></i>
    </a>

  </div>

  <div id="formLogin">
    <form>
      <h5 class="card-title">Inicio de sesion</h5><br>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese usuario</label>
        <input placeholder="" type="email" class="form-control" id="iUsuario" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="iContrasenia">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Recordar</label>
      </div>
      <button id="btnIniciarSesion" type="button" class="btn btn-primary">Ingresar</button>
    </form>
  </div>

</body>

</html>