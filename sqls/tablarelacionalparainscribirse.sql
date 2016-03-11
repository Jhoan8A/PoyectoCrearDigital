create table inscribirse(
	id int not null auto_increment primary key,
	id_materia int not null ,
	id_estudiante int not null ,
    
	CONSTRAINT fk_inscribirse_materias FOREIGN KEY (id_materia) REFERENCES materias (id),
    CONSTRAINT fk_inscribirse_estudiante FOREIGN KEY (id_estudiante) REFERENCES usuarios (id)
    
);