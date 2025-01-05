<?php require_once '../../config/parameters.php'; ?>
<?php require_once '../../helpers/utils.php'; ?>
<?php session_start()?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title> Registro Usuario </title> 
        <meta charset="UTF-8" />  
        <link rel="stylesheet" href="../../assets/css/registro.css"/> 
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
      <?php if(isset($_SESSION['register']['complete'])): ?>
         <script>
           swal('Registro','Usuario agregado','success');  
         </script>      
      <?php elseif(isset($_SESSION['register']['failed'])) : ?>
         <script>
           swal('Registro','Usuario no agregado','error');  
         </script>              
      <?php endif; ?>
        <div class="center">
            <h1>REGISTRO</h1>               
            <form method="POST" action="<?=base_url?>usuario/saves">
                <?php echo isset($_SESSION['errores']) ? utils::mostrarError($_SESSION['errores'], 'nombre'):''; ?>
                <div class="txt_field">
                    <input type="text" name="nombre"  />
                    <span></span>
                    <label>Nombre</label>
                </div> 
                <?php echo isset($_SESSION['errores']) ? utils::mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
                <div class="txt_field">
                    <input type="text" name="apellidos"   />
                    <span></span>
                    <label>Apellidos</label>
                </div> 
                <?php echo isset($_SESSION['errores']) ? utils::mostrarError($_SESSION['errores'], 'email') : ''; ?>
                <div class="txt_field">
                    <input type="email" name="email" />
                    <span></span>
                    <label>Correo</label>
                </div>
                <?php echo isset($_SESSION['errores']) ? utils::mostrarError($_SESSION['errores'], 'password') : ''; ?>
                <div class="txt_field">
                    <input type="password" name=password >
                    <span></span>
                    <label>Contraseña</label>
                </div>
              <!--  <div class="txt_field">
                    <input type="password" name=password required>
                    <span></span>
                    <label>Confirma Contraseña</label>
                </div>-->
              <input type="submit" value="Registrar">
            </form>
            <?php utils::deleteAlert() ?>
            <br>           
        </div>    
    </body>
</html>