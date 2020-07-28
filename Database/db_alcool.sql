CRETE DATABASE db_alcool;
USE db_alcool;
CREATE TABLE usuario(
    id_usuario int not null auto_increment primary key,
    nome varchar(255) not null,
    email varchar(255) not null unique,
    senha varchar(255) not null unique     
);