create database biblioteca;
use biblioteca;

create table Usuario(
id_usuario int primary key auto_increment,
nome varchar(50) not null,
email varchar(100) not null,
telefone varchar(15) not null,
cpf varchar(14)
);

create table Livro(
id_livro int primary key auto_increment,
titulo varchar(100) not null,
autor varchar(50) not null,
genero varchar(50) not null
);