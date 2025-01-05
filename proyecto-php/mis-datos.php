

<?php include_once 'includes/redireccion.php'; ?>
<?php include_once 'includes/cabecera.php'; ?>
<?php include_once 'includes/lateral.php'; ?>

<div id="principal"> 
    <h1> Mis datos </h1>
    
     <?php if(isset($_SESSION['completado'])): ?>
                        <div class="alerta alerta-exito">
                           <?= $_SESSION['completado'] ?>
                        </div>
                         <?Php elseif(isset($_SESSION['errores']['general'])): ?>
                             <div class="alerta alerta-exito">
                         <?= $_SESSION['errores']['general'] ?>
                        </div>
                        <?php endif; ?>
                        <form action="actualizar-datos.php" method="POST">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre'];?>"/> 
                          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre'):''; ?>
                            <label for="apellidos">Apellido</label>
                            <input type="text" name="apellidos" value="<?=$_SESSION['usuario']['apellidos']?>"/>
                            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>  
                            <label for="email">Email</label>
                            <input type="email" name="email" value="<?=$_SESSION['usuario']['email'] ?>"/>
                            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email'):''; ?> 
                            <label for="password">Contraseña</label>
                            
                            <input type="submit" name="submit" value="Actualizar"/>
                        </form>
                        
                        <?php borrarErrores(); ?>
</div>

<?php include_once 'includes/redireccion.php'; ?>


