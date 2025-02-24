<h1>Crear nuevos productos</h1>

<form action="<?=base_url?>producto/save" method="POST" enctype="multipart/form-data">
    
    <label for="nombre">Nombre</label>
        <input type="text" name="nombre"/>
    <label for="descripcion">Descripcion</label>
        <textarea name="descripcion"></texTArea>
    <label for="precio">Precio</label>
        <input type="text" name="precio"/>
    <label for="stock">Stock</label>
        <input type="number" name="stock"/>
    <label for="categoria ">Categoria</lable>
    <?php $categorias = Utils::showcategorias(); ?>
    <select name="categoria">
        <?php while($cat = $categorias->fetch_object()) : ?>
            <option value="<?=$cat->id?>">
                <?=$cat->nombre?>
            </option>
        <?php endwhile;?>    
    </select>
    <label for="imagen"> imagen</label>
        <input type="file" value="imagen"/>
    <input type="submit" value="Guardar" />
        
        
        
    
</form>