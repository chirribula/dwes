CREATE DATABASE pizzeria;

USE pizzeria;
CREATE TABLE IF NOT EXISTS oferta (
    id int(11) NOT NULL AUTO_INCREMENT,
    titulo varchar(200) NOT NULL,
    imagen varchar(100) NOT NULL,
    descripcion varchar(500) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=INNODB;