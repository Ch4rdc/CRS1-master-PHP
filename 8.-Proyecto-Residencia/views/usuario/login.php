<?php require_once '../../config/parameters.php'; ?>
<?php require_once '../../helpers/utils.php'; ?>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">
	<head>
               <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<title> LOGIN </title>
		<meta charset="UTF-8" />
                <link rel="stylesheet" href="../../assets/css/login.css"/>             
	</head>
	<body>
            <?php if(isset($_SESSION['login']['failed'])) : ?>
            <script>
                    swal('Login','Usuario o contraseña incorrecta','error');
            </script>
            <?php endif; ?>
		<div class="center">
			<h1>Acceder</h1>
                        <form method="POST" action="<?=base_url?>usuario/login">
				<div class="txt_field">
					<input type="email" name="email" required/>
					<span></span>
					<label>Correo</label>
				</div>
				<div class="txt_field">
					<input type="password" name="password"required/>
					<span></span>
					<label>Contraseña</label>
				</div>
				<input type="submit" value="Acceder">
				<div class="signup_link"> 
					No tengo cuenta <a href="<?=base_url?>views/usuario/registro.php">Registrar</a>                                       
				</div>	
			</form>
                        <?php utils::deleteAlert() ?>
		</div>    
        </body>
</html>