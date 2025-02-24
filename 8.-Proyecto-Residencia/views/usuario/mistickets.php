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
                    <th>Estado</th>                    
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
                        <?php if($tic->estado == 'activo') : ?> 
                        <td><span class="abierto"></span></td>    
                        <?php elseif($tic->estado == 'asignado') : ?>
                        <td><span class="abierto"></span></td>                        
                        <?php elseif($tic->estado == 'inactivo') : ?>
                        <td><span class="cerrado"></span></td>
                        <?php endif; ?>                       
                    </tr> 
                    <?php endwhile; ?>   
                </tbody>                
        </table>
    </div>
</div>

