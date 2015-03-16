<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio de sesión</title>

    <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
<?php
require 'resources/Class.Mysql.php';
require 'resources/loginController.php';

if(isset($_REQUEST['enviar'])):
    $login=new loginController();
    $comparar = $login->comparar($_REQUEST['usuario']);
    if($comparar == false):
        echo "<br><p><b>Este usuario no existe ...</b><a href='formRegistro.php'>Registrate</a></p>";
    else:
    $correcto = $login->correcto($_REQUEST['usuario'], $_REQUEST['password']);
    header('location:dashboard.php');
    endif;
endif;

?>

    <div class="container">

      <form class="form-signin" name="formulario" id="formulario" action="" method="post">
        <h2 class="form-signin-heading">Accede a tu cuenta</h2>
        <label for="inputUsuario" class="sr-only">Usuario</label>
        <input type="text"  name="usuario" id="usuario" class="form-control" placeholder="usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="enviar" id="enviar" type="submit" value="Entrar">Acceder</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>