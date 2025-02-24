/* 
5.- Mostrar todos los vendedores con su nombre y el numero de dias que lleva en el concesionario
*/


SELECT nombre, DATEDIFF(CURDATE(),fecha) AS 'DIAS' FROM vendedores;