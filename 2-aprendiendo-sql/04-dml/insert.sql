#Insertar nuevos registros#

INSERT INTO usuarios VALUE(null,'josé','apellidos','jose@gmial.com','12345','2019-05-01');
INSERT INTO usuarios VALUE(null,'antonio','martinez','mar@mar.com','23124','2019-01-04');
INSERT INTO usuarios VALUE(null,'ramiro','gonzales','gom@gom.com','165321','2019-06-05');
INSERT INTO usuarios VALUE(null,'alpre','raz','gom@gom.com','432432','2021-06-05');
INSERT INTO usuarios VALUE(null,'pedro','raz','gom@gom.com','234242','2021-06-05');

#insertar fila con determinadas columnas#

INSERT INTO usuarios(email,password) VULUES('jose@admin.com','admin');
