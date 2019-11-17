CREATE TABLE pessoa(
    id_pessoa INT AUTO_INCREMENT NOT NULL,
    id_perfil INT NOT NULL,
    id_endereco INT NOT NULL,
    id_login INT NOT NULL,
    nome VARCHAR(40) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    data_nasc DATE NOT NULL,
    email VARCHAR(150) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    PRIMARY KEY(id_pessoa)
);

CREATE TABLE login(
    id_login INT AUTO_INCREMENT NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    PRIMARY KEY(id_login)
);

CREATE TABLE perfil(
    id_perfil INT AUTO_INCREMENT NOT NULL,
    descricao VARCHAR(100) NOT NULL,
    PRIMARY KEY(id_perfil)
);

CREATE TABLE telefone(
    id_telefone INT AUTO_INCREMENT NOT NULL,
    id_pessoa INT NOT NULL,
    numero VARCHAR(11) NOT NULL,
    PRIMARY KEY(id_telefone)
);

CREATE TABLE estado(
    id_estado INT AUTO_INCREMENT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    sigla VARCHAR(2) NOT NULL,
    PRIMARY KEY(id_estado)
);

CREATE TABLE endereco(
    id_endereco INT AUTO_INCREMENT NOT NULL,
    id_estado INT NOT NULL,
    rua VARCHAR(255) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    complemento VARCHAR(100) NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    cep VARCHAR(8) NOT NULL,
    PRIMARY KEY(id_endereco)
);

CREATE TABLE horario_disponivel(
    id_horario INT AUTO_INCREMENT NOT NULL,
    horario TIMESTAMP NOT NULL,
    PRIMARY KEY(id_horario)
);

CREATE TABLE agendamento(
    id_agendamento INT AUTO_INCREMENT NOT NULL,
    id_horario INT NOT NULL,
    id_pessoa INT NOT NULL,
    descricao VARCHAR(500) NOT NULL,
    PRIMARY KEY(id_agendamento)
);

ALTER TABLE pessoa ADD CONSTRAINT fk_pessoa_perfil FOREIGN KEY (id_perfil) REFERENCES perfil(id_perfil);
ALTER TABLE pessoa ADD CONSTRAINT fk_pessoa_endereco FOREIGN KEY (id_endereco) REFERENCES endereco(id_endereco);
ALTER TABLE pessoa ADD CONSTRAINT fk_pessoa_login FOREIGN KEY (id_login) REFERENCES login(id_login);
ALTER TABLE telefone ADD CONSTRAINT fk_telefone_pessoa FOREIGN KEY (id_pessoa) REFERENCES pessoa(id_pessoa);
ALTER TABLE endereco ADD CONSTRAINT fk_endereco_estado FOREIGN KEY (id_estado) REFERENCES estado(id_estado);
ALTER TABLE agendamento ADD CONSTRAINT fk_agendamento_horario FOREIGN KEY (id_horario) REFERENCES horario_disponivel(id_horario);
ALTER TABLE agendamento ADD CONSTRAINT fk_agendamento_pessoa FOREIGN KEY (id_pessoa) REFERENCES pessoa(id_pessoa);