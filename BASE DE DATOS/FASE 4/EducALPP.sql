create database EducALPP;

use EducALPP;
create table if not exists clase(
	id_clase int auto_increment not null,
    nombre varchar (45),
    fecha datetime,
    primary key (id_clase)
);

create table if not exists usuarios(
	id_user int auto_increment not null,
    nombre varchar(30),
    apellido varchar(30),
    clave_us varchar(101),
    id_clase int not null,
    primary key (id_user),
    foreign key (id_clase) references clase(id_clase)
    );

create table if not exists rol(
	id_rol int auto_increment not null,
    rol varchar (20),
    primary key (id_rol)
);

create table if not exists sala(
	id_sala int auto_increment not null,
    nombre varchar (45),
    fecha datetime,
    id_clase int not null,
    primary key (id_sala),
    foreign key (id_clase) references clase(id_clase)
);

create table if not exists salaUsuario(
	id_salaUsuario int auto_increment not null,
    id_sala int  not null,
    id_user int  not null,
    id_clase int not null,
    primary key (id_salaUsuario),
    foreign key (id_sala) references sala(id_sala),
    foreign key (id_user) references usuarios(id_user),
    foreign key (id_clase) references clase(id_clase)
);

create table if not exists tipoMensaje(
	id_tipoMensaje int auto_increment not null,
    nombre varchar (45),
    primary key (id_tipoMensaje)
);

create table if not exists mensajeChat(
	id_mensajeChat int auto_increment not null,
	mensaje text,
    fecha datetime ,
    id_user int  not null,
    id_sala int  not null,
    primary key (id_mensajeChat),
    foreign key (id_user) references usuarios(id_user),
    foreign key (id_sala) references sala(id_sala)
);

create table if not exists tipoPost(
	id_tipoPost int auto_increment not null,
    nombreTipo varchar (45),
    primary key (id_tipoPost)
);

create table if not exists post(
	id_post int auto_increment not null,
    fechaPost datetime,
    texto text,
	id_user int not null,
    id_tipoPost int not null,
    primary key (id_post),
    foreign key (id_user) references usuarios(id_user),
    foreign key (id_tipoPost) references tipoPost(id_tipoPost)
);

create table if not exists comentarios(
	id_comentarios int auto_increment not null,
    texto text,
    fecha datetime,
    id_post int not null,
    id_user int not null,
    primary key (id_comentarios),
    foreign key (id_post) references post(id_post),
    foreign key (id_user) references usuarios(id_user)
);

create table if not exists tipoLike(
	id_tipoLike int auto_increment not null,
    nombreTipoLike varchar (45),
    primary key (id_tipoLike)
);

create table if not exists likee(
	id_like int auto_increment not null,
    fecha datetime,
    id_user int not null,
    id_post int not null,
    id_tipoLike int not null,
    primary key (id_like),
    foreign key (id_user) references usuarios(id_user),
    foreign key (id_post) references post(id_post),
    foreign key (id_tipoLike) references tipoLike(id_tipoLike)
);




