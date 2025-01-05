/*
16.-Obtener un listado de clientes atendidos por el vendedor 'david lopez'
*/

SELECT * FROM clientes WHERE vendedor_id IN 
(SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos = 'Lopez');