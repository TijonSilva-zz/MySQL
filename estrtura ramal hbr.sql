create database ramalhbr
default character set utf8mb4
default collate utf8mb4_general_ci;


use ramalhbr;

/*TABELAS*/
create table airbip (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4;

create table asadelta (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table restaurante (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table comercialcelula (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table comercialvrt (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4;

create table compras (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table contabilidade (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table contaspagar (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table controladoria (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;


create table controladoriaoperacional (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table ctm (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table diretoria (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table engenharia (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table estoque (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table externo (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table farmacia (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table ferramentaria (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table finaceiro (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table fiscal (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table inspetoria (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table logistica (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table juridico (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table metrologia (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table operacoes (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table predial (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table qualidade (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table recebimento (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table recepcao (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table rh (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table salasreuniao (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table salvatagem (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table secretaria (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table suprimentos (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table tecnologia (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;

create table tesouraria (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;


/*ADICIONANDO DADOS DAS VITIMAS*/

insert into airbip values (default, 'Air BP', '4880-8299');

insert into asadelta values (default, 'Asa Delta 4', '4880-8038');

insert into restaurante values
 (default, 'Café Pilotos', '4880-8030'),
 (default, 'Café Sala Vip ', '4880-8025'),
 (default, 'Restaurante', '4880-8020');
 
 insert into comercialcelula values
 (default, 'Alexandre Dobarco', '4880-8202'),
 (default, 'Alex Silva', '4880-8084'),
 (default, 'Jefferson Carvalho', '4880-8024'),
 (default, 'Manoela Sousa', '4880-8219'),
 (default, 'Roberto pagano', '4880-8303'),
 (default, 'Hamilton Carvalho', '4880-8205'),
 (default, 'Diego Avellar', '4880-8292'),
 (default, 'Pedro Zavan', '4880-8036');
 
 insert into comercialvrt values
 (default, 'Alex rocha', '4880-8128'),
 (default, 'Fabiano Carrilho', '4880-8125'),
 (default, 'Henrique Machado', '4880-8087'),
 (default, 'Priscila Ossiama', '4880-8264'),
 (default, 'Eduardo Pina', '4880-8037');
 
 insert into compras values 
 (default, 'Cristina Moustaca', '4880-8055'),
 (default, 'Lilian Neme', '4880-8168'),
 (default, 'Vitoria Araujo', '4880-8088'),
 (default, 'Vitor Martins', '4880-8241'),
 (default, 'Pietro Mori', '4880-8004');
 
 insert into contabilidade values 
 (default, 'Samuel Souza', '4880-8195'),
 (default, 'Renato Brandão', '4880-8169');
 
 insert into contaspagar values 
 (default, 'Miqueias Gomes', '4880-8184');
 
 insert into controladoria values 
 (default, 'Elias Oliveira', '4880-8184');
 
 insert into controladoriaoperacional values
 (default, 'Robson Neves', '4880-8260');
 
 insert into ctm values 
 (default, 'Alan Aciole', '4880-8138'),
 (default, 'Erick Matheus', '4880-8261'),
 (default, 'David Barbosa', '4880-8290'),
 (default, 'Orestes Mateus', '4880-8221');
 
 insert into diretoria  values
 (default, 'Eduardo Mardirossian', '4880-8014'),
 (default, 'Oderlei Fabiano', '4880-8145'),
 (default, 'Marcelo Madruga', '4880-8015');
 
 insert into engenharia values 
 (default, 'Elisabete Mendes', '4880-8220');
 
 insert into estoque values 
 (default, 'Andre Gentil', '4880-8263'),
 (default, 'Estoque', '4880-8085');
 
 insert into externo values
 (default, 'Pista', '4880-8080'),
 (default, 'Portaria Social', '4880-8011');
 
 insert into farmacia values 
 (default, 'Lucina Takahashi', '4880-8225');
 
 insert into ferramentaria values
 (default, 'Ferramentaria', '4880-8250');
 
 insert into finaceiro values
 (default, 'Matheus Campaner', '4880-8149');
 
 insert into fiscal values
 (default, 'Luiz Felipe', '4880-8146'),
 (default, 'Marilu Martins', '4880-8157');
 
 insert into inspetoria values
 (default, 'Elias Ferreira', '4880-8295'),
 (default, 'Mauricio Silva', '4880-8293');

insert into logistica values
(default,'Guilherme Campos', '4880-8062');

insert into juridico values 
(default, 'Valeria Pastorin', '4880-8083');

insert into metrologia values
(default, 'Fernando Cavalcante', '4880-8251');

insert into operacoes values
(default, 'Marcos Alba', '4880-8083'),
(default, 'Joao Oliveira', '4880-8240');

insert into predial values 
(default, 'Hugo Selmini', '4880-8054');

insert into qualidade values
(default, 'Renato Kenji', '4880-8222'),
(default, 'Danielle Cenedese', '4880-8057'),
(default, 'Sarah Maria', '4880-8058');

insert into recebimento values
(default, 'Joao Silva', '4880-8271'),
(default, 'Gabriel Aposto', '4880-8271');

insert into recepcao values
(default, 'Rayani Ossiama', '4880-8002'),
(default, 'Receção Pilotos', '4880-8002');

