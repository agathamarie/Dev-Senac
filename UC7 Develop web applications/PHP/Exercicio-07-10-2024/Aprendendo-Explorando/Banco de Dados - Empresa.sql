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

insert into funcionario (nome, cargo, idade, salario, telefone) values
('Agatha Marie', 'Engenheira de Dados', 18, 50000, '(67)9920012024'),
('Alysson Bryan', 'Engenheiro de Dados', 20, 50000, '(67)9920012024'),
("Aimê Rafaela", "Estagiária", 16, 2000, "(67)9920062029"),
("Alice Beatrice", "Estagiária", 16, 1600, "(67)9920062030");