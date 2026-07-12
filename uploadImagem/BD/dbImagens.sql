create database imagens;

use imagens;

create table imagens(
	idImagem int primary key auto_increment,
    nomeOriginal varchar(100) not null,
    nomeHash varchar(100) not null unique,
    diretorio varchar(150) not null
);

-- truncate imagens;

select * from imagens;