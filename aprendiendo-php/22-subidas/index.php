<!DOCTYPE>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Subir archivos PHP</title>
    </head>
    <body>
        <h2>Subir imagenes PHP</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo"/>
            <input type="submit" value="enviar">
            <h2>Listado de imagenes</h2>
            <?php
            $gestor  = opendir('./images');
            if($gestor):
                while(($image = readdir($gestor)) !== false):
                    if($image != '.' && $image != '..'):
                        echo "<img src = 'images/$image' width='200px'/> <br/>";
                    endif;
                endwhile;              
            endif;
            ?>
        </form>
    </body>
        
</html>
