use sprint;

create table musica (
idMusica int primary key auto_increment,
titulo varchar (40),
artista varchar (40),
genero varchar (40)
);

insert into musica (titulo, artista, genero) values
('Bad Guy', 'Billie Eilish', 'Pop'),
('Everything I Wanted', 'Billie Eilish', 'Pop'),
('Vem Ser Minha', 'Charlie Brown JR', 'Indie'),
('Lisboa', 'Anavitória', 'Pop'),
('Joji - Slow Dancing in the Dark', 'Joji', 'Indie'),
('Redbone', 'Donald Glover', 'Soul'),
('Misery Business', 'Paramore', 'Rock'),
('Back to Black', 'Amy Winehouse', 'Soul'),
('Rehab', 'Amy Winehouse', 'Soul'),
('Fica', 'Anavitória', 'Pop'),
('Someone Like You', 'Amy Winehouse', 'Soul');

-- 1. Exibir todos os dados da tabela:
select * from musica;

-- 2. Adicionar o campo curtidas do tipo int na tabela:
alter table musica add curtidas int;

-- 3. Atualizar o campo curtidas de todas as músicas inseridas:
update musica set curtidas = 100000 where idMusica = 1;
update musica set curtidas = 389541 where idMusica = 2;
update musica set curtidas = 12367 where idMusica = 3;
update musica set curtidas = 965347 where idMusica = 4;
update musica set curtidas = 456895 where idMusica = 5;
update musica set curtidas = 12542 where idMusica = 6;
update musica set curtidas = 75499 where idMusica = 7;
update musica set curtidas = 36877 where idMusica = 8;
update musica set curtidas = 578425 where idMusica = 9;
update musica set curtidas = 642378 where idMusica = 10;
update musica set curtidas = 145426 where idMusica = 11;

-- 4. Modificar o campo artista do tamanho 40 para o tamanho 60:
alter table musica modify column artista varchar (80);

-- 5. Atualizar a quantidade de curtidas da música com id=1:
update musica set curtidas = 100001 where idMusica = 1;

-- 6. Atualizar a quantidade de curtidas das músicas com id=2 e com o id=3:
update musica set curtidas = 38000 where idMusica >= 2 and idMusica <= 3;

-- 7. Atualizar o nome da música com o id=5:
update musica set titulo = 'Like You Do' where idMusica = 5; 

-- 8. Excluir a música com o id=4:
delete from musica where idMusica = 4;

-- 8. Exibir as músicas onde o gênero é diferente de funk (Coloquei Soul):
select * from musica where genero <> 'Soul';

-- 9. Exibir os dados das músicas que tem curtidas maior ou igual a 20 (Coloquei 4000):
select * from musica where curtidas >= 4000;

-- 11. Descrever os campos da tabela mostrando a atualização do campo artista;
describe musica;

-- 12. Limpar os dados da tabela:
truncate table musica;