
/*
8.- Visualizar todos los coches en cuya marca exista la letra "A" y cuyo comedelo empize por "F".
*/

   SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';