# SUBCONSULTAS #

/*
-Son consultas que se ejecutan dentro de otras.
consiste en utilizar los resultados de la subconsulta para operar en la consulta principal.
-jugando con las claves ajenas / foreanes.
*/
/*Que estan asociados*/ /*que tiene registros en la otra tabla*/
SELECT * FROM usuarios WHERE id in (SELECT usuario_id FROM entradas);
/*Que no tienen asociados*/  /*que not tiene registros en la otra tabla*/
SELECT * FROM usuarios WHERE id not in (SELECT usuario_id FROM entradas);
# Sacar los usuarios que tengan entrada que en su titulo hable de GTA 

     SELECT nombre, apellidos FROM usuarios WHERE id 
        IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");
# Sacar todas las entradas de la categoria accion utilizando su nombre #
  SELECT titulo, categoria_id  FROM entradas WHERE categoria_id 
            IN (SELECT id FROM categorias WHERE nombre= 'Accion');
# mostrar las categorias con mas de 3 entradas #
    SELECT nombre FROM categorias WHERE
    id IN
    (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >=3);
         #  SELECT COUNT(categoria_id), categoria_id FROM entradas GROUP BY categoria_id
# mostrar los usuarios que crearon una entrada el martes #
    SELECT * FROM usuarios WHERE id IN
        (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=3);
# mostrar el nombre del usuarios que tenga mas entradas #
        # SELECT usuario_id, COUNT(id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1;
        # SELECT COUNT(id) FROM entradas GROUP BY usuario_id;    
         
        SELECT nombre FROM usuarios WHERE id = 
        (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# mostrar las categorias sin entradas #
        
        SELECT * FROM categorias WHERE id IN(SELECT categoria_id FROM entradas);

        SELECT * FROM categorias WHERE id NOT IN(SELECT categoria_id FROM entradas);



