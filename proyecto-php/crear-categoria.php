<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>

    <?php require_once 'includes/lateral.php'; ?>
    
<!-- CAJA PRINCIPAL -->

<div id="principal">
    <h1>crear categorias</h1>
    <p>
        Introduce una nueva categoria la blog para que los usuarios pudan usarlo para atender mas entradas?
    </p>
    <br/>
    <form action="guardar-categoria.php" method="POST">
        <label for="nombre"></label>
        <input type="text" name="nombre"/>
       
        <input type="submit" value="guardar"/>
    </form>
</div>

<?php require_once 'includes/pie.php'; ?>
