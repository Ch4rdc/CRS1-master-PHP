CREATE DATABASE proyecto;
USE proyecto;

CREATE TABLE usuarios(
id_nombre       int(150) auto_increment not null,
nombre 		varchar(120) not null,
apellidos 	varchar(120) not null,
email 		varchar(255) not null,
password 	varchar(255) not null,
rol             varchar(20) not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id_nombre),
CONSTRAINT uq_email UNIQUE (email)
)ENGINE=InnoDB;

CREATE TABLE hoteles( 
id_hotel		 int(150) auto_increment not null,
nombre			 varchar(255) not null,
CONSTRAINT pk_hoteles PRIMARY KEY(id_hotel)
)ENGINE=InnoDB;

INSERT INTO hoteles VALUES(null, 'Nizuc');
INSERT INTO hoteles VALUES(null, 'Sunrise');
INSERT INTO hoteles VALUES(null, 'The Grand');
INSERT INTO hoteles VALUES(null, 'Campo Golf');

CREATE TABLE departamentos(
id_departamento     int(255) auto_increment not null,
nombre              varchar(150) not null,
CONSTRAINT pk_departamentos PRIMARY KEY(id_departamento)
)ENGINE=InnoDB;

INSERT INTO departamentos VALUES(null, 'Desarrollo Organizacional');
INSERT INTO departamentos VALUES(null, 'Desarollo humano');
INSERT INTO departamentos VALUES(null, 'Roperia');
INSERT INTO departamentos VALUES(null, 'Cocina');

CREATE TABLE tickets(
id_ticket	        int(255) auto_increment not null,
nombre 			varchar(255) not null,
descripcion_problema    varchar(255) not null,
hotel_id	   	int(150) not null,
departamento_id	        int(150) not null,
fecha 		        date not null,
ip_usuario              varchar(20),
estado                  varchar(255),
descripcion_solucion    varchar(255),
usuario_id       	int(150) ,
CONSTRAINT pk_tickets PRIMARY KEY(id_ticket),
CONSTRAINT fk_ticket_hotel FOREIGN KEY(hotel_id) REFERENCES hoteles(id_hotel),
CONSTRAINT fk_ticket_departamento FOREIGN KEY(departamento_id) REFERENCES departamentos(id_departamento),
CONSTRAINT fk_ticket_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id_nombre)
)ENGINE=InnoDB;

