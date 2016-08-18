CREATE DATABASE pegasus;


CREATE TABLE `funcionario` (
  `idFuncionario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL,
  `email` VARCHAR(150) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`idFuncionario`))
ENGINE = InnoDB;