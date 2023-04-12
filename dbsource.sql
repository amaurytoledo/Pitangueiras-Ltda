CREATE DATABASE db_pitangueira;

USE db_pitangueira;

CREATE TABLE tb_func(
    id_func INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50),
    senha VARCHAR(20)
);

CREATE TABLE tb_atividade(
    id_atv INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    chamado VARCHAR(50),
    descricao VARCHAR(255)
);

DROP TABLE IF EXISTS tb_func;

DROP TABLE IF EXISTS tb_atividade;

DROP DATABASE IF EXISTS db_pitangueira;
