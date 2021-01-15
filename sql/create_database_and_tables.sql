CREATE DATABASE gerenciador_de_locadora CHARACTER SET utf8 COLLATE utf8_general_ci;

USE gerenciador_de_locadora;



CREATE TABLE carros (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    alugado TINYINT UNSIGNED NOT NULL DEFAULT 0,
    valor VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE clientes (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    PRIMARY KEY(id)
);



INSERT INTO carros (nome, valor)
VALUES ('Gol G6', '80');

INSERT INTO clientes (nome, telefone)
VALUES ('Paulo', "0000-0000");

