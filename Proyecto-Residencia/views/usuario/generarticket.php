
<?php $data = $_SESSION['identity']; ?>
<?php   $nombre = $data->nombre;?>
<?php   $id = $data->id_nombre?>

 <?php if(isset($_SESSION['ticket']['complete'])) :?>
<script>
    swal('Ticket', 'Ticket N° <?=$no_ticket?> Generado', 'success');
</script>
<?php endif; ?>
<div class="ticket">
    <div class="center-ticket">
        
        <h2> Generar ticket <h2>
                <form  method="POST" action="<?=base_url?>ticket/save&id=<?=$id?>">
                    <div class='field'>
                      <label for="nombre" >Nombre del usuario </nombre>
                      <input type="text" name="nombre" value="<?= $nombre ?>"/>    
                    </div>
                    <div class='field'>
                       <label for="descripcion">Descripción del problema</label>
                       <textarea name="descripcion" required=""></textarea>    
                    </div>
                    <div class='field'>
                       <label for="hotel">Seleccionar Hotel</label>
                       <?php $hoteles = Utils::showhoteles(); ?>
                                <select name="hotel">
                                    <?php while ($hot = $hoteles->fetch_object()) : ?>
                                        <option value="<?= $hot->id_hotel ?>">
                                            <?= $hot->nombre ?>
                                        </option>
                                    <?php endwhile; ?>    
                                </select>
                    </div>
                    <div class='field'>
                        <label for="departamento">Seleccionar Departamento</label>
                       <?php $categorias = Utils::showdepartamentos(); ?>                               
                                <select name="departamento">
                                    <?php while ($cat = $categorias->fetch_object()) : ?>
                                        <option value="<?= $cat->id_departamento?>">
                                              <?= $cat->nombre ?>
                                        </option>
                                    <?php endwhile; ?>    
                                </select>
                    </div>
                    <input class="button-ticket" type="submit" value="Generar Ticket"/> 
                          </form>
                          <?php utils::deleteAlert(); ?>
              </div>
</div>