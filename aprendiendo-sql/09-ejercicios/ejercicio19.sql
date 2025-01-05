/*
19.- Obtener los vendedores con 2 o mas clientes
*/
SELECT * FROM vendedores WHERE id IN 
(SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING COUNT(id)>=2);