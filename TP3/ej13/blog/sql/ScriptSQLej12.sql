CREATE DATABASE `blogdb` /*!40100 COLLATE 'latin1_swedish_ci' */;

CREATE TABLE `tags` (
	`id_tags` INT NOT NULL AUTO_INCREMENT,
	`nombre_tag` VARCHAR(50)NOT NULL,
	PRIMARY KEY (`id_tags`)
)
COLLATE='latin1_swedish_ci'
;

CREATE TABLE `comentarios` (
	`id_comentario` INT(11) NOT NULL AUTO_INCREMENT,
	`comentario` VARCHAR(50) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id_comentario`)
)


CREATE TABLE `articulo` (
	`id_articulo` INT(11) NOT NULL AUTO_INCREMENT,
	`id_comentario` INT(11) NOT NULL DEFAULT '0',
	`id_tag` INT(11) NOT NULL DEFAULT '0',
	`titulo` VARCHAR(50) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id_articulo`),
	INDEX `id_comentario` (`id_comentario`),
	INDEX `id_tag` (`id_tag`),
	CONSTRAINT `id_comentario` FOREIGN KEY (`id_comentario`) REFERENCES `comentario` (`id_comentario`),
	CONSTRAINT `id_tag` FOREIGN KEY (`id_tag`) REFERENCES `tags` (`id_tags`)
)