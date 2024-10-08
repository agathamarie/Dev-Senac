create database empresa;
use empresa;

create table funcionario(
id_fun int primary key auto_increment,
nome varchar(250) not null,
cargo varchar(65) not null,
idade int not null,
salario float not null,
telefone varchar(14) not null
);