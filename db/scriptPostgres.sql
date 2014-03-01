-- TABELAS DO BANCO multidental

--TABLE: estados
CREATE TABLE IF NOT EXISTS estados 
(
    idEstados SERIAL PRIMARY KEY,
    sigla CHAR(2) NOT NULL,
    estado VARCHAR(255) NOT NULL
) WITH (
    OIDS=FALSE
);

--TABLE: pessoa
CREATE TABLE IF NOT EXISTS pessoa
(
    idpessoa serial NOT NULL,
    nome character varying(255) NOT NULL,
    rg character varying(255),
    cpf character varying(14) NOT NULL,
    sexo character varying(255) NOT NULL,
    estadoCivil character varying(255) DEFAULT 'Solteiro(a)',
    dataNascimento DATE NOT NULL,
    naturalidade character varying(255) NOT NULL,
    rua character varying(255) NOT NULL,
    numero integer NOT NULL,
    complemento character varying(255),
    bairro character varying(255) NOT NULL,
    cidade character varying(255) NOT NULL,
    uf character varying(255) NOT NULL,
    pais character varying(255) NOT NULL DEFAULT 'Brasil',
    cep character varying(255),
    telefone character varying(14) NOT NULL,
    celular character varying(14),
    email character varying(255) NOT NULL,
    foto character varying(255),
    ativo smallint NOT NULL DEFAULT 1,
    CONSTRAINT pessoa_pkey PRIMARY KEY (idPessoa)
)
WITH (
    OIDS=FALSE
);

--TABLE: login
CREATE TABLE IF NOT EXISTS login
(
    idlogin serial NOT NULL,
    usuario varchar(255) NOT NULL,
    senha varchar(255) NOT NULL,
    idpessoa integer NOT NULL,
    CONSTRAINT login_pkey PRIMARY KEY (idlogin),
    CONSTRAINT login_idpessoa_fkey FOREIGN KEY (idpessoa)
        REFERENCES pessoa (idpessoa) MATCH SIMPLE
        ON UPDATE NO ACTION ON DELETE NO ACTION
) WITH (
    OIDS=FALSE
);

--TABLE: dentista
CREATE TABLE IF NOT EXISTS dentista
(
    iddentista serial NOT NULL,
    cro integer NOT NULL,
    idlogin integer NOT NULL,
    idpessoa integer NOT NULL,
    CONSTRAINT dentista_pkey PRIMARY KEY (iddentista),
    CONSTRAINT dentista_idlogin_fkey FOREIGN KEY (idlogin)
        REFERENCES login (idlogin) MATCH SIMPLE
        ON UPDATE NO ACTION ON DELETE NO ACTION,
    CONSTRAINT dentista_idpessoa_fkey FOREIGN KEY (idpessoa)
        REFERENCES pessoa (idpessoa) MATCH SIMPLE
        ON UPDATE NO ACTION ON DELETE NO ACTION
) WITH (
    OIDS=FALSE
);

--TABLE: paciente
CREATE TABLE IF NOT EXISTS paciente
(
    idpaciente serial NOT NULL,
    responsavel varchar(255),
    idpessoa integer NOT NULL,
    convenio varchar(255) NOT NULL,
    ativo smallint NOT NULL DEFAULT 1,
    CONSTRAINT paciente_pkey PRIMARY KEY (idpaciente),
    CONSTRAINT paciente_idpessoa_fkey FOREIGN KEY (idpessoa)
        REFERENCES pessoa (idpessoa) MATCH SIMPLE
        ON UPDATE NO ACTION ON DELETE NO ACTION
) WITH (
    OIDS=FALSE
);

--TABLE: funcinario
CREATE TABLE IF NOT EXISTS funcionario
(
    idfuncionario serial NOT NULL,
    funcao varchar(255) NOT NULL,
    salario double precision NOT NULL,
    bonus double precision,
    obs varchar(255),
    idpessoa integer NOT NULL,
    CONSTRAINT funcionario_pkey PRIMARY KEY (idfuncionario),
    CONSTRAINT funcionario_idpessoa_fkey FOREIGN KEY (idpessoa)
        REFERENCES pessoa (idpessoa) MATCH SIMPLE
        ON UPDATE NO ACTION ON DELETE NO ACTION
) WITH (
    OIDS=FALSE
);

--TABLE: anamnese
CREATE TABLE IF NOT EXISTS anamnese
(
    idanamnese serial NOT NULL,
    idpaciente integer NOT NULL,
    histMedica text,
    histFamiliar text,
    histPessoal text,
    histOdontologica text,
    CONSTRAINT anamnese_pkey PRIMARY KEY (idanamnese),
    CONSTRAINT anamnese_idpaciente_fkey FOREIGN KEY (idpaciente)
        REFERENCES paciente (idpaciente) MATCH SIMPLE
        ON UPDATE NO ACTION ON DELETE NO ACTION
) WITH (
    OIDS=FALSE
);

--TABLE: exame
CREATE TABLE IF NOT EXISTS exame
(
    idexame serial NOT NULL,
    idpaciente integer NOT NULL,
    dataExame timestamp DEFAULT CURRENT_TIMESTAMP,
    pessaoArterial varchar(255),
    freqCardiaca varchar(255),
    freqRespiratoria varchar(255),
    padraoEsqueletico varchar(255),
    perfilFacial varchar(255),
    extraBucal varchar(255),
    localizacao varchar(255),
    forma varchar(255),
    tamanho varchar(255),
    cor varchar(255),
    superficie varchar(255),
    consistencia varchar(255),
    insercao varchar(255),
    sinaisSecundarios varchar(255),
    CONSTRAINT exame_pkey PRIMARY KEY (idexame),
    CONSTRAINT exame_idpaciente_fkey FOREIGN KEY (idpaciente)
        REFERENCES paciente (idpaciente) MATCH SIMPLE
        ON UPDATE NO ACTION ON DELETE NO ACTION
) WITH (
    OIDS=FALSE
);

--TABLE: tratamento
CREATE TABLE IF NOT EXISTS tratamento
(
    idtratamento serial NOT NULL,
    idpaciente integer NOT NULL,
    data date NOT NULL,
    procedimento varchar(255) NOT NULL,
    ativo smallint NOT NULL DEFAULT 1,
    CONSTRAINT tratamento_pkey PRIMARY KEY (idtratamento),
    CONSTRAINT tratamento_idpaciente_fkey FOREIGN KEY (idpaciente)
        REFERENCES paciente (idpaciente) MATCH SIMPLE
        ON UPDATE NO ACTION ON DELETE NO ACTION
) WITH (
    OIDS=FALSE
);