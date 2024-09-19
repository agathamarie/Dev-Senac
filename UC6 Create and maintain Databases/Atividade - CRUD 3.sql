use sprint;

create table filme (
idfilme int primary key auto_increment,
titulo varchar (50),
genero varchar (40),
diretor varchar (40)
);

insert into filme (titulo, genero, diretor) values
('Psycho', 'Terror', 'Alfred Hitchcock'),
('The Shining', 'Terror', 'Stanley Kubrick'),
('Halloween', 'Terror', 'John Carpenter'),
('The Nightmare Before Christmas', 'Animação', 'Tim Burton'),
('Toy Story', 'Animação', 'John Lasseter'),
('The Notebook', 'Romance', 'Nick Cassavetes'),
('Pride and Prejudice', 'Romance', 'Joe Wright'),
('Superbad', 'Comédia', 'Greg Mottola'),
('Groundhog Day', 'Comédia', 'Harold Ramis');

-- 1. Exibir todos os dados da tabela:
select * from filme;

-- 2. Adicionar o campo protagonista do tipo varchar(50) na tabela:
alter table filme add protagonista varchar (50);

-- 3. Atualizar o campo curtidas de todas as músicas inseridas:
update filme set protagonista = 'Anthony Perkins' where idfilme = 1;
update filme set protagonista = 'Jack Nicholson' where idfilme = 2;
update filme set protagonista = 'Jamie Lee Curtis' where idfilme = 3;
update filme set protagonista = 'Danny Elfman' where idfilme = 4;
update filme set protagonista = 'Tom Hanks' where idfilme = 5;
update filme set protagonista = 'Ryan Gosling' where idfilme = 6;
update filme set protagonista = 'Keira Knightley' where idfilme = 7;
update filme set protagonista = 'Jonah Hill' where idfilme = 8;
update filme set protagonista = 'Bill Murray' where idfilme = 9;

-- 4. Modificar o campo diretor do tamanho 40 para o tamanho 150:
alter table filme modify column diretor varchar (150);

-- 5. Atualizar o diretor do filme com id=5:
update filme set diretor = 'John' where diretor = 5;

-- 6. Atualizar o diretor dos filmes com id=2 e com o id=7:
update filme set diretor = 'Desconhecido' where idfilme = 2 and idfilme = 7;

-- 7. Atualizar o título do filme com o id=6:
update filme set titulo = 'The Other Woman' where idfilme = 6; 

-- 8. Excluir o filme com o id=3:
delete from filme where idfilme = 3;

-- 9. Exibir os filmes em que o gênero é diferente de drama (Troquei por terror):
select * from filme where genero <> 'Terror';

-- 10. Exibir os dados dos filmes que o gênero é igual ‘suspense’ (Coloquei terror):
select * from filme where genero = 'Terror';

-- 11. Descrever os campos da tabela mostrando a atualização do campo protagonista e diretor:
describe filme;

-- 12. Limpar os dados da tabela:
truncate table filme;