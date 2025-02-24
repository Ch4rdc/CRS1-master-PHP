<div class="datatable-back">
    <div class="datatable-conteiner">
        <table class="datatable">
            <br>
            <br>
            <br>
            <br>
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Hotel</th>
                    <th>Departamento</th>
                    <th>IP PC</th>
                    <th>Estado</th>
                    <th>Asignación</th>
                    <th>Asignar</th>
                </tr>
            </thead>  
                <tbody>
                    <?php while ($tic = $tickets->fetch_object()): ?>
                    <tr>                        
                        <td><?= $tic->nombre; ?></td>
                        <td><?= substr($tic->descripcion_problema, 0,20)."...";?></td>
                        <td><?= $tic->fecha; ?></td>
                        <td><?= $tic->hotel; ?></td>
                        <td><?= $tic->departamento; ?></td>
                        <td><?= $tic->ip_usuario; ?></td>
                        <?php if($tic->estado == 'activo') : ?> 
                        <td><span class="abierto"></span></td>    
                        <?php elseif($tic->estado == 'asignado') : ?>
                        <td><span class="asignado"></span></td>                        
                        <?php elseif($tic->estado == 'inactivo') : ?>
                        <td><span class="cerrado"></span></td>
                        <?php endif; ?>                   
                <form method="POST" action="<?=base_url?>ticket/gestion&id=<?=$tic->id_ticket;?>">
                      <td>
                       <?php $ingenieros = Utils::showIngenieros(); ?>
                          <?php if($tic->estado == 'activo') : ?>  
                                <select name="ingeniero">                                                                  
                                    <?php while ($ing = $ingenieros->fetch_object()) : ?>                          
                                        <option value="<?= $ing->id_nombre ?>">
                                            <?= $ing->nombre ?>
                                        </option>                        
                                    <?php endwhile; ?>                                      
                                </select>
                       <?php elseif($tic->estado == 'asignado') :?>
                          <select disabled name="ingeniero">     
                                      <?php while ($ing = $ingenieros->fetch_object()) : ?>                          
                                        <option value="<?= $tic->usuario_id ?>"></option>                        
                                      <?php endwhile; ?>                                     
                                </select>
                       <?php elseif($tic->estado == 'inactivo') :?>
                          <select disabled name="ingeniero">     
                                      <?php while ($ing = $ingenieros->fetch_object()) : ?>                          
                                        <option value="<?= $tic->usuario_id ?>"></option>                        
                                      <?php endwhile; ?>                                     
                                </select>
                       <?php endif; ?>
                       </td>    
                       <td>
                        <?php if($tic->estado == 'activo' ) :?>
                           <input  class="new" type="submit" value="Asignar"/> 
                        <?php elseif($tic->estado == 'asignado'): ?>
                           <input  disabled class="new" type="submit" value="Asignar"/> 
                        <?php elseif($tic->estado == 'inactivo'): ?>
                           <input  disabled class="new" type="submit" value="Asignar"/> 
                        <?php endif; ?>
                       </td>
                </form>
                    </tr> 
                    <?php endwhile; ?>   
                </tbody>                
        </table>
    </div>
</div>

