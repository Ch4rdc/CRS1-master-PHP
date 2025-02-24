#MODIFICAR TABLAS#
ALTER TABLE usuarios RENAME TO usuarios_rename; 
#CMABIAR NOMBRE DE LA COLUMNA#
ALTER TABLE usuarios_rename CHANGE apellidos apellido varchar(100) null;
#MODIFICAR COLUMNA SIN CAMBIAR NOMBRE#
ALTER TABLE  usuario_rename MODIFY apellido char(50) not null;
#AÑADIR UNA NUEVA COLUMNA#
ALTER TABLE usuarios_rename ADD website varchar(100) null;
#AÑADIR UNA RESTRICCION A COLUMNA#
ALTER TABLE usuario_rename ADD CONSTRAINT uq_email UNIQUE(email);
#BORRAR UNA COLUMNA
ALTER TABLE usuarios_rename DROP website;
    