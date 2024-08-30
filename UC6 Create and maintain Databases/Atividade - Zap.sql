create database chat;
use chat;

create table pix (
	id_pix int primary key auto_increment not null,
	valor int not null,
	chavePix int not null
);

create table cartaocredito (
	id_cartaocredito int primary key auto_increment not null,
	valor int not null,
	numerocartao int not null
);
create table cartaodebito (
	id_cartaodebito int primary key auto_increment not null,
	numerocartao int not null,
	valor int not null
);

create table contato (
	id_contato int primary key auto_increment not null,
	nome varchar(14) not null,
	telefone int not null
);
create table ligacao (
	id_ligacao int primary key auto_increment not null,
	nome1user varchar(50) not null,
	telefone1user int(14) not null,
	nome2user varchar(50) not null,
	telefone2user int(14) not null,
	hora double not null,
	atendida boolean not null,
	duracao time not null
);

create table produto (
	id_produto int primary key auto_increment not null,
	produtonome varchar(50),
	descricao varchar(100),
	imagem blob,
	preco int
);

create table msgimagem (
	id_msgimagem int primary key auto_increment not null,
	imagem blob not null,
	formato varchar(6) not null,
	descrisao varchar(100) not null
);
create table msgvideo (
	id_msgvideo int primary key auto_increment not null,
	video blob not null,
	formato varchar(6) not null,
	descricao varchar(100) not null
);
create table msglocalizacao (
	id_msglocalizacao int primary key auto_increment not null,
	localizacao varchar(30),
	temporeal bool not null,
	tempodisponivel time,
	descricao varchar(100)
);
create table msgvoz (
	id_msgvoz int primary key auto_increment not null,
	formato varchar(6) not null,
	audio blob not null 
);

create table catalogo (
	id_catalogo int primary key auto_increment not null,
	id_produto int,
	foreign key (id_produto) references produto(id_produto)
);
create table tipopagamento(
	id_tipopagamento int primary key auto_increment not null,
	id_pix int,
	id_cartaodebito int,
	id_cartaocredito int,
	foreign key (id_pix) references Pix(id_pix),
	foreign key (id_cartaoDebito) references cartaoDebito(id_cartaoDebito),
	foreign key (id_cartaoCredito) references cartaoCredito(id_cartaoCredito)
);
create table assinatura (
	id_assinatura int primary key auto_increment not null,
	tipo varchar(30),
	id_tipopagamento int,
	data_inicio date not null,
	data_fim date not null,
	foreign key (id_tipopagamento) references tipopagamento(id_tipopagamento) 
);

create table usuariob (
	id_usuario_b int primary key auto_increment not null,
	nome_empresa varchar(30) not null,
	localizacao varchar(30) not null,
	cnpj varchar(30) not null,
	telefone int not null,
	id_catalogo int,
	id_contato int,
	id_assinatura int,
	foreign key (id_catalogo) references catalogo(id_catalogo),
	foreign key (id_contato) references contato(id_contato),
	foreign key (id_assinatura) references assinatura(id_assinatura)
);
create table usuarios (
	id_usuario_s int primary key auto_increment not null,
	nome varchar(50) not null,
	nick_name varchar(50) not null,
	telefone int not null,
	id_contato int,
	id_assinatura int,
	foreign key (id_contato) references contato(id_contato),
	foreign key (id_assinatura) references assinatura(id_assinatura)
);
create table usuariotipo (
	id_usuariotipo int primary key auto_increment not null,
	id_usuario_s int,
	id_usuario_b int,
	foreign key (id_usuario_s) references usuarios(id_usuario_s),
	foreign key (id_usuario_b) references usuariob(id_usuario_b)
);

create table msgtipo (
	id_msgtipo int primary key auto_increment not null,
	id_msgvideo int,
	id_msgimagem int,
	id_msglocalizacao int,
	id_msgvoz int,
	foreign key (id_msgvideo) references msgvideo(id_msgvideo),
	foreign key (id_msgimagem) references msgimagem(id_msgimagem),
	foreign key (id_msglocalizacao) references msglocalizacao(id_msglocalizacao),
	foreign key (id_msgvoz) references msgvoz(id_msgvoz)
);
create table mensagem (
	id_mensagem int primary key auto_increment not null,
	id_msgtipo int,
	id_usuariotipo int,
	foreign key (id_msgtipo) references msgtipo(id_msgtipo),
	foreign key (id_usuariotipo) references usuariotipo(id_usuariotipo)
);