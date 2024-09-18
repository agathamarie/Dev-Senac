create database sprint;
use sprint;

create table Atleta (
idAtleta int auto_increment primary key not null,
nome varchar (40),
modalidade varchar (40),
qtdMedalha int
);

insert into Atleta (nome, modalidade, qtdMedalha) values
('Carlos Silva', 'Natação', 12),
('Ana Paula', 'Natação', 9),
('Julia Santos', 'Atletismo', 7),
('Ricardo Oliveira', 'Atletismo', 6),
('Mariana Costa', 'Vôlei', 15),
('Felipe Souza', 'Badminton', 8),
('Eduardo Lima', 'Tênis', 5),
('Beatriz Almeida', 'Tênis', 6),
('Gabriel Pereira', 'Ginástica Artística', 14),
('Clara Martins', 'Ginástica Artística', 11),
('Fernando Lima', 'Futebol', 7),
('Agatha Marie', 'Volêi', 10),
('Alysson Bryan', 'Futebol', 10),
('Lorena Pinheiro', 'Badminton', 10);

-- 1. Exibir todos os dados da tabela:
select * from Atleta;

-- 2. Atualizar a quantidade de medalhas do atleta com id=1:
update Atleta set qtdMedalha = 10 where idAtleta = 1;

-- 3. Atualizar a quantidade de medalhas do atleta com id=2 e com o id=3:
update Atleta set qtdMedalha = 8 where idAtleta >= 2 and idAtleta <= 3;

-- 4. Atualizar o nome do atleta com o id=4:
update Atleta set nome = 'Ricardo Eduardo' where idAtleta = 4; 

-- 5. Adicionar o campo dtNasc na tabela, com a data de nascimento dos atletas, tipo date:
alter table Atleta add dtNasc date;

-- 6. Atualizar a data de nascimento de todos os atletas:
update Atleta set dtNasc = '2004-01-01' where idAtleta = 1;
update Atleta set dtNasc = '2003-02-02' where idAtleta = 2;
update Atleta set dtNasc = '2000-03-03' where idAtleta = 3;
update Atleta set dtNasc = '2001-04-04' where idAtleta = 4;
update Atleta set dtNasc = '2006-05-05' where idAtleta = 5;
update Atleta set dtNasc = '2007-06-06' where idAtleta = 6;
update Atleta set dtNasc = '2005-07-07' where idAtleta = 7;
update Atleta set dtNasc = '2004-08-08' where idAtleta = 8;
update Atleta set dtNasc = '2003-09-09' where idAtleta = 9;
update Atleta set dtNasc = '2002-10-10' where idAtleta = 10;
update Atleta set dtNasc = '2002-11-11' where idAtleta = 11;
update Atleta set dtNasc = '2006-03-02' where idAtleta = 12;
update Atleta set dtNasc = '2004-10-10' where idAtleta = 13;
update Atleta set dtNasc = '2005-03-03' where idAtleta = 14;

-- 7. Excluir o atleta com o id=5:
delete from Atleta where idAtleta = 5;

-- 8. Exibir os atletas onde a modalidade é diferente de natação
select * from Atleta where modalidade <> 'Natação';

-- 9. Exibir os dados dos atletas que tem a quantidade de medalhas maior ou igual a 3:
select * from Atleta where qtdMedalha >= 3;

-- 10. Modificar o campo modalidade do tamanho 40 para o tamanho 60:
alter table Atleta modify column modalidade varchar (60);

-- 11. Descrever os campos da tabela mostrando a atualização do campo modalidade:
describe Atleta;

-- 12. Limpar os dados da tabela:
truncate table Atleta;