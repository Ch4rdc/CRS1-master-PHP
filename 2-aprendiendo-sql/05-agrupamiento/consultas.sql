# consultas de agrupamieto #

SELECT COUNT(titulo) AS 'NUMERO ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

# Consultas de agrupamiento con condiciones #

# No se puede utlizar el where en los agrupamientos para eso existe having 

SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id FROM entradas
GROUP BY categoria_id HAVING COUNT(titulo) >=2;
/*
AVG permite sacar la media
COUNT permite contar el numero de elementos
MAX devuelve el valor maximo del grupo
MIN deculve el valor minimo del grupo
SUM permite sumar
*/

SELECT AVG(id) AS 'Media de ID' FROM entradas; /*La media del agrupamiento*/
SELECT MAX(id) AS 'MAXIMO ID', titulo FROM entradas; /*Maximo dato ID*/
SELECT MIN(id) AS 'MINIMO ID', titulo FROM entradas; /*Minimo dato ID*/
SELECT SUM(id) AS 'SUMA ID', titulo FROM entradas; /*Suma los numeros*/


