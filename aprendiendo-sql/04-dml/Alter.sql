# agregar una columna;
ALTER TABLE tickets ADD COLUMN ip_usuario VARCHAR(20) AFTER fecha;
ALTER TABLE tickets ADD COLUMN usuario_tickets VARCHAR(20) after usuario_id;
# elimnar una comlumna;

# Renombrar una una columna
ALTER TABLE tickets CHANGE usuario_admin usuario_id int(150);
# modificar tipo de dato comuna
ALTER TABLE tickets MODIFY nombre varchar(255);

# ELIMINAR LLAVES FORNANEAS 
ALTER TABLE nombre_tabla DROP FOREIGN KEY nombre_restriccion;
# RESETEAT LLAVES FORANEAS
alter table nombre_tabla AUTO_INCREMENT=1;

CONSTRAINT fk_ticket_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id_nombre);