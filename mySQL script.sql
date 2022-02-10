-- CRIANDO BANCO DE DADOS COM PADRAO UTF8--
CREATE DATABASE cadastro
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

-- CRIANDO TATELA COM REGRAS DE NEGOCIO --
USE cadastro;
CREATE TABLE `pessoas` (
`id` int not null auto_increment,
`nome` VARCHAR(30) NOT NULL,
`nascimento` DATE,
`sexo` ENUM ('M', 'F'),
`peso` DECIMAL (5, 2),
`altura` DECIMAL (3, 2),
`nacionalidade` VARCHAR(20) DEFAULT 'BRASIL',
primary key (id)
) DEFAUlT CHARSET = utf8;

-- INSERINDO DADOAS NA TABELA --
INSERT INTO pessoas values (default,'gabriel Tijon', '2000-11-15', 'M', '60', '1.85', default );
INSERT INTO pessoas values (default,'giovanna tijon', '2005-01-11', 'F', '60', '1.60', default );
INSERT INTO pessoas values (default,'antonio silva', '1980-06-08', 'M', '101', '1.75', default );

-- PUXANDO DADOS -- 
select * from pessoas;
describe pessoas;

-- ADD NOVA COLUNA -- 
alter table pessoas
add column profissao varchar (10);

-- DELETANDO COLUNA --   
alter table pessoas
drop column profissao;

-- ESCOLHENDO POSICAO DA COLUNA --
alter table pessoas
add column profissao varchar(10) after nome;

-- OU USAR PRA PRIMEIRO CAMPO-- 
alter table pessoas
add column codigo int first ;

-- MODIFICAR DEFINICAO DA COLUNA --
alter table pessoas
modify column profissao varchar(20);

-- MUDAR NOME DA COLUNA & TABELA --
-- COLUNA
alter table pessoas
 change column profissao prof varchar (20);
  -- TABELA
 alter	table pessoas
 rename to gafanhotos;
 
 
 
 -- SEGUNDO DIA -- 
 
 create table if not exists gafanhotos (teste int);
 
 create table if not exists cursos (
 nome varchar(30) not null unique,
 descricao text,
 carga int unsigned,
 totaulas int unsigned,
 ano year default '2016'
 ) default charset = utf8;
 
 -- INCLUINDO UM ID APOS A CRIACAO DA TABLE -- 
 
 alter table cursos
 add column idcurso int first;
 
 alter table cursos
 add primary key(idcurso);
 
 describe cursos;
 
 create table if not exists teste (
 id int,
 nome varchar(10),
 idade int
 );
 
 insert into teste value
 ('1', 'Gabriel', '21'),
 ('2', 'Maria', '26'),
 ('3', 'Maricota', '77');
 
 select * from teste;
  select * from gafanhotos;
 
 drop table if exists teste;
 
 
 
 -- TERCEIRO DIA DE AULA -- 
 insert into cursos values
('1', 'HTML4', 'Curso de HTML5', '40', '37', '2014'),
('2', 'Algoritmos', 'Lógica de Progamação', '20', '15', '2014'),
('3', 'Photoshop', 'Dicas de Photoshop CC', '10', '8', '2014'),
('4', 'PGP', 'Curso de PHP para iniciantes', '40', '20', '2010'),
('5', 'Jarva', 'Introdução à Linguagem Java', '10', '29', '2000'),
('6', 'MySQL', 'Banco de Dados MySQL', '30', '15', '2016'),
('7', 'Word', 'Curso completo de Word', '40', '30', '2016'),
('8', 'Sapateado', 'Danças Rítmicas', '40', '37', '2018'),
('9', 'Cozinha Árabe', 'Aprender a fazer Kibe', '40', '30', '2018'),
('10', 'YouTuber', 'Gerar polêmica e ganhar inscritos', '5', '2', '2018');
 
 select * from cursos;
 
 -- EDITANDO LINHAS DE REGISTROS -- 
 
 update cursos
 set nome = 'PHP', ano = '2015'
 where idcurso = '4';
 
 -- LIMITANDO APENAS EM UMA LINHA -- 
 update cursos
 set nome = 'Java', carga = '40', ano = '2015'
 where idcurso = '5'
 limit 1;
 
 
 -- DELETANDO LINHAS DA COLUNA -- 
 
 delete from cursos
 where idcurso = '8';
 
 delete from cursos
 where ano = '2018';
 
 truncate table cursos;
 drop database cadastro;
 
 
 
 -- QUARTA AULA --
 
 
   