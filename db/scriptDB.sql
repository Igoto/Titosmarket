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

CREATE TABLE tbl_produtos (
id_pro int primary key auto_increment,
nome_pro varchar(55),
desc_pro varchar(255),
fk_id_cat int,
foreign key (fk_id_cat)
REFERENCES tbl_categoria(id_cat),
slug_pro varchar(15),
img_pro varchar(255)
)

'Explicação Foreign Key é a chave estrangeira,
existe uma dependência a uma tabela origem, portanto
enquanto houver produtos desta categoria,
não conseguimos deletar a categoria nem
sua tabela'
select * from tbl_produtos;
drop table tbl_categoria;
DELETE from tbl_categoria WHERE id_cat=1;