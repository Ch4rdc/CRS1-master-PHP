
<!DOCTYPE HTML>
<HTML lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tienda de camiseta</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/styles.css"/> 
    </head>
    <body>
        <DIV id="container">
            <!--cabezera-->
            <header id="header">
                <div id="logo">
                    <img src="<?=base_url?>assets/img/chamarra0.PNG" alt="camiseta Logo" />
                    <a href="index.php">
                        Tienda de camisetas
                    </a>
                </div>
            </header>
            <!--menu-->
            <?php $categorias = Utils::showcategorias();?>
            <nav id="menu">
                <ul>
                    <li>
                        <a href="<?=base_url?>producto/index">Inicio</a>
                    </li>
                    <?php while($cat =$categorias->fetch_object()) : ?>
                    <li>
                        <a href="#"><?= $cat->nombre ?></a>
                    </li>    
                    <?php endwhile; ?>
                </ul>     
            </nav>
            <div id="content">