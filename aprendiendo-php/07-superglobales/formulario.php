<!DOCTYPE HTML>
<HTML lang='es'>
    <head>
        <meta charset='UTF-8'/>
        <title>FORMULARIO EN PHP</title>
    </head>
    <body>
        <h1>Formulario PHP</h1>
        
        <form method="POST" action="recibir.php"> <!-- 'action' que pagina va a recibir los datos -->
            <P>
            <label for='Nombre'>Nombre</label>
            <input Type='text' name="nombre" />
            </P>
            
            <P>
            <label for='Apellidos'>Apellidos</label>
            <input Type='text' name="apellidos" />
            </P>
            <P>
                <input type="submit" value="Enviar"/>
            </P>
          
        </form>
    </body>
</HTML>
<?php

