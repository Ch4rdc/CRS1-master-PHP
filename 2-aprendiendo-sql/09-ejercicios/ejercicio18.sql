/*
81.- listar los clientes que han echo algun encargo del coche "Mercedez ranchera"
*/

SELECT * FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id 
IN( SELECT  id FROM coches WHERE modelo='Mercedes Ranchera'));