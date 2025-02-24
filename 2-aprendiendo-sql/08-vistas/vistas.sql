
# Vistas :

/*Lo podemos definir como una constante almacenada en la base de datos que se utiliza como una tabla virtual.
No almacena datos si no que utliza asociaciones y los datos originales 
de las tablas, de forma que se siempre se mantiene actualizada
*/

CREATE VIEW entradas_con_nombres as

SELECT u.email, COUNT(titulo) 
FROM usuarios u, entradas e 
WHERE e.usuario_id = u.id GROUP BY e.usuario_id;

# Eliminar vista

DROP VIEW entradas_con_nombre;

