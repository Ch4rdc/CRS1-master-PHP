<!DOCTYPE HTML>
<HTML Lang="es">
    <HEAD>
        <META charset="UTF-8"/>
        <TITLE>FORMULARIOS PHP Y HTML</TITLE
    </HEAD>
    <BODY>
        <H1>FORMULARIO</H1>
        <FORM action="" method="POST" enctype="multipart/form-data"> 
            <label for="nombre">Nombre:</label>
            <p><INPUT type="text" name="nombre"/></p>
            <label for="Apellido">Apellido</label>
            <p><INPUT type="text" name="apellido" /></p> 
           <!-- //disabled =>deshabilitar un campo
            //autofocus => enfocarlo en un campo
            //maxlengt => numero de caracteres
            //minleng => minimo de letras
            //pattern="[A+Z]+" =>SIN ESPACIOS
            //pattern="[A+Z ]+" =>CON ESPACIOS
            //PATTERN = "[A-Za-z0-9]+"  => sólo se permiten mayusculas y minusculas y números
            //required="required" =>necesita el campo si o si
            //value="hola" =>permite rellenarlo con texto real-->
            
            <label for="boton">Boton</label>
            <p><INPUT type="button" name="boton" value="hazme click"/></p> 
            
            <label for="sexo">Sexo</label>
            <p>
              hombre  <INPUT type="checkbox" name="sexo" value="hombre" checked="checked"/>
               mujer <INPUT type="checkbox" name="sexo" value="hombre"/>
            </p> 
            
            <label for="color">Color</label>
            <p><INPUT type="color" name="color" /></p> 
            
             <label for="fecha">Fecha</label>
            <p><INPUT type="date" name="fecha" /></p> 
            
             <label for="correo">Correo</label>
            <p><INPUT type="email" name="correo" /></p> 
            
            <label for="archivo">Archivo</label>
            <p><INPUT type="file" name="archivo" multiple="multiple"/></p>
            <!--mulitple => nos permite seleccionar varios archivos-->  
            <label for="correo">Correo</label>
            <p><INPUT type="email" name="correo" /></p>
            
            <label for="Numero">Numero</label> <!--nos permite seleccionar un numero-->
            <p><INPUT type="number" name="Numero" /></p>
            
            <label for="pass">Password</label> 
            <p><INPUT type="password" name="pass" /></p>
            
            <label for="pass">Password</label> 
            <p><INPUT type="password" name="pass" /></p>
            
            <label for="continente">Continente</label> 
            <p>
                America: <INPUT type="radio" name="continente" value="America" />
                Europa: <INPUT type="radio" name="continente" value="Europa" />
                Africa: <INPUT type="radio" name="continente" value="Africa" />
            </p>
            
            <label for="url">introduce URL  </label> 
            <p><INPUT type="URL" name="url" /></p>
            <TEXTAREA>  </TEXTAREA>

            peliculas 

            <select name="peliculas">
                <OPTION>Spiderman</OPTION>
                <OPTION>Batman</OPTION>
                <OPTION>Robbin</OPTION>
                
             </select>
            
        <INPUT type="submit" value="enviar"/>
        </FORM>
        
    </BODY>
</HTML>

