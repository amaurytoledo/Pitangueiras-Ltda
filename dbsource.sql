create database db_pitangueira;

use db_pitangueira;
CREATE TABLE tb_func(
    id_func INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50),
    senha VARCHAR(20)
);


CREATE TABLE tb_atividade(
    id_atv INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    chamado VARCHAR(50),
    descricao VARCHAR(20)
);


drop database db_pitangueira;

drop table tb_func;