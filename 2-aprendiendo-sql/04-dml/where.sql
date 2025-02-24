
# consulta con una condicion #

SELECT * FROM usuarios WHERE email = 'jose@gmial.com';

/* OPERADOR DE COMPARACION 

operadores de comparacion SQL

igual           =
Distinto        !=
Menor           <
Mayor           >
Menor o igual   <= 
Mayor o igual   >=
Entre           Between A and B
En              in
Es nulo         is null
No nulo         is not null
Como            Like
No es como      not like
*/
/*COMODINES*/
/*Cualquier cantidad de caracteres: %*/
/*Un carcter desconocido: _ */
# EJEMPLOS #

# 1.- Mostrar nombres y apellidos de todos los usuarios registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;
# 2.- Mostrar nombres y apellidos de todos los usuarios que no se registraron en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);
# 3.- Mostrar el email de los usuarios cuyo apellido contenga l aletra A  y que su contraseña sea 12345
SELECT * FROM usuarios WHERE apellidos LIKE '%a%' AND password = '12345';
# 4.- Sacar todos los registros de la tabla usuarios cuyo año sea PAR;
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0 );
# 5.- Sacar todos los registros de la tabla usuarios cuyo nombre tenga mas de 5 letras y que se hayan registrado antes de
# 2020, y mostrar el nombre el mayus
SELECT UPPER(nombre) FROM usuarios WHERE (LENGTH(nombre) > 5 ) AND YEAR(fecha) < 2020 ; 
SELECT UPPER(nombre)  AS 'Nombre' FROM usuarios WHERE (LENGTH(nombre) > 5 ) AND YEAR(fecha) < 2020 ; # con alias

# Limit y Order BY #
SELECT * FROM usuarios ORDER BY id ASC;
SELECT * FROM usuarios ORDER BY id DESC;
SELECT * FROM usuarios ORDER BY fecha ASC;

SELECT * FROM usuarios LIMIT 1;
SELECT * FROM usuarios LIMIT 4;





