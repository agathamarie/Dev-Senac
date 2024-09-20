use sprint;

create table professor (
idprofessor int primary key auto_increment,
nome varchar (50),
especialidade varchar (40),
dtnasc date
);

insert into professor (nome, especialidade, dtnasc) values
('Édini', 'banco de dados', '1995-06-22'),
('Caique', 'front end', '2001-04-01'),
('Ederson', 'python', '1980-10-30'),
('Felipe', 'gestão de projetos', '1995-04-20'),
('Mariana', 'design gráfico', '1992-11-15'),
('Roberto', 'machine learning', '1988-03-10'),
('Sofia', 'segurança da informação', '1990-07-05'),
('André', 'analista', '1975-12-01'),
('Lúcia', 'inteligência artificial', '1985-09-25');

-- 1. Exibir todos os dados da tabela:
select * from professor;

--  Adicionar o campo funcao do tipo varchar(50), onde a função só pode ser ‘monitor’, ‘assistente’ ou ‘titular’:
alter table professor add funcao varchar (50);

-- 3. Atualizar os professores inseridos e suas respectivas funções:
update professor set funcao = 'titular' where idprofessor = 1;
update professor set funcao = 'titular' where idprofessor = 2;
update professor set funcao = 'titular' where idprofessor = 3;
update professor set funcao = 'titular' where idprofessor = 4;
update professor set funcao = 'assistente' where idprofessor = 5;
update professor set funcao = 'monitor' where idprofessor = 6;
update professor set funcao = 'assistente' where idprofessor = 7;
update professor set funcao = 'monitor' where idprofessor = 8;
update professor set funcao = 'assistente' where idprofessor = 9;

-- 4. Inserir um novo professor:
insert into professor (nome, especialidade, dtnasc, funcao) values
('Alysson', 'game developer', '2004-10-10', 'monitor');

-- 5. Excluir o professor onde o idProfessor é igual a 5:
delete from professor where idprofessor = 5;

-- 6. Exibir apenas os nomes dos professores titulares:
select * from professor where funcao = 'titular';

-- 7. Exibir apenas as especialidades e as datas de nascimento dos professores monitores:
select nome, especialidade, dtnasc, funcao from professor where funcao = 'monitor';

-- 8.  Atualizar a data de nascimento do idProfessor igual a 3:
update professor set dtnasc = '1980-06-08' where idprofessor = 3;

-- 9. Limpar a tabela Professor:
truncate table professor;