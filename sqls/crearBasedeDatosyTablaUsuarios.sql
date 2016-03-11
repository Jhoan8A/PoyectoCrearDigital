create database Electivas;
use Electivas;

create table usuarios(
	id int not null auto_increment primary key,
	nombreCompleto varchar(500) not null,
	nombreUsuario varchar(100) not null unique,
	email varchar(255) not null unique,
	pw varchar(255) not null,
	categoria varchar(255) not null,
	created_at datetime not null
);