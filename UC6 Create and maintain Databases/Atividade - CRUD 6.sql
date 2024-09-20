use sprint;

create table revista (
idrevista int primary key auto_increment,
nome varchar (40),
categoria varchar (30)
);

insert into revista (nome) values
('Revista Veja'),
('Superinteressante'),
('Galileu'),
('Quatro Rodas'),
('Claudia');

-- 1. Exibir todos os dados da tabela:
select * from revista;

-- 2. Atualize os dados das categorias das 3 revistas inseridas. Exibir os dados da tabela novamente para verificar se atualizou corretamente:
update revista set categoria = 'Política' where idrevista = 1;
update revista set categoria = 'Ciência ' where idrevista = 2;
update revista set categoria = 'Ciência ' where idrevista = 3;
select * from revista;

-- 3. Insira mais 3 registros completos:
insert into revista (nome, categoria) values
('Época', 'Política'),
('Isto é','Política '),
('Rolling Stone', 'Música');

-- 4. Exibir novamente os dados da tabela:
select * from revista;

-- 5. Exibir a descrição da estrutura da tabela:
describe revista;

-- 6.  Alterar a tabela para que a coluna categoria possa ter no máximo 40 caracteres:
alter table revista modify column categoria varchar (40);

-- 7. Exibir novamente a descrição da estrutura da tabela, para verificar se alterou o tamanho da coluna categoria:
describe revista;

-- 8. Acrescentar a coluna periodicidade à tabela, que é varchar(15):
alter table revista add periodicidade varchar (15);

-- 9. Exibir os dados da tabela:
select * from revista;

-- 10. Excluir a coluna periodicidade da tabela:
alter table revista drop column periodicidade;