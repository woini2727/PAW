create database imagdb;

CREATE TABLE `imagenes` (
	`id_imagen` INT(11) NOT NULL AUTO_INCREMENT,
	`imagen` MEDIUMBLOB NOT NULL,
	`tipo_imagen` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`id_imagen`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=102
;
