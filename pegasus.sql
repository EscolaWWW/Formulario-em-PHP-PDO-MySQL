CREATE TABLE `funcionario` (
  `idFuncionario` INT NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NULL,
  `email` varchar(150) NULL,
  `senha` varchar(45) NULL,
  `data_cadastro` datetime NULL,
  PRIMARY KEY (`idFuncionario`)
) ENGINE=InnoDB;
