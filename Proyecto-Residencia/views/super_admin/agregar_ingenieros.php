<?php if(isset($_SESSION['register_ing']['complete'])): ?>
         <script>
           swal('Registro','Ingeniero Agregado','success');  
         </script>      
      <?php elseif(isset($_SESSION['register_ing']['failed'])) : ?>
         <script>
           swal('Registro','Ingeniero no Agregado','error');  
         </script>              
      <?php endif; ?>
<div class="ticket">
    <div class="center-ticket">
        <h2> Agregar Ingeniero <h2>
                <form  method="POST" action="<?=base_url?>usuario/saveIngeniero">
                    <div class='field'>
                      <label for="nombre" >Nombre del Ingeniero </nombre>
                      <input type="text" name="nombre" required=""/>    
                    </div>                 
                    <div class='field'>
                      <label for="apellidos">Apellidos </nombre>
                      <input type="text" name="apellidos" required=""/>    
                    </div>
                    <div class='field'>
                      <label for="email">Correo Electronico </nombre>
                      <input type="text" name="email" required=""/>    
                    </div>
                    <div class='field'>
                      <label for="contra">Contraseña </nombre>
                      <input type="password" name="password" required=""/>    
                    </div>
                   <!--  <div class='field'>
                      <label for="contra2">Confirmar contraseña </nombre>
                      <input type="password" name="password" required=""/>    
                    </div>-->
                   <input  class="button-registro"type="submit" value="agregar ingeniero"/> 
                          </form>
                <?php utils::deleteAlert();?>
              </div>
</div>