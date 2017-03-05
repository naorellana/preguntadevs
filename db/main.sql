create database dbPreguntaDevs;
	create table TBusuarios (usuarioId varchar (20) not null  primary key, nombre1 varchar (20) not null, 
		nombre2 varchar (20) not null, apellido1 varchar (20) not null, apellido2 varchar (20), claveSeguridad varchar (20) not null) 

INSERT INTO tbusuarios(usuarioId, nombre1, nombre2, apellido1, apellido2, claveSeguridad) 
VALUES ("naorellana","nery","alexis","orellana","cuy","aleis01")

UPDATE `tbusuarios` SET `claveSeguridad` = 'alexis01' 
WHERE `tbusuarios`.`usuarioId` = 'naorellana';