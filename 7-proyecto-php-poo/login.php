<?php
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title> LOGIN </title>
		<meta charset="UTF-8" />
                <link rel="stylesheet" href="assets/css/login.css"/> 
	</head>
	<body>
		<div class="center">
			<h1>Acceder</h1>
                        <form method="POST" action="<?=base_url?>usuario/login">
				<div class="txt_field">
					<input type="text" name="nombre" required/>
					<span></span>
					<label>Nombre</label>
				</div>
				<div class="txt_field">
					<input type="password" name="contra"required/>
					<span></span>
					<label>Contraseña</label>
				</div>
				<input type="submit" value="Acceder">
				<div class="signup_link"> 
					No tengo cuenta <a href="#">Registrar</a>
				</div>	
			</form>
		</div>    
    </body>
</html>