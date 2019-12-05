-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2019 às 02:49
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id_agendamento` int(11) NOT NULL,
  `data_horario` datetime NOT NULL,
  `id_pessoa` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`id_agendamento`, `data_horario`, `id_pessoa`, `descricao`) VALUES
(1, '2019-11-27 08:00:00', 5, 'Fazer tal coisa'),
(2, '2019-11-27 09:00:00', NULL, NULL),
(3, '2019-11-27 10:00:00', NULL, NULL),
(4, '2019-11-27 11:00:00', NULL, NULL),
(5, '2019-11-28 08:00:00', NULL, NULL),
(6, '2019-11-28 09:00:00', NULL, NULL),
(7, '2019-11-28 10:00:00', NULL, NULL),
(8, '2019-11-28 11:00:00', NULL, NULL),
(9, '2019-11-29 08:00:00', NULL, NULL),
(10, '2019-11-29 09:00:00', NULL, NULL),
(11, '2019-11-29 10:00:00', NULL, NULL),
(12, '2019-11-29 11:00:00', NULL, NULL),
(13, '2019-11-30 08:00:00', NULL, NULL),
(14, '2019-11-30 09:00:00', NULL, NULL),
(15, '2019-11-30 10:00:00', 5, 'Preciso instalar um ar na minha casa!'),
(16, '2019-11-30 11:00:00', NULL, NULL),
(17, '2019-11-26 08:00:00', NULL, NULL),
(18, '2019-11-26 09:00:00', NULL, NULL),
(19, '2019-11-26 10:00:00', NULL, NULL),
(20, '2019-11-26 11:00:00', NULL, NULL),
(21, '2019-11-25 08:00:00', NULL, NULL),
(22, '2019-11-25 09:00:00', NULL, NULL),
(23, '2019-11-25 10:00:00', NULL, NULL),
(24, '2019-11-25 11:00:00', NULL, NULL),
(25, '2019-11-24 08:00:00', NULL, NULL),
(26, '2019-11-24 09:00:00', NULL, NULL),
(27, '2019-11-24 10:00:00', 2, 'Lavar moto!'),
(28, '2019-11-24 11:00:00', NULL, NULL),
(29, '2019-12-01 08:00:00', NULL, NULL),
(30, '2019-12-01 09:00:00', NULL, NULL),
(31, '2019-12-01 10:00:00', 2, 'Limpar a casa'),
(32, '2019-12-01 11:00:00', NULL, NULL),
(33, '2019-12-03 08:00:00', NULL, NULL),
(34, '2019-12-03 09:00:00', NULL, NULL),
(35, '2019-12-03 10:00:00', NULL, NULL),
(36, '2019-12-03 11:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `id_estado`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `cep`) VALUES
(1, 24, 'Rua Amazonas', '489', 'Apto 103', 'Areias', 'Camboriú', '88345036'),
(2, 24, 'Rua Santo Silva', '1514', 'Casa', 'São Francisco de Assis', 'Camboriú', '88340000'),
(3, 24, 'Rua Alagoas', '456', 'Casa', 'São João', 'Camboriú', '88235222'),
(4, 24, 'Rua São Paulo', '475', 'Apto 104', 'São Pedro', 'Camboriú', '47885255'),
(5, 24, 'Rua do Caio', '555', 'Casa', 'São Cristovão', 'Camboriú', '75654123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sigla` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `nome`, `sigla`) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amapá', 'AP'),
(4, 'Amazonas', 'AM'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Mato Grosso', 'MT'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Minas Gerais', 'MG'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Paraná', 'PR'),
(17, 'Pernambuco', 'PE'),
(18, 'Piauí', 'PI'),
(19, 'Rio de Janeiro', 'RJ'),
(20, 'Rio Grande do Norte', 'RN'),
(21, 'Rio Grande do Sul', 'RS'),
(22, 'Rondônia', 'RO'),
(23, 'Roraima', 'RR'),
(24, 'Santa Catarina', 'SC'),
(25, 'São Paulo', 'SP'),
(26, 'Sergipe', 'SE'),
(27, 'Tocantins', 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario_disponivel`
--

CREATE TABLE `horario_disponivel` (
  `id_horario` int(11) NOT NULL,
  `horario` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `horario_disponivel`
--

INSERT INTO `horario_disponivel` (`id_horario`, `horario`) VALUES
(1, '08:00:00'),
(2, '09:00:00'),
(3, '10:00:00'),
(4, '11:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_login`, `usuario`, `senha`) VALUES
(1, 'admin', 'c93ccd78b2076528346216b3b2f701e6'),
(2, 'emicsp', '00e8a5732dada447f3e62e6f161124cb'),
(3, 'joao', '1a3a13d15f43486905394367e46e0fa7'),
(4, 'igor', '01b01ae5838923468e1e48cec74bb3bf'),
(5, 'caio', 'd5732a10e48d3121e0c6f1e2b7327c0c');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `descricao`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'Funcionário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `data_nasc` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `id_perfil`, `id_endereco`, `id_login`, `nome`, `sobrenome`, `data_nasc`, `email`, `cpf`, `telefone`) VALUES
(1, 1, 1, 1, 'Matheus', 'Damian Pereira', '1999-03-19', 'user@gmail.com', '11111111111', '47999141982'),
(2, 2, 2, 2, 'Emily Caroline', 'da Silva Padilha', '1999-07-11', 'emicsp@gmail.com', '12345678911', '4745642584'),
(3, 2, 3, 3, 'João ', 'Silva', '2000-11-11', 'teste@teste.com', '12345678911', '5545654666'),
(4, 2, 4, 4, 'Igor', 'Castro', '2001-07-07', 'igor@gmail.com', '01025236444', '478224500'),
(5, 2, 5, 5, 'Caio', 'Pereira', '1986-05-07', 'caio@gmail.com', '01020230344', '4765213656');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id_agendamento`,`data_horario`),
  ADD KEY `fk_agendamento_pessoa` (`id_pessoa`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `fk_endereco_estado` (`id_estado`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Índices para tabela `horario_disponivel`
--
ALTER TABLE `horario_disponivel`
  ADD PRIMARY KEY (`id_horario`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`),
  ADD KEY `fk_pessoa_perfil` (`id_perfil`),
  ADD KEY `fk_pessoa_endereco` (`id_endereco`),
  ADD KEY `fk_pessoa_login` (`id_login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id_agendamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `horario_disponivel`
--
ALTER TABLE `horario_disponivel`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_agendamento_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_endereco_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Limitadores para a tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD CONSTRAINT `fk_pessoa_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`id_endereco`),
  ADD CONSTRAINT `fk_pessoa_login` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`),
  ADD CONSTRAINT `fk_pessoa_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id_perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
