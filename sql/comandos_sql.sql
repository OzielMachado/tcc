create database db_antirransomware;
use db_antirransomware;

create table tb_user (
	id_user int primary key auto_increment,
    nome varchar(60) not null,
    email varchar(60) not null,
    senha varchar(500) not null,
    lembrete varchar(60) not null,
    foto varchar(60) null,
    nivel int(1) not null,
    dt date null,
    hr time null
) default charset = utf8;

create table tb_artigo (
	id_artigo int primary key auto_increment,
    titulo varchar(100) not null,
    imagem varchar(60) not null,
    texto varchar(8000) not null,
    url varchar(100) not null,
    dt date not null,
    hr time not null,
    page int(1) not null,
    id_user int not null,
    foreign key (id_user) references tb_user (id_user)
) default charset = utf8;