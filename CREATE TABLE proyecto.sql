CREATE TABLE proyecto.usuario (
    id_usuario int not null auto_increment primary key,
    nombre varchar(55) not null,
    apellidoP varchar(55) not null,
    apellidoM varchar(55) not null,
    telefono varchar(10) not null,
    email varchar(100) not null,
    contraseña varchar(50) not null,
    fechaNac date not null,
    id_tuser int not null

)engine=InnoDB;