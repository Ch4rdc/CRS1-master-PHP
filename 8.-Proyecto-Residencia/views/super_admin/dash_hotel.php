<div class="datatable-back">
    <div class="datatable-conteiner">
        <div class="header-tools">
            <form action="<?=base_url?>ticket/showHotel" method="POST">
                <div class="select">
                    <select name="hotel"> 
                        <?php $hoteles = Utils::showhoteles(); ?>
                                    
                        <?php while ($hot = $hoteles->fetch_object()) : ?>
                            <option value="<?=$hot->id_hotel?>">
                                <?= $hot->nombre?>
                            </option>  
                        <?php endwhile; ?>    
                    </select>  
            </div>
            <div class="input">
                <input  type="submit" value="Seleccionar">
            </div>
            </form>
        </div>     
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
                    <th>Descripción Solución</th>            
                </tr>
            </thead>  
            <tbody>
                <?php while ($tic = $tickets->fetch_object()): ?>
                    <tr>                        
                        <td><?= $tic->nombre; ?></td>
                        <td><?= substr($tic->descripcion_problema, 0,20)."..."; ?></td>
                        <td><?= $tic->fecha; ?></td>
                        <td><?= $tic->hotel; ?></td>
                        <td><?= $tic->departamento; ?></td>
                        <td><?= $tic->ip_usuario; ?></td>
                        <?php if ($tic->estado == 'activo') : ?> 
                            <td><span class="abierto"></span></td>    
                        <?php elseif ($tic->estado == 'asignado') : ?>
                            <td><span class="abierto"></span></td>                        
                        <?php elseif ($tic->estado == 'inactivo') : ?>
                            <td><span class="cerrado"></span></td>
                        <?php endif; ?>
                        <td><?= $tic->descripcion_solucion;?> </td>
                    </tr> 
                  <?php endwhile; ?>      
            </tbody>    
        </table>
    </div>
</div>



