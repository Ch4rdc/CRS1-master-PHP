# MOSTRAR TODOS LOS REGISTROS / FILAS DE UNA TABLA #

SELECT email, nombre, FROM usuarios;

# MOSTRAR TODOS LOS CAMPOS #

SELECT * FROM usuarios;

# OPERADORES ARITMETICOS #

SELECT id email, (7+7) AS 'OPERACION' FROM usuarios ORDER BY id;

SELECT id email, (7+7) AS 'OPERACION' FROM usuarios ORDER BY id DESC;
# FUNCIONES MATEMATICAS #

SELECT ABS (7) AS 'OPERACION' FROM usuarios;
SELECT CEIL(7.34) AS 'OPERACION' FROM usuarios;
SELECT FLOOR(7.34) AS 'OPERACION' FROM usuarios;

# ABS el valor absoluto
# CELL rodonder a la alta
# FLOR redondear a la baja

SQL function math; // Para buscar funciones en el navegador

SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre,'',apellidos) FROM usuarios;
SELECT TRIM (CONCAT(nombre,'',apellidos)) AS 'conversion' FROM usuarios;

# FUNCIONES PARA TRABAJAR CON FECHAS #
SELECT email, fecha, CURDATE() AS 'fecha actual' FROM usuarios;
SELECT email, DATEDIFF(fecha,CURDATE()) AS 'fecha actual' FROM usuarios; //DIAS DE DIFERENCIA
SELECT email, DAY(fecha) AS 'fecha actual' FROM usuarios; //NOMBRE DEL DIA
DAYNAME //Nombre del dia 
SELECT email, DAYOFMONTH(fecha) AS 'fecha actual' FROM usuarios;// Mes
SELECT email, DAYOFWEEK(fecha) AS 'fecha actual' FROM usuarios;
SELECT email, DAYOFYEAR(fecha) AS 'fecha actual' FROM usuarios;
SELECT email, CURTIME() AS 'Fecha actual' FROM usuarios; // Hora Actual
SELECT email, SYSDATE() AS 'Fecha actual' FROM usuarios; //HORA COMPLETA DEL SO

# FUNCIONES GENERALES #

SELECT email, ISNULL(apellidos) FROM usuarios;
SELECT email, STRCMP('hola','hola') FROM usuarios; //distinguir si dos valores son iguales
SELECT email, STRCMP('hola','hola1') FROM usuarios; //True

SELECT VERSION() FROM usuarios;
SELECT USER() FROM usuarios;
SELECT DISTINCT USER() FROM usuarios;
SELECT DISTINCT DATABASE() FROM usuarios;
SELECT IFNULL (apellidos,'Este campo esta vacio') FROM usuarios;





