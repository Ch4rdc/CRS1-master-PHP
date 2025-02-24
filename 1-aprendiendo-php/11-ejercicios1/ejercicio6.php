<?php

/* 
EJERCICIO: 6  Mostrar una tabla HTML con la tabla de multiplicar del 1 al 10;
 */

echo "<table border='3'> <tr>"; //inicio de la tabla

echo "<tr>";//inicio fila 1
        for($cabezera=1; $cabezera<=10; $cabezera++){
            echo "<td>tabla del $cabezera</td>"; 
        }
echo "</tr>";//cierre fila 1

    echo "<tr>"; //inicio fila2
            for ($mul=1; $mul<=10; $mul++){
                
              echo"<td>";
                for($contador=1; $contador<=10; $contador++){
               
                echo "$mul x $contador = ".($mul*$contador."</br>");
                }
              echo "</td>";
}
     echo"</tr>";//cierre fila 2
        

echo "</table>";
