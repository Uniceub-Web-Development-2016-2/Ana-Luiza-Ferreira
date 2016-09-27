SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `mydb` ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`tb_client`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`tb_client` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`tb_client` (
  `id_client` INT NOT NULL AUTO_INCREMENT ,
  `name_client` VARCHAR(100) NOT NULL ,
  `cpf_client` VARCHAR(100) NOT NULL ,
  `password_client` VARCHAR(100) NOT NULL ,
  `email_client` VARCHAR(150) NOT NULL ,
  `phonenumber_client` VARCHAR(100) NULL ,
  PRIMARY KEY (`id_client`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tb_user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`tb_user` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`tb_user` (
  `id_user` INT NOT NULL AUTO_INCREMENT ,
  `name_user` VARCHAR(100) NOT NULL ,
  `cpf_user` VARCHAR(100) NOT NULL ,
  `password_user` VARCHAR(100) NOT NULL ,
  `email_user` VARCHAR(150) NOT NULL ,
  PRIMARY KEY (`id_user`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tb_clothes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`tb_clothes` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`tb_clothes` (
  `id_clothes` INT NOT NULL AUTO_INCREMENT ,
  `cod_client` INT NOT NULL ,
  `datedelivery_clothes` DATE NOT NULL ,
  `datereturn_clothes` DATE NOT NULL ,
  PRIMARY KEY (`id_clothes`) ,
  INDEX `fk_tb_clothes_tb_client_idx` (`cod_client` ASC) ,
  CONSTRAINT `cod_client`
    FOREIGN KEY (`cod_client` )
    REFERENCES `mydb`.`tb_client` (`id_client` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tb_service`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`tb_service` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`tb_service` (
  `id_service` INT NOT NULL AUTO_INCREMENT ,
  `cost_service` DECIMAL(3,3) NOT NULL ,
  `start_service` DATE NOT NULL ,
  `finish_service` DATE NOT NULL ,
  `cod_clothes` INT NOT NULL ,
  PRIMARY KEY (`id_service`) ,
  INDEX `cod_clothes` (`cod_clothes` ASC) ,
  CONSTRAINT `cod_clothes`
    FOREIGN KEY (`cod_clothes` )
    REFERENCES `mydb`.`tb_clothes` (`id_clothes` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
