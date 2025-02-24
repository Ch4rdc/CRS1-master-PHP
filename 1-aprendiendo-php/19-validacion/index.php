<!DOCTYPE HTML>
<HTML lang="es">
    <HEAD>
        <META charset="UTF-8"/>
        <TITLE>Validacion de formularios PHP</TITLE>
        
    </HEAD>
    <BODY>
        <H2>Validar Formulario</H2>
        <?php
        if(isset($_GET['error'])){
            $error = $_GET ['error'];
            var_dump($error);
            if($error == 'faltan valores'){
                echo '<strong style="color:red">Introduce todos los datos en todos los campos';
            }
            if($error == 'nombre'){
                echo '<strong style="color:red">Introduce el nombre correctamente';
            }
            if($error == 'apellidos'){
                echo '<strong style="color:red">Introduce el apellido correctamente';
            }
            if($error == 'edad'){
                echo '<strong style="color:red">Introduce la edad correctamente';
            }
            if($error == 'mail'){
                echo '<strong style="color:red">Introduce el correo correctamente';
            }
            if($error == 'password'){
                echo '<strong style="color:red">Introduce la contraseña correctamente';
            }
        }
        
        ?>
        <FORM method="POST" action="procesar_formulario.php">
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[a-zA-Z]+"/><br/>
            
            <label for="apellido">Apellidos</label><br/>
            <input type="text" name="apellido" required="required" pattern="[A-Za-z]+"/><br/>
            
           <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"/><br/>
            
            <label for="mail">Correo</label><br/>
            <input type="email" name="mail" required="required"/><br/>
            
            <label for="pass">Contraseña</label><br/>
            <input type="password" name="pass" required="required"/><br/>
            
            <input type="submit" value="enviar"/><br/>
            <label>
        </FORM>
    </BODY>
</HTML>
