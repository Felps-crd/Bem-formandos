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
INSERT INTO funcionarios (nome, usuario, email, senha, cargo)
VALUES
('max', 'maxwell', 'max@max', '123', 'adm');

-- Começo tabela dos vestibulares com auxiliar
Create table vestibulares (
id int auto_increment primary key,
nome varchar(100) not null
);
ALTER TABLE vestibulares
ADD COLUMN taxa DECIMAL(10,2) NOT NULL DEFAULT 0.00;
SHOW COLUMNS FROM vestibulares;

-- tabela de categorias (ex: Redação, isenção, etc)
create table categorias(
id int auto_increment primary key,
vestibular_id int,
nome varchar(100) not null,
foreign key (vestibular_id) references vestibulares(id) ON DELETE CASCADE
);

-- tabela de informações (conteudo dinamico de cada categoria)
create table informacoes (
id int auto_increment primary key,
categoria_id int not null,
titulo varchar(150) not null,
conteudo text not null,
foreign key (categoria_id) references categorias(id) on delete cascade
);

-- tabela de calendario
create table calendario (
id int auto_increment primary key,
vestibular_id int not null,
titulo Varchar(150) not null, -- ex: "Abertura das incricoes"
data_inicio date not null, -- ex: "2025-05-20"
data_fim date null,
foreign key(vestibular_id) references vestibulares(id) on delete cascade
);

-- Calendário do ENEM
INSERT INTO calendario (vestibular_id, titulo, data_inicio, data_fim)
VALUES
(1, 'Abertura das inscrições', '2025-05-15', '2025-05-30'),
(1, 'Aplicação das provas', '2025-11-02', '2025-11-09'),
(1, 'Divulgação dos resultados', '2026-01-15', NULL);


-- Criar tabela dos vestibulares, mas ainda tem que ver como que vai ser
select * from funcionarios;
select * from usuarios;

select * from vestibulares;
select * from categorias;
select * from informacoes;
select * from calendario;

show tables;

TRUNCATE TABLE usuarios;






