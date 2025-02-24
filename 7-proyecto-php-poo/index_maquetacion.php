<!DOCTYPE HTML>
<HTML lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tienda de camiseta</title>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css"/> 
    </head>
    <body>
        <DIV id="container">
            <!--cabezera-->
            <header id="header">
                <div id="logo">
                    <img src="assets/img/chamarra0.PNG" alt="camiseta Logo" />
                    <a href="index.php">
                        Tienda de camisetas
                    </a>
                </div>
            </header>
            <!--menu-->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Categoria1</a>
                    </li>
                    <li>
                        <a href="#">Categoria2</a>
                    </li>
                    <li>
                        <a href="#">Categoria3</a>
                    </li>
                    <li>
                        <a href="#">Categoria4</a>
                    </li>
                    <li>
                        <a href="#">Categoria5</a>
                    </li>
                </ul>     
            </nav>
            <div id="content">
                <!--barra lateral-->
                <aside id="lateral">
                    <div id="login" class="block_aside">
                        <h3>Entrar a la web</h3>
                        <form action="#" method="post">
                            <label for="email"> EMAIL </label> 
                            <input type="email" name="email"/>
                            <label for="password"> PASSWORD </label>
                            <input type="password" name="password"/>
                            <input type="submit" value="enviar">
                        </form>
                        <ul>
                            <li><a href="#">Mis pedidos</a></li>
                            <li><a href="#">Gestionar pedidos</a></li>
                            <li><a href="#">Gestionar categorias</a></li>
                        </ul>                             
                    </div>
                </aside>
                <!--contenido centrar-->
                <div id="central">
                    <h1>productos destacados</h1>
                    <div class="product">
                        <img src="assets/img/chamarra1.PNG" />
                             <h2>chamarra</h2>
                        <p>30 dolares</p>
                        <a href="#" class="button">comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/chamarra2.PNG"/> 
                             <h2>chamarra</h2>
                        <p>30 dolares</p>
                        <a href="#" class="button">comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/chamarra3.PNG"/> 
                             <h2>chamarra</h2>
                        <p>30 dolares</p>
                        <a href="#" class="button">comprar</a>
                    </div>     
                </div>
            </div>
            <!--pie de pagina--> 
            <footer id="footer">
                <p>Desarrollador por CharDC &copy; <?= date('Y') ?><p>
            </footer>   
        </DIV>
    </body>    
</HTML>