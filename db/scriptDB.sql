create database titosmarket;
use titosmarket;
create table tbl_login(
id int auto_increment primary key,
usuario varchar(30),
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

create table tbl_categoria(
id_cat int primary key auto_increment, 
nome_cat varchar(30),
desc_cat varchar(155),
slug_cat varchar(15),
img_cat varchar(255)
);
