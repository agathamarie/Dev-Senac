use sprint;

create table curso (
idcurso int primary key auto_increment,
nome varchar (50),
sigla varchar (3),
coordenador varchar (40)
);

insert into curso (nome, sigla, coordenador) values
('Desenvolvimento de Sistemas', 'DS', 'Xandinho'),
('Informática', 'INF', 'Mario Marcio'),
('Desenvolvedor de Jogos', 'DJ', 'Mauricio');

-- 1. Exibir todos os dados da tabela:
select * from curso;

-- 2. Exibir apenas os coordenadores dos cursos:
select coordenador from curso;

-- 3.  Exibir apenas os dados dos cursos de uma determinada sigla:
select * from curso where sigla = 'DS';
select * from curso where sigla = 'INF';
select * from curso where sigla = 'DJ';

-- 4. Exibir os dados da tabela ordenados pelo nome do curso:
select * from curso order by nome;

-- 5. Exibir os dados da tabela ordenados pelo nome do coordenador em ordem decrescente:
select * from curso order by coordenador desc;

-- 6. Exibir os dados da tabela, dos cursos cujo nome comece com uma determinada letra:
select * from curso where nome like 'I%';

-- 7. Exibir os dados da tabela, dos cursos cujo nome termine com uma determinada letra:
select * from curso where nome like '%s';

-- 8. Exibir os dados da tabela, dos cursos cujo nome tenha como segunda letra uma determinada letra:
select * from curso where nome like '_n%';

-- 9. Exibir os dados da tabela, dos cursos cujo nome tenha como penúltima letra uma determinada letra:
select * from curso where nome like '%o_';

-- 10. Elimine a tabela:
drop table curso;