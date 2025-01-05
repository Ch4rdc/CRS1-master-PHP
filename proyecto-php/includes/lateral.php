 
<!-- SIDE BAR-->
                <aside id="asidebar">
                    
                    <div id="buscador" class="bloq">
                        <h3>BUSCAR</h3>
                        
                        <form action="buscar.php" method="POST">
                     
                            <input type="text" name="busqueda"/>
                            
                            <input type="submit" value="Enviar"/>
                        </form>
                    </div>
                    
                    <?php if(isset($_SESSION['usuario'])) : ?>
                    <div id="loggin" class="bloq">
                        <h3><?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']?></h3>
                        <!-- botones -->
                             <a href="crear-entradas.php" class="botones">Crear entradas</a>
                             <a href="crear-categoria.php" class="botones boton-verde">Crear categorias</a>
                             <a href="mis-datos.php" class="botones boton-naranja">Mis datos</a>
                             <a href="cerrarsesion.php" class="botones boton-rojo">Cerrar Sesión</a>
                    </div>
                    <?php endif; ?>
                    
                    <?php if(!isset($_SESSION['usuario'])) : ?>
                    <div id="loggin" class="bloq">
                        <h3>IDENTIFICATE</h3>
                        
                        <?php if(isset($_SESSION['error_login'])) : ?>
                         <div class="alerta alerta-error">
                        <?= ($_SESSION['error_login']); ?> 
                        </div>
                        <?php endif; ?>
                        
                        <form action="login.php" method="POST">
                            <label for="email">Email</label>
                            <input type="email" name="email"/>
                            
                            <label for="password">Contraseña</label>
                            <input type="password" name="password"/>
                            
                            <input type="submit" value="Enviar"/>
                        </form>
                    </div>
                    
                    <div id="register" class="bloq">
                       
                        <h3>RESGISTRATE</h3>
                        <?php if(isset($_SESSION['completado'])): ?>
                        <div class="alerta alerta-exito">
                           <?= $_SESSION['completado'] ?>
                        </div>
                         <?Php elseif(isset($_SESSION['errores']['general'])): ?>
                             <div class="alerta alerta-exito">
                         <?= $_SESSION['errores']['general'] ?>
                        </div>
                        <?php endif; ?>
                        <form action="registro.php" method="POST">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre"/> 
                          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre'):''; ?>
                            <label for="apellidos">Apellido</label>
                            <input type="text" name="apellidos"/>
                            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>  
                            <label for="email">Email</label>
                            <input type="email" name="email"/>
                            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email'):''; ?> 
                            <label for="password">Contraseña</label>
                            <input type="password" name="password"/>
                             <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password'):''; ?>
                            <input type="submit" name="submit" value="Registrar"/>
                        </form>
                        
                        <?php borrarErrores(); ?>
                       
                    </div>
                    <?php endif; ?>
                </aside>

