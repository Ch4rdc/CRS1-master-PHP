<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>

    <?php require_once 'includes/lateral.php'; ?>
    
<!-- CAJA PRINCIPAL -->

<div id="principal">
    <h1>crear entradas</h1>
    <p>
        Añade nuevas entradas al blog para que los usuarios puedan leerlas y disfrutas del contenido
    </p>
    <br/>
    <form action="guardar-entradas.php" method="POST">
        
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo"/>
        <?php  echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'titulo'):''; ?>
        
        <label for="descripcion">Descripción:</label>
        <textarea type="text" name="descripcion"></textarea>
        
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'descripcion'):''; ?>
        
        <label for="categorias">Categorias</label>
        <select name="categorias">
            <?php $categorias = conseguirCategorias($db);
            if(!empty($categorias)):
                while($categoria= mysqli_fetch_assoc($categorias)):
            ?>
            <option value="<?=$categoria['id']?>"> <?= $categoria['nombre'] ?> </option>
            <?php
                 endwhile;
            endif;
            ?>          
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categorias'):''; ?>
       
        <input type="submit" value="guardar"/>
    </form>
    <?php borrarErrores() ?>
</div>

<?php require_once 'includes/pie.php'; ?>
