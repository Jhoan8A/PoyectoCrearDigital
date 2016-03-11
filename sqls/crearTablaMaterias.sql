create table materias(
	id int not null auto_increment primary key,
	nombreMateria varchar(500) not null,
	profesor varchar(100) not null ,
	descripcion varchar(255) not null ,
	cupos int(255) not null,
	created_at datetime not null
);