create database titosmarket;
use titosmarket;
create table tbl_login(
id int auto_increment primary key,
login varchar(30),
senha varchar(30),
nivel int not null
);

create table tbl_contato(
id int auto_increment primary key,
nome varchar(30),
email varchar(50),
telefone varchar(15),
comentario varchar(255)
);

