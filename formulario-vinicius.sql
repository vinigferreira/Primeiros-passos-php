create database dadosformulario;
use dadosformulario;
create table dadosuser (
id int auto_increment primary key,
nome VARCHAR(50) NOT NULL,
email VARCHAR(120) NOT NULL,
senha VARCHAR(30) NOT NULL,
data_nasc date NOT NULL
);

