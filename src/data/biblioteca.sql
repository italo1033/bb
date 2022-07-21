CREATE DATABASE biblioteca;

use biblioteca;

CREATE TABLE livro (
    `id` INTEGER UNIQUE NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(150),
    `idioma` VARCHAR(15),
    `autores` VARCHAR(255),
    `ip` VARCHAR(255),  #informações de publicação
    `df` VARCHAR(255), #descrição física
    `tp` VARCHAR(255), #tipo de publicação
    `td` VARCHAR(255), #tipo de documento
    `ta` VARCHAR(255), #termos do assunto
    `resumo` VARCHAR(1000),
    `isbn` VARCHAR(100),
    `nc` VARCHAR(255), #Número de acesso 
    `imageUrl` VARCHAR(255)
);

CREATE TABLE reserva(
    `id` INTEGER UNIQUE NOT NULL AUTO_INCREMENT,
    `quantidade` INT,
    `data` datetime,
    `usuario` VARCHAR(45),
    `livros` VARCHAR(45)
);

CREATE TABLE usuario(
    `id` INTEGER UNIQUE NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45),
    `cpf` VARCHAR(14),
    `rg` VARCHAR(8),
    `email` VARCHAR(35),
    `password` VARCHAR(100),
    `idade` INT,
    `phone` VARCHAR(15) ,
    `state` VARCHAR(19),
    `city` VARCHAR(28),
    `usuario` ENUM('professor','aluno'), 
    `instituicao` VARCHAR(150),
    `logradouro` VARCHAR(150)
);

