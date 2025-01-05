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
                    <th>Descripción Solución</th>
                    <th>Cerrar Ticket</th>
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
                        <td><span class="abierto"></span></td>                        
                        <?php elseif($tic->estado == 'inactivo') : ?>
                        <td><span class="cerrado"></span></td>
                        <?php endif; ?>
                        <form method="POST" action="<?=base_url?>ticket/solucionar&id=<?=$tic->id_ticket;?>">
                            <td>  <textarea name="descripcion" required></textarea> </td>         
                        <td> 
                            <input class="new" type="submit" value="Cerrar"/>  </td>
                </form>
                    </tr> 
                    <?php endwhile; ?>   
                </tbody>    
             
        </table>
    </div>
</div>

