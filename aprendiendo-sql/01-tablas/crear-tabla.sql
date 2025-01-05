
/*
CREAR UNA TABLA

    int( n°)                ENTERO
    integer(n°)             ENTERO
    varchar(n°)             STRING / ALFANUMERICO(MAXIMO 255)
    Char(n° caracteres)     STRING / ALFANUMERICO
    float(n°)               DECIMAL/COMA FLOTANTE
    
*/
CREATE TABLE usuarios(
id INT(11) not null,
nombre VARCHAR(100) not null,
apellidos VARCHAR(255) dafault 'sdd',
email VARCHAR(100) not null,
password VARCHAR (255)
CONSTRAINT PK_usuarios PRIMARY KEY (id)
);

