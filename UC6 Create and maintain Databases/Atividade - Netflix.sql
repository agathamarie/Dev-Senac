create database Netflix;
use netflix;
 
 create table ator (
id_ator varchar(20) primary key,
nome varchar(100) not null,
data_nascimento date not null,
local_nascimento varchar(100) not null
);
create table avaliacao (
id_avaliacao varchar(20) primary key,
nota int not null
);
create table usuario (
id_cpf varchar(13) primary key,
nome varchar(100) not null,
telefone varchar(15) not null,
email varchar(256) not null,
senha text not null,
endereco_cobranca varchar(256) not null,
num_cartao varchar(16) not null,
mensalidades_pendentes INT DEFAULT 0,
id_avaliacao varchar(20),
FOREIGN KEY (id_avaliacao) REFERENCES avaliacao(id_avaliacao)
);
 create table filme (
id_filme varchar(20) primary key,
titulo varchar(100) not null,
ano_producao date not null,
duracao_min int not null,
id_avaliacao varchar(20),
FOREIGN KEY (id_avaliacao) REFERENCES avaliacao(id_avaliacao)
);
 create table documentario (
id_documentario varchar(20) primary key,
titulo varchar(100) not null,
ano_producao date not null,
duracao_min int not null,
nome_produtora varchar(50) not null,
id_avaliacao varchar(20),
FOREIGN KEY (id_avaliacao) REFERENCES avaliacao(id_avaliacao)
);
 create table serie (
id_serie varchar(20) primary key,
titulo varchar(100) not null,
ano_producao date not null,
duracao_min int not null,
quantidade_temporadas int not null,
id_avaliacao varchar(20),
FOREIGN KEY (id_avaliacao) REFERENCES avaliacao(id_avaliacao)
);
 create table temporada (
id_temporada varchar(20) primary key,
titulo varchar(100) not null,
quantidade_episodios int not null,
id_serie varchar(20) not null,
FOREIGN KEY (id_serie) REFERENCES serie(id_serie)
);
create table episodio (
id_episodio varchar(20) primary key,
episodio int not null,
titulo varchar(100) not null,
duracao_min int not null,
id_temporada varchar(20) not null,
FOREIGN KEY (id_temporada) REFERENCES temporada(id_temporada)
);
create table pagamentos (
id_pagamento varchar(20) primary key,
id_cpf varchar(13) not null,
FOREIGN KEY (id_cpf) REFERENCES usuario(id_cpf),
valor decimal (10,2) not null,
data_pagamento date not null
);
create table cobranca (
id_cobranca varchar(20) primary key,
id_cpf varchar(13) not null,
FOREIGN KEY (id_cpf) REFERENCES usuario(id_cpf),
valor decimal (10,2) not null,
data_cobranca date not null
);
create table catalogo (
id_filme varchar(20),
FOREIGN KEY (id_filme) REFERENCES filme(id_filme),
id_documentario varchar(20),
FOREIGN KEY (id_documentario) REFERENCES documentario(id_documentario),
id_serie varchar(20),
FOREIGN KEY (id_serie) REFERENCES serie(id_serie),
id_ator varchar(20),
FOREIGN KEY (id_ator) REFERENCES ator(id_ator)
);
create table ator_filme (
id_ator varchar(20),
id_filme varchar(20),
primary key (id_ator, id_filme),
FOREIGN KEY (id_ator) REFERENCES ator(id_ator),
FOREIGN KEY (id_filme) REFERENCES filme(id_filme)
);
create table ator_serie (
id_ator varchar(20),
id_serie varchar(20),
primary key (id_ator, id_serie),
FOREIGN KEY (id_ator) REFERENCES ator(id_ator),
FOREIGN KEY (id_serie) REFERENCES serie(id_serie)
);
create table ator_documentario (
id_ator varchar(20),
id_documentario varchar(20),
primary key (id_ator, id_documentario),
FOREIGN KEY (id_ator) REFERENCES ator(id_ator),
FOREIGN KEY (id_documentario) REFERENCES documentario(id_documentario)
);