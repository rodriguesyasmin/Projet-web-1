-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema stampee
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema stampee
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `stampee` DEFAULT CHARACTER SET utf8mb4 ;
-- -----------------------------------------------------
-- Schema stampee
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema stampee
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `stampee` DEFAULT CHARACTER SET utf8mb4 ;
USE `stampee` ;

-- -----------------------------------------------------
-- Table `stampee`.`categorie_stampee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stampee`.`categorie_stampee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `stampee`.`status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stampee`.`status` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `status` TINYINT(4) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `stampee`.`privilege_stampee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stampee`.`privilege_stampee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `privilege` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `stampee`.`user_stampee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stampee`.`user_stampee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `mot_de_passe` VARCHAR(255) NOT NULL,
  `pays_de_naissance` VARCHAR(45) NOT NULL,
  `privilege_stampee_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_stampee_privilege_stampee_idx` (`privilege_stampee_id` ASC) ,
  CONSTRAINT `fk_user_stampee_privilege_stampee`
    FOREIGN KEY (`privilege_stampee_id`)
    REFERENCES `stampee`.`privilege_stampee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `stampee`.`timbre_stampee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stampee`.`timbre_stampee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `identifiant` VARCHAR(10) NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `annee` VARCHAR(45) NOT NULL,
  `prix` VARCHAR(45) NOT NULL,
  `etat` VARCHAR(45) NOT NULL,
  `pays` VARCHAR(25) NOT NULL,
  `certifie` TINYINT(4) NOT NULL,
  `couleur` VARCHAR(45) NOT NULL,
  `dimensions` VARCHAR(45) NOT NULL,
  `categorie_stampee_id` INT(11) NOT NULL,
  `user_stampee_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_timbre_stampee_categorie_stampee1_idx` (`categorie_stampee_id` ASC) ,
  INDEX `fk_timbre_stampee_user_stampee1_idx` (`user_stampee_id` ASC) ,
  CONSTRAINT `fk_timbre_stampee_categorie_stampee1`
    FOREIGN KEY (`categorie_stampee_id`)
    REFERENCES `stampee`.`categorie_stampee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_timbre_stampee_user_stampee1`
    FOREIGN KEY (`user_stampee_id`)
    REFERENCES `stampee`.`user_stampee` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `stampee`.`encheres_stampee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stampee`.`encheres_stampee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `date_debut` DATETIME NOT NULL,
  `date_heure_fin` DATETIME NOT NULL,
  `prix_initial` INT(11) NOT NULL,
  `derniere_mise` INT(11) NOT NULL,
  `coup_de_coeur` TINYINT(4) NOT NULL,
  `status_id` INT(11) NOT NULL,
  `timbre_stampee_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_encheres_stampee_status1_idx` (`status_id` ASC) ,
  INDEX `fk_encheres_stampee_timbre_stampee1_idx` (`timbre_stampee_id` ASC) ,
  CONSTRAINT `fk_encheres_stampee_status1`
    FOREIGN KEY (`status_id`)
    REFERENCES `stampee`.`status` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_encheres_stampee_timbre_stampee1`
    FOREIGN KEY (`timbre_stampee_id`)
    REFERENCES `stampee`.`timbre_stampee` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `stampee`.`favoris_stampee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stampee`.`favoris_stampee` (
  `encheres_stampee_id` INT(11) NOT NULL,
  `user_stampee_id` INT(11) NOT NULL,
  PRIMARY KEY (`encheres_stampee_id`, `user_stampee_id`),
  INDEX `fk_encheres_stampee_has_user_stampee_user_stampee1_idx` (`user_stampee_id` ASC) ,
  INDEX `fk_encheres_stampee_has_user_stampee_encheres_stampee1_idx` (`encheres_stampee_id` ASC) ,
  CONSTRAINT `fk_encheres_stampee_has_user_stampee_encheres_stampee1`
    FOREIGN KEY (`encheres_stampee_id`)
    REFERENCES `stampee`.`encheres_stampee` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_encheres_stampee_has_user_stampee_user_stampee1`
    FOREIGN KEY (`user_stampee_id`)
    REFERENCES `stampee`.`user_stampee` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `stampee`.`image_stampee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stampee`.`image_stampee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `image_principale` VARCHAR(100) NOT NULL,
  `image_secondaire` VARCHAR(100) NOT NULL,
  `timbre_stampee_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_image_stampee_timbre_stampee1_idx` (`timbre_stampee_id` ASC) ,
  CONSTRAINT `fk_image_stampee_timbre_stampee1`
    FOREIGN KEY (`timbre_stampee_id`)
    REFERENCES `stampee`.`timbre_stampee` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `stampee`.`mise_stampee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stampee`.`mise_stampee` (
  `user_stampee_id` INT(11) NOT NULL,
  `encheres_stampee_id` INT(11) NOT NULL,
  `montant_mise` INT(11) NOT NULL,
  PRIMARY KEY (`user_stampee_id`, `encheres_stampee_id`),
  INDEX `fk_user_stampee_has_encheres_stampee_encheres_stampee1_idx` (`encheres_stampee_id` ASC) ,
  INDEX `fk_user_stampee_has_encheres_stampee_user_stampee1_idx` (`user_stampee_id` ASC) ,
  CONSTRAINT `fk_user_stampee_has_encheres_stampee_encheres_stampee1`
    FOREIGN KEY (`encheres_stampee_id`)
    REFERENCES `stampee`.`encheres_stampee` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_stampee_has_encheres_stampee_user_stampee1`
    FOREIGN KEY (`user_stampee_id`)
    REFERENCES `stampee`.`user_stampee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

USE `stampee` ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
