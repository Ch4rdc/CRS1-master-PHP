  CREATE TABLE usuarios(
    id          int(255) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(100) not null,
    email       varchar(100) not null,
    password    varchar(100) not null,
    fecha       date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
    )ENGINE=innoDb;

CREATE TABLE categorias(
    id          int(255) auto_increment not null,
    nombre      varchar(100),
    CONSTRAINT  pk_categorias PRIMARY KEY(id)
    )ENGINE=innoDb;
    
CREATE TABLE entradas(
    id              int(255) auto_increment not null,
    usuario_id      int(255)not null,
    categoria_id    int(255)not null,
    titulo          varchar(255),
    descripcion     MEDIUMTEXT,
    fecha           date not null,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
    )ENGINE=innoDb;

ENGINE=innoDb //para que las claves ajenas funcionen correctamente y la integridad referencial se respeten,
soporte de transacciones  y si hace mucho UPDATE e INSERT el rendimiento mejora bastante.

ENGINE=MYISAM// Tener una mayor velocidad general con SELECT es recomendable para apliacaciones que usan mucho select y la
deventaja no mantiene la integridad funcional.

ON DELETE CASCADE => cuando la un dato del id de la tabla asociada se borré tambine el registro de donde es foranea
ON UPDATE CASCADE => si se modifca en el ID del la tabla se actualiza en el asociado.
ON DELETE SET NULL => cuando se borre el campo se ponga en null.
ON DELETE SET DEFAULT => cuando se borre el campo se ponga en default.
ON DELETE NO ACTION => que no se haga nada.
 