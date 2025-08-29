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


-- Começo tabela dos vestibulares com auxiliar

Create table vestibulares (
id int auto_increment primary key,
nome varchar(100) not null
);
ALTER TABLE vestibulares
ADD COLUMN taxa DECIMAL(10,2) NOT NULL DEFAULT 0.00;

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

create table links (
id int auto_increment primary key,
categoria_id int not null,
titulo varchar(150) not null,
link varchar(255),
foreign key (categoria_id) references categorias(id) on delete cascade
);

drop table calendario;
-- tabela de calendario
create table calendario (
id int auto_increment primary key,
vestibular_id int not null,
titulo Varchar(150) not null, -- ex: "Abertura das incricoes"
data_inicio date not null, -- ex: "2025-05-20"
data_fim date null,
foreign key(vestibular_id) references vestibulares(id) on delete cascade
);


-- exemplo de inserção de dados

	-- Vestibular ENEM
INSERT INTO vestibulares (nome, taxa)
VALUES ('ENEM', 85.00);

INSERT INTO vestibulares (nome, taxa)
VALUES ('FATEC', 90.00);

-- Categorias 
INSERT INTO categorias (vestibular_id, nome) -- 
VALUES 
(1, 'Redação'), (1, 'Isenção'), (2, 'redação'), (2, 'Isenção');

-- Informações
INSERT INTO informacoes (categoria_id, titulo, conteudo)
VALUES 
(1, 'Como funciona a redação do ENEM', 'A redação deve ser dissertativo-argumentativa...'),
(1, 'Exemplos de redações nota 1000', 'Disponibilizamos arquivos para download...'),
(2, 'Como funciona', 'Funciona assim...'),
(3, 'Exemplos de redações nota 1000', 'Disponibilizamos arquivos para download...'),
(4, 'Como funciona', 'Funciona assim...');

-- Calendário do ENEM
INSERT INTO calendario (vestibular_id, titulo, data_inicio, data_fim)
VALUES
(1, 'Abertura das inscrições', '2025-05-15', '2025-05-30'),
(1, 'Aplicação das provas', '2025-11-02', '2025-11-09'),
(1, 'Divulgação dos resultados', '2026-01-15', NULL);

-- Links relacionados ao ENEM - Redação
INSERT INTO links (categoria_id, titulo, link)
VALUES
(1, 'Página oficial da Redação ENEM', 'https://enem.inep.gov.br/redacao'),
(1, 'Redações nota 1000 MEC', 'https://www.gov.br/mec/redacoes-nota-mil');

-- Links relacionados ao ENEM - Isenção
INSERT INTO links (categoria_id, titulo, link)
VALUES
(2, 'Página oficial da Isenção ENEM', 'https://enem.inep.gov.br/isenção'),
(2, 'Regras de isenção MEC', 'https://www.gov.br/mec/regras-isenção');

-- Links relacionados à FATEC - Redação
INSERT INTO links (categoria_id, titulo, link)
VALUES
(3, 'Guia de redação FATEC', 'https://vestibularfatec.com.br/redacao'),
(3, 'Exemplos de redação FATEC', 'https://fatec.sp.gov.br/exemplos-redacao');

-- Links relacionados à FATEC - Isenção
INSERT INTO links (categoria_id, titulo, link)
VALUES
(4, 'Página oficial da Isenção FATEC', 'https://vestibularfatec.com.br/isenção'),
(4, 'Regras de isenção FATEC', 'https://fatec.sp.gov.br/isenção');

insert into funcionarios (nome, usuario, email, senha, cargo)
values("Felipe", "felipe","felipe@gmail","123", "adm");

select * from funcionarios;
select * from usuarios;

SET FOREIGN_KEY_CHECKS = 0;
SET FOREIGN_KEY_CHECKS = 1;

truncate table calendario;
truncate table informacoes;
truncate table categorias;
truncate table vestibulares;
truncate table links;

select * from calendario;
select * from vestibulares;
select * from informacoes;
select * from categorias;
select * from links;

-- Selecionar vestibulares com suas devidas categorias
SELECT v.nome AS vestibular, v.taxa, c.nome AS categoria
FROM vestibulares v
INNER JOIN categorias c ON v.id = c.vestibular_id;

-- Selecionar todos os vestibulares mesmo qual nao tem categoria
SELECT v.nome AS vestibular, v.taxa, c.nome AS categoria
FROM vestibulares v
LEFT JOIN categorias c ON v.id = c.vestibular_id;

-- Seleciona os vestibulares com suas devidas categorias e informacoes
SELECT v.nome AS vestibular, c.nome AS categoria, i.titulo, i.conteudo
FROM vestibulares v
INNER JOIN categorias c ON v.id = c.vestibular_id
INNER JOIN informacoes i ON c.id = i.categoria_id;

-- Seleciona os vestibulares e seu calendario
SELECT v.nome AS vestibular, v.taxa, cal.titulo, cal.data_inicio, cal.data_fim
FROM vestibulares v
INNER JOIN calendario cal ON v.id = cal.vestibular_id;

-- Seleciona os links das categorias
SELECT v.nome AS vestibular, c.nome AS categoria, l.titulo, l.link
FROM vestibulares v
INNER JOIN categorias c ON v.id = c.vestibular_id
INNER JOIN links l ON c.id = l.categoria_id;

-- Seleciona tudo
SELECT 
    v.nome AS vestibular,
    v.taxa,
    c.nome AS categoria,
    i.titulo AS info_titulo,
    l.titulo AS link_titulo,
    l.link,
    cal.titulo AS evento,
    cal.data_inicio,
    cal.data_fim
FROM vestibulares v
LEFT JOIN categorias c ON v.id = c.vestibular_id
LEFT JOIN informacoes i ON c.id = i.categoria_id
LEFT JOIN links l ON c.id = l.categoria_id
LEFT JOIN calendario cal ON v.id = cal.vestibular_id;





