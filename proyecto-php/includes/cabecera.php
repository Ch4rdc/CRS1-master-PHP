<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title> BLOG de vidiojuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" > 
    </head>
    <body>
        <!-- CABEZERA-->
        
        <header id="cabecera">
            <!--logo-->
            <div id="logo">
                <a href="index.php">
                    Blog de videojuegos
                </a>
            </div>
             <!-- MENU-->
             
             <nav id="menu">
                 <ul>
                     <li>
                         <a href="index.php">INICIO</a>
                     </li>
                     <?php 
                        $categorias = conseguirCategorias($db);
                        if(!empty($categorias) ):
                            while($categoria = mysqli_fetch_assoc($categorias)): 
                     ?>
                      <li>
                         <a href="categoria.php?id=<?=$categoria['id']?>"> <?= $categoria['nombre']?></a>
                      </li>
                     <?php 
                        
                             endwhile; 
                        endif;
                     ?>
                       <li>
                         <a href="#">SOBRE MI</a>
                      </li>
                       <li>
                         <a href="#">CONTACTO</a>
                     </li>
                 </ul>
             </nav>
             
             <div class="clearfix"> </div>
        </header> 
        
        <div id="contenedor">