drop database if exists comercio;
create database comercio character set utf8mb4 collate utf8mb4_general_ci;
use comercio;

create table categoria(
	
    id int auto_increment primary key,
    nombre varchar(20)
);

create table productos(
	
    id int auto_increment primary key,
	nombre varchar(50),
    tipo enum('SOFWARE','HARDWARE'),
    precio float,
    unidades int,
    categoria int,
    imagen varchar(150),

	foreign key (categoria) references categoria(id) on delete cascade on update cascade
);


insert into categoria(id,nombre) values(1,'ORDENADOR'),(2,'ANTIVIRUS'),(3,'PROGRAMA');


INSERT INTO productos(id,nombre,tipo,precio,unidades,categoria) values

(1,'HONOR MagicBook X 15','HARDWARE',50.00,20,1),
(2,'Asus rog strix g17','HARDWARE',20.00,7,1),
(3,'Panda','SOFWARE',67.20,16,2),
(4,'WinRAR 6.11','SOFWARE',5.20,19,3);