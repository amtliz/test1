<html>
<header>
</header>
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
<form name="formulario" id="formulario" action="" method="post">
<input name="usuario" id="usuario" type="text"/>
<input name="password" id="password" type="password"/>
<input name="enviar" id="enviar" type="submit" value="Enviar"/>
</form>
<footer>
</footer>
</body>
</html>