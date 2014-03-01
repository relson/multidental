CREATE TABLE IF NOT EXISTS `multidental`.`estados` (
  `idEstados` INT(11) NOT NULL AUTO_INCREMENT,
  `sigla` CHAR(2) NOT NULL,
  `estado` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idEstados`)
) ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;
  
CREATE TABLE IF NOT EXISTS `multidental`.`horarios` (
  `idHorarios` INT(11) NOT NULL AUTO_INCREMENT,
  `hora` VARCHAR(10) NOT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idHorarios`)
) ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `multidental`.`pessoa` (
  `idPessoa` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `rg` VARCHAR(255) NULL DEFAULT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `sexo` VARCHAR(255) NOT NULL,
  `estadoCivil` VARCHAR(255) NULL DEFAULT 'Solteiro(a)',
  `dataNascimento` DATE NOT NULL,
  `naturalidade` VARCHAR(255) NOT NULL,
  `rua` VARCHAR(255) NOT NULL,
  `numero` INT(11) NOT NULL,
  `complemento` VARCHAR(255) NULL DEFAULT NULL,
  `bairro` VARCHAR(255) NOT NULL,
  `cidade` VARCHAR(255) NOT NULL,
  `uf` VARCHAR(255) NOT NULL,
  `pais` VARCHAR(255) NOT NULL DEFAULT 'Brasil',
  `cep` VARCHAR(255) NULL DEFAULT NULL,
  `telefone` VARCHAR(14) NOT NULL,
  `celular` VARCHAR(14) NULL DEFAULT NULL,
  `email` VARCHAR(255) NOT NULL,
  `foto` VARCHAR(255) NULL DEFAULT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idPessoa`)
) ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `multidental`.`login` (
  `idLogin` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `tipoUsuario` TINYINT NOT NULL,
  `idPessoa` INT(11) NOT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idLogin`),
  INDEX `fk_login_pessoa1_idx` (`idPessoa` ASC),
  CONSTRAINT `fk_login_pessoa1`
    FOREIGN KEY (`idPessoa`)
    REFERENCES `multidental`.`pessoa` (`idPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `multidental`.`dentista` (
  `idDentista` INT(11) NOT NULL AUTO_INCREMENT,
  `cro` INT(11) NOT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT '1',
  `idPessoa` INT(11) NOT NULL,
  PRIMARY KEY (`idDentista`),
  INDEX `fk_dentista_pessoa1_idx` (`idPessoa` ASC),
  CONSTRAINT `fk_dentista_pessoa1`
    FOREIGN KEY (`idPessoa`)
    REFERENCES `multidental`.`pessoa` (`idPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `multidental`.`paciente` (
  `idPaciente` INT(11) NOT NULL AUTO_INCREMENT,
  `responsavel` VARCHAR(255) NULL DEFAULT NULL,
  `convenio` VARCHAR(255) NOT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT '1',
  `idPessoa` INT(11) NOT NULL,
  PRIMARY KEY (`idPaciente`),
  INDEX `fk_paciente_pessoa1_idx` (`idPessoa` ASC),
  CONSTRAINT `fk_paciente_pessoa1`
    FOREIGN KEY (`idPessoa`)
    REFERENCES `multidental`.`pessoa` (`idPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `multidental`.`funcionario` (
  `idFuncionario` INT(11) NOT NULL AUTO_INCREMENT,
  `funcao` VARCHAR(255) NOT NULL,
  `salario` DOUBLE NOT NULL,
  `bonus` DOUBLE NULL DEFAULT NULL,
  `obs` VARCHAR(255) NULL DEFAULT NULL,
  `idPessoa` INT(11) NOT NULL,
  PRIMARY KEY (`idFuncionario`),
  INDEX `fk_funcionario_pessoa1_idx` (`idPessoa` ASC),
  CONSTRAINT `fk_funcionario_pessoa1`
    FOREIGN KEY (`idPessoa`)
    REFERENCES `multidental`.`pessoa` (`idPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `multidental`.`anamnese` (
  `idAnamnese` INT(11) NOT NULL AUTO_INCREMENT,
  `idPaciente` INT(11) NOT NULL,
  `histMedica` TEXT NULL DEFAULT NULL,
  `histFamiliar` TEXT NULL DEFAULT NULL,
  `histPessoal` TEXT NULL DEFAULT NULL,
  `histOdontologica` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`idAnamnese`),
  INDEX `fk_anamnese_paciente1_idx` (`idPaciente` ASC),
  CONSTRAINT `fk_anamnese_paciente1`
    FOREIGN KEY (`idPaciente`)
    REFERENCES `multidental`.`paciente` (`idPaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `multidental`.`exames` (
  `idExames` INT(11) NOT NULL AUTO_INCREMENT,
  `idPaciente` INT(11) NOT NULL,
  `dataExame` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `pressaoArterial` VARCHAR(255) NULL DEFAULT NULL,
  `freqCardiaca` VARCHAR(255) NULL DEFAULT NULL,
  `freqRespiratoria` VARCHAR(255) NULL DEFAULT NULL,
  `padraoEsqueletico` VARCHAR(255) NULL,
  `perfilFacial` VARCHAR(255) NULL DEFAULT NULL,
  `extraBucal` TEXT NULL DEFAULT NULL,
  `localizacao` VARCHAR(255) NULL DEFAULT NULL,
  `forma` VARCHAR(255) NULL DEFAULT NULL,
  `tamanho` VARCHAR(255) NULL DEFAULT NULL,
  `cor` VARCHAR(255) NULL DEFAULT NULL,
  `superficie` VARCHAR(255) NULL DEFAULT NULL,
  `consistencia` VARCHAR(255) NULL DEFAULT NULL,
  `insercao` VARCHAR(255) NULL DEFAULT NULL,
  `sinaisSecundarios` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`idExames`),
  INDEX `fk_exames_paciente1_idx` (`idPaciente` ASC),
  CONSTRAINT `fk_exames_paciente1`
    FOREIGN KEY (`idPaciente`)
    REFERENCES `multidental`.`paciente` (`idPaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `multidental`.`tratamento` (
  `idTratamento` INT NOT NULL AUTO_INCREMENT,
  `idPaciente` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `procedimento` VARCHAR(255) NOT NULL,
  `valor` DOUBLE NOT NULL,
  `orcamentoAprovado` TINYINT NOT NULL DEFAULT 0,
  `formaPagamento` TINYINT NOT NULL,
  `parcelamento` INT NULL DEFAULT 1,
  `status` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idTratamento`),
  INDEX `fk_tratamento_paciente1_idx` (`idPaciente` ASC),
  CONSTRAINT `fk_tratamento_paciente1`
    FOREIGN KEY (`idPaciente`)
    REFERENCES `multidental`.`paciente` (`idPaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `multidental`.`agenda` (
  `idagenda` INT NOT NULL AUTO_INCREMENT,
  `hora` VARCHAR(45) NOT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idagenda`)
) ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `multidental`.`agendamento` (
  `idagendamento` INT NOT NULL AUTO_INCREMENT,
  `idPaciente` INT(11) NOT NULL,
  `tipoagendamento` VARCHAR(255) NOT NULL,
  `data` DATE NOT NULL,
  `hora` VARCHAR(45) NOT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idagendamento`),
  INDEX `fk_agendamento_paciente1_idx` (`idPaciente` ASC),
  CONSTRAINT `fk_agendamento_paciente1`
    FOREIGN KEY (`idPaciente`)
    REFERENCES `multidental`.`paciente` (`idPaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;