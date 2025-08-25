DROP DATABASE IF EXISTS formandos;

create database formandos;
use formandos;

create table usuarios (
id int auto_increment primary key,
usuario varchar(50) not null unique,
email varchar (150) not null
);

create table funcionarios (
id int auto_increment primary key,
nome varchar(60) not null,
usuario varchar(50) not null unique,
email varchar(150) not null,
senha varchar(25) not null,
cargo Enum('adm', 'funcionario') not null -- somente esses dois dados podem ser colocados, ai na area de cadastro do site tera um dropdown nessa area para escolher entre os dois
);

-- Criar tabela dos vestibulares, mas ainda tem que ver como que vai ser

select * from funcionarios;
select * from usuarios;