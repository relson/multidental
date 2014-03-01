-- CRIANDO TABELAS

CREATE TABLE IF NOT EXISTS Login (
  idLogin INT NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  idPessoa INT NOT NULL,
  PRIMARY KEY(idLogin),
  INDEX Login_FKIndex1(idPessoa)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Pessoa (
  idPessoa INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  rg VARCHAR(255) NULL,
  cpf VARCHAR(14) NOT NULL,
  sexo VARCHAR(255) NOT NULL,
  estadoCivil VARCHAR(255) NULL DEFAULT 'Solteiro(a)',
  dataNascimento DATE NOT NULL,
  naturalidade VARCHAR(255) NOT NULL,
  rua VARCHAR(255) NOT NULL,
  numero INT NOT NULL,
  complemento VARCHAR(255) NULL,
  bairro VARCHAR(255) NOT NULL,
  cidade VARCHAR(255) NOT NULL,
  uf VARCHAR(255) NOT NULL,
  pais VARCHAR(255) NOT NULL DEFAULT 'Brasil',
  cep VARCHAR(255) NULL,
  telefone VARCHAR(14) NOT NULL,
  celular VARCHAR(14) NULL,
  email VARCHAR(255) NOT NULL,
  foto VARCHAR(255) NULL,
  ativo tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY(idPessoa)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Dentista (
  idDentista INT NOT NULL AUTO_INCREMENT,
  cro INT NOT NULL,
  idLogin INT NOT NULL,
  idPessoa INT NOT NULL,
  PRIMARY KEY(idDentista),
  INDEX Dentista_FKIndex1(idPessoa),
  INDEX Dentista_FKIndex4(idLogin)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Paciente (
  idPaciente INT NOT NULL AUTO_INCREMENT,
  responsavel VARCHAR(255) NULL,
  idPessoa INT NOT NULL,
  convenio VARCHAR(255) NOT NULL,
  status tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY(idPaciente),
  INDEX Paciente_FKIndex1(idPessoa)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Funcionario (
  idFuncionario INT NOT NULL AUTO_INCREMENT,
  funcao VARCHAR(255) NOT NULL,
  salario DOUBLE NOT NULL,
  bonus DOUBLE NULL,
  obs VARCHAR(255) NULL,
  idPessoa INT NOT NULL,
  PRIMARY KEY(idFuncionario),
  INDEX Funcionario_FKIndex4(idPessoa)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Anamnese (
  idAnamnese INT NOT NULL AUTO_INCREMENT,
  idPaciente INT NOT NULL,
  queixa TEXT NULL,
  histDoenca TEXT NULL,
  histMedica TEXT NULL,
  histFamiliar TEXT NULL,
  histPessoal TEXT NULL,
  histOdontologica TEXT NULL,
  PRIMARY KEY(idAnamnese),
  INDEX Anamnese_FKIndex1(idPaciente)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Estados (
  idEstados INT NOT NULL AUTO_INCREMENT,
  sigla CHAR(2) NOT NULL,
  estado VARCHAR(255) NOT NULL,
  PRIMARY KEY(idEstados)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Exames (
  idExames INT NOT NULL AUTO_INCREMENT,
  idPaciente INT NOT NULL,
  pressaoArterial VARCHAR(255) NULL,
  freqCardiaca VARCHAR(255) NULL,
  freqRespiratoria VARCHAR(255) NULL,
  padraoEsqueletico VARCHAR(255) NULL,
  perfilFacial VARCHAR(255) NULL,
  extraBucal TEXT NULL,
  localizacao VARCHAR(255) NULL,
  forma VARCHAR(255) NULL,
  tamanho VARCHAR(255) NULL,
  cor VARCHAR(255) NULL,
  superficie VARCHAR(255) NULL,
  consistencia VARCHAR(255) NULL,
  insercao VARCHAR(255) NULL,
  sinaisSecundarios VARCHAR(255) NULL,
  PRIMARY KEY(idExames),
  INDEX Anamnese_FKIndex1(idPaciente)
) 

CREATE TABLE IF NOT EXISTS `mydb`.`Exames` (
  `idExames` INT NOT NULL AUTO_INCREMENT,
  `pressaoArterial` VARCHAR(255) NULL,
  `freqCardiaca` VARCHAR(255) NULL,
  `freqRespiratoria` VARCHAR(255) NULL,
  `padraoEsqueletico` VARCHAR(255) NULL,
  `perfilFacial` VARCHAR(255) NULL,
  `extraBucal` TEXT NULL,
  `localizacao` VARCHAR(255) NULL,
  `forma` VARCHAR(255) NULL,
  `tamanho` VARCHAR(255) NULL,
  `cor` VARCHAR(255) NULL,
  `superficie` VARCHAR(255) NULL,
  `consistencia` VARCHAR(255) NULL,
  `insercao` VARCHAR(255) NULL,
  `sinaisSecundarios` VARCHAR(255) NULL,
  `Paciente_idPaciente` INT NOT NULL,
  `Paciente_Pessoa_idPessoa` INT NOT NULL,
  PRIMARY KEY (`idExames`, `Paciente_idPaciente`, `Paciente_Pessoa_idPessoa`),
  INDEX `fk_Exames_Paciente1_idx` (`Paciente_idPaciente` ASC, `Paciente_Pessoa_idPessoa` ASC),
  CONSTRAINT `fk_Exames_Paciente1`
    FOREIGN KEY (`Paciente_idPaciente` , `Paciente_Pessoa_idPessoa`)
    REFERENCES `mydb`.`Paciente` (`idPaciente` , `Pessoa_idPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = '		'
DEFAULT CHARACTER SET = utf8
