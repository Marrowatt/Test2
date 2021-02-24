CREATE DATABASE IF NOT EXISTS turimtest;

USE turimtest;

CREATE TABLE pessoa (
	id int not null auto_increment primary key,
    nome varchar(200)
);

CREATE TABLE filho (
	id int not null auto_increment primary key,
    pessoa_id int not null,
    nome varchar(200),
    foreign key (pessoa_id) references pessoa (id)
);