<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro</title>
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
    
    <script>
    function verificar (){
      if( document.getElementById('password').value !== document.getElementById('password2').value){
        alert("Contraseñas no coinciden");
        document.getElementById("registro").disabled =true;
    }  else {
        document.getElementById("registro").disabled =false;
    }
    }
    </script>
    
  </head>
<?php
require "resources/Class.Mysql.php";
require "resources/registroController.php";

if (isset($_REQUEST['registro'])){
$registro=new registroController();
$registro->setUser($_REQUEST['usuario'], $_REQUEST['password']);
echo "Registro adecuado";
}
?>

<div class="container">
<form class="form-signin" name="formulario" id="formulario" action="" method="post">
<h2 class="form-signin-heading">Regístrate</h2>
<label for="inputUsuario" class="sr-only">Usuario</label>
<input id="usuario" name="usuario" type="text" class="form-control" placeholder="usuario" required autofocus>
<label for="inputPassword" class="sr-only">Contraseña</label>
<input id="password" name="password" type="password" class="form-control" placeholder="Contraseña" required>
<label for="inputPassword" class="sr-only">Repita su contraseña</label>
<input id="password2" name="password2" type="password" class="form-control" placeholder="Repita su contraseña" required onchange="verificar()">
<div id="" >
<button class="btn btn-lg btn-primary btn-block" name="registro" id="registro" type="submit">Registrarse</button>
</div>
</form>
    
</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/assets/js/ie10-viewport-bug-workaround.js"></script>
</html>