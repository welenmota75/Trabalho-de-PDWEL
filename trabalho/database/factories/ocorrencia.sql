-- MySQL Script generated by MySQL Workbench
-- Wed May 24 10:47:21 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ocorrencia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ocorrencia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ocorrencia` DEFAULT CHARACTER SET utf8 ;
USE `ocorrencia` ;

-- -----------------------------------------------------
-- Table `ocorrencia`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ocorrencia`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nomeCompleto` VARCHAR(50) NOT NULL,
  `raCpf` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ocorrencia`.`patrimonio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ocorrencia`.`patrimonio` (
  `idpatrimonio` INT NOT NULL AUTO_INCREMENT,
  `numPatrimonio` INT NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  `modelo` VARCHAR(50) NOT NULL,
  `marca` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idpatrimonio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ocorrencia`.`laboratorio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ocorrencia`.`laboratorio` (
  `idlaboratorio` INT NOT NULL AUTO_INCREMENT,
  `sala` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idlaboratorio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ocorrencia`.`dadosOcorrencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ocorrencia`.`dadosOcorrencia` (
  `idocorrencia` INT NOT NULL AUTO_INCREMENT,
  `dataAbertura` DATE NOT NULL,
  `descricaoProblema` VARCHAR(200) NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  `patrimonio_idpatrimonio` INT NOT NULL,
  `laboratorio_idlaboratorio` INT NOT NULL,
  PRIMARY KEY (`idocorrencia`),
  INDEX `fk_dadosOcorrencia_usuario_idx` (`usuario_idusuario` ASC),
  INDEX `fk_dadosOcorrencia_patrimonio1_idx` (`patrimonio_idpatrimonio` ASC),
  INDEX `fk_dadosOcorrencia_laboratorio1_idx` (`laboratorio_idlaboratorio` ASC),
  CONSTRAINT `fk_dadosOcorrencia_usuario`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `ocorrencia`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_dadosOcorrencia_patrimonio1`
    FOREIGN KEY (`patrimonio_idpatrimonio`)
    REFERENCES `ocorrencia`.`patrimonio` (`idpatrimonio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_dadosOcorrencia_laboratorio1`
    FOREIGN KEY (`laboratorio_idlaboratorio`)
    REFERENCES `ocorrencia`.`laboratorio` (`idlaboratorio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ocorrencia`.`statusOcorrencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ocorrencia`.`statusOcorrencia` (
  `idstatus` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `status` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`idstatus`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ocorrencia`.`dadosStatus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ocorrencia`.`dadosStatus` (
  `dadosOcorrencia_idocorrencia` INT NOT NULL,
  `statusOcorrencia_idstatus` INT NOT NULL,
  PRIMARY KEY (`dadosOcorrencia_idocorrencia`, `statusOcorrencia_idstatus`),
  INDEX `fk_dadosOcorrencia_has_statusOcorrencia_statusOcorrencia1_idx` (`statusOcorrencia_idstatus` ASC),
  INDEX `fk_dadosOcorrencia_has_statusOcorrencia_dadosOcorrencia1_idx` (`dadosOcorrencia_idocorrencia` ASC),
  CONSTRAINT `fk_dadosOcorrencia_has_statusOcorrencia_dadosOcorrencia1`
    FOREIGN KEY (`dadosOcorrencia_idocorrencia`)
    REFERENCES `ocorrencia`.`dadosOcorrencia` (`idocorrencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_dadosOcorrencia_has_statusOcorrencia_statusOcorrencia1`
    FOREIGN KEY (`statusOcorrencia_idstatus`)
    REFERENCES `ocorrencia`.`statusOcorrencia` (`idstatus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
