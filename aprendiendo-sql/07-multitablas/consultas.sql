
/* 
CONSULTAS MULTITABLA:

Son consultas que sirven para consultar varias tablas en una sola sentencia

# Mostrar las entradas con el nombre del autor y el nombre de la categoria # */ 

SELECT e.id, e.titulo, u.nombre AS 'autor', c.nombre AS 'categoria'
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

    /* Inner Join */
    SELECT e.id, e.titulo, u.nombre AS 'autor', c.nombre AS 'categoria'
    FROM entradas e
    INNER JOIN usuarios u ON e.usuario_id = u.id
    INNER JOIN categorias c ON e.categoria_id = c.id;

    # llamar todas las columnas de 2 tablas
    SELECT * FROM tickets join hoteles on tickets.hotel_id = hoteles.id_hotel;
    # 
    SELECT t.id_ticket, t.nombre, t.descripcion_problema, h.nombre  AS 'hotel', d.nombre AS 'departamento',t.fecha, t.ip_usuario,t.estado,t.descripcion_solucion,t.usuario_id
    FROM tickets t
    INNER JOIN hoteles h ON t.hotel_id = h.id_hotel
    INNER JOIN departamentos d ON  departamento_id = d.id_departamento; 
    
# Mostrar el nombre de las categorias y al lado cuantas entradas tienen #

SELECT c.nombre, COUNT(e.id) FROM categorias c, entradas e
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;
    /* Inner Join */
    SELECT c.nombre, COUNT(e.id) FROM categorias c 
    LEFT JOIN entradas e ON e.categoria_id = c.id
    GROUP BY e.categoria_id;
    /*Right Join */
    SELECT c.nombre, COUNT(e.id) FROM categorias c 
    RIGHT JOIN entradas e ON e.categoria_id = c.id
    GROUP BY e.categoria_id;

# Mostrar el email de los usuarios y al lado cuantas entradas tienen #
 
SELECT u.email, titulo FROM usuarios u, entradas e WHERE e.usuario_id = u.id;
SELECT u.email, COUNT(titulo) FROM usuarios u, entradas e WHERE e.usuario_id = u.id; //Cuenta el numero de entradas

SELECT u.email, COUNT(titulo) 
FROM usuarios u, entradas e 
WHERE e.usuario_id = u.id GROUP BY e.usuario_id;
