<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
        
               <?php require_once 'includes/lateral.php'; ?>
                <!-- CAJA PRINCIPAL-->            
                <div id="principal">
                                                 <h1> Ultimas entradas </h1>
                <?php
                     $entradas = conseguirEntradas($db , true);    
                       
                     if(!empty($entradas)):
                         
                         while($entrada = mysqli_fetch_assoc($entradas)):
                 ?>
                         <article class="entrada">
                        <a href="entrada.php?id=<?=$entrada['id']?>">      
                        <h2><?= $entrada['titulo']?></h2> 
                        <span class="fecha"><?= $entrada['categoria'].' | '.$entrada['fecha']?></span>
                        
                            <p>
                           <?= substr($entrada['descripcion'], 0,200)?> <!--cantidad de letras-->
                            </p>
                        </a>
                    </article>                 
                                            
                     <?php
                         endwhile;
                     endif;
                    ?>
                    <div id="ver-todas">
                        <a href="entradas.php">ver todas las entradas </a> 
                    </div>
                </div><!--fin principal-->
               
              <?php require_once 'includes/pie.php';?>

                                            