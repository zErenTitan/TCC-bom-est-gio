-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Maio-2020 às 04:17
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdvagas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area_interesse`
--

CREATE TABLE `area_interesse` (
  `cod_area_interesse` int(11) NOT NULL,
  `nome_area_interesse` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `area_usuario`
--

CREATE TABLE `area_usuario` (
  `cod_area_usuario` int(11) NOT NULL,
  `cod_area_interesse` int(11) DEFAULT NULL,
  `cod_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `area_vaga`
--

CREATE TABLE `area_vaga` (
  `cod_area_vaga` int(11) NOT NULL,
  `cod_vaga` int(11) DEFAULT NULL,
  `cod_area` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `emp_codigo` int(11) NOT NULL,
  `emp_nome` varchar(35) DEFAULT NULL,
  `emp_cnpj` varchar(25) DEFAULT NULL,
  `emp_cidade` varchar(40) DEFAULT NULL,
  `emp_email` varchar(40) DEFAULT NULL,
  `emp_responsavel` varchar(50) DEFAULT NULL,
  `emp_endereco` varchar(100) DEFAULT NULL,
  `emp_cep` varchar(15) DEFAULT NULL,
  `login_empresa` varchar(25) DEFAULT NULL,
  `senha_empresa` varchar(20) DEFAULT NULL,
  `data_atual` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`emp_codigo`, `emp_nome`, `emp_cnpj`, `emp_cidade`, `emp_email`, `emp_responsavel`, `emp_endereco`, `emp_cep`, `login_empresa`, `senha_empresa`, `data_atual`) VALUES
(1, 'TR', '12.312.312./3123.123-22', 'Jaboticacal-SP', 'eduardo@emp.com.br', 'Eduado', 'av. cap, alberto Mendes Júnior, 447', '14887008', 'teste', 'teste', '2/5/2020'),
(2, 'Riot', '1221432423432', 'Ribeirão Preto', 'riot@gmail.com', 'José Antonio', 'Av. Pintos ,123', '14887008', 'riot', 'riot', '9/5/2020');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(50) DEFAULT NULL,
  `cpf_usuario` varchar(15) DEFAULT NULL,
  `data_nasci` varchar(12) DEFAULT NULL,
  `cidade_usuario` varchar(20) DEFAULT NULL,
  `data_cadastro` varchar(10) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `login_usuario` varchar(25) DEFAULT NULL,
  `senha_usuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome_usuario`, `cpf_usuario`, `data_nasci`, `cidade_usuario`, `data_cadastro`, `telefone`, `email`, `login_usuario`, `senha_usuario`) VALUES
(6, 'Eduardo', '37800368866', ' 18/03/2003', 'Jaboticabal-SP', '27/4/2020', '1632031907', 'eduardo18330@gmail.com', 'teste', 'teste'),
(8, 'Guilherme', '123654789', ' 09/11/2001', 'Valinhos-SP', '9/5/2020', '1699146784', 'gfmi@hotmail.com', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_vaga`
--

CREATE TABLE `usuario_vaga` (
  `usuario_vaga` int(11) NOT NULL,
  `cod_usuario` int(11) DEFAULT NULL,
  `cod_vaga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `cod_vaga` int(11) NOT NULL,
  `nom_vaga` varchar(40) NOT NULL,
  `emp_codigo` int(11) DEFAULT NULL,
  `cidade_vaga` varchar(30) DEFAULT NULL,
  `salario_vaga` varchar(10) DEFAULT NULL,
  `cargo_vaga` varchar(25) DEFAULT NULL,
  `requisitos` varchar(100) DEFAULT NULL,
  `carga_hr_vaga` varchar(10) DEFAULT NULL,
  `descricao_vaga` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`cod_vaga`, `nom_vaga`, `emp_codigo`, `cidade_vaga`, `salario_vaga`, `cargo_vaga`, `requisitos`, `carga_hr_vaga`, `descricao_vaga`) VALUES
(1, 'Front End UX/UI', 1, 'São Paulo', '5000', 'TI', 'Type script, Devops, Bootstrap, Scrum', '40', 'Atuar na Área de Desenvolvimento çklljiiiiiiiiiiiiiiiiiiiiiiiiieu8i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9'),
(2, 'Android Developer', 1, 'São Paulo', '4000', 'TI', 'React native', '40', 'AtuarnaÁreadeDesenvolvimentoçklljiiiiiiiiiiiiiiiiiiiiiiiiieu8i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i'),
(3, 'Desenvolvedor Full Stack', 1, 'Ribeirão Preto', '4500', 'TI', 'Desenvolver', '40', 'Atuar na Área de desenvolvimentoçklljiiiiiiiiiiiiiiiiiiiiiiiiieu8i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i9i'),
(4, 'yhtjtsdfsd', 1, 'sfgfghsdfgsgsg', '1200', 'sdfsdf', 'sdfsdgsdfghh', '34', 'shgfdhfdhgdfhdfh'),
(5, 'ghfdg', 1, 'dfgfdg', 'dfgdg', 'dfgfdg', 'dfokhfnkjbfknlfdnklfdnkfdnkdfnkdgfkçndbgfnçnkgfdnkç~fdbgkçnl~bfdknç~bfndgznkçfdbkçnl~bgfndkçnlfdbgnç', 'dfgdf', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `area_interesse`
--
ALTER TABLE `area_interesse`
  ADD PRIMARY KEY (`cod_area_interesse`);

--
-- Índices para tabela `area_usuario`
--
ALTER TABLE `area_usuario`
  ADD PRIMARY KEY (`cod_area_usuario`),
  ADD KEY `cod_area_interesse` (`cod_area_interesse`),
  ADD KEY `cod_usuario` (`cod_usuario`);

--
-- Índices para tabela `area_vaga`
--
ALTER TABLE `area_vaga`
  ADD PRIMARY KEY (`cod_area_vaga`),
  ADD KEY `cod_vaga` (`cod_vaga`),
  ADD KEY `cod_area` (`cod_area`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`emp_codigo`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- Índices para tabela `usuario_vaga`
--
ALTER TABLE `usuario_vaga`
  ADD PRIMARY KEY (`usuario_vaga`),
  ADD KEY `cod_usuario` (`cod_usuario`),
  ADD KEY `cod_vaga` (`cod_vaga`);

--
-- Índices para tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`cod_vaga`),
  ADD KEY `emp_codigo` (`emp_codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `area_interesse`
--
ALTER TABLE `area_interesse`
  MODIFY `cod_area_interesse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `area_usuario`
--
ALTER TABLE `area_usuario`
  MODIFY `cod_area_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `area_vaga`
--
ALTER TABLE `area_vaga`
  MODIFY `cod_area_vaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `emp_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario_vaga`
--
ALTER TABLE `usuario_vaga`
  MODIFY `usuario_vaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `cod_vaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `area_usuario`
--
ALTER TABLE `area_usuario`
  ADD CONSTRAINT `area_usuario_ibfk_1` FOREIGN KEY (`cod_area_interesse`) REFERENCES `area_interesse` (`cod_area_interesse`),
  ADD CONSTRAINT `area_usuario_ibfk_2` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

--
-- Limitadores para a tabela `area_vaga`
--
ALTER TABLE `area_vaga`
  ADD CONSTRAINT `area_vaga_ibfk_1` FOREIGN KEY (`cod_vaga`) REFERENCES `vaga` (`cod_vaga`),
  ADD CONSTRAINT `area_vaga_ibfk_2` FOREIGN KEY (`cod_area`) REFERENCES `area_interesse` (`cod_area_interesse`);

--
-- Limitadores para a tabela `usuario_vaga`
--
ALTER TABLE `usuario_vaga`
  ADD CONSTRAINT `usuario_vaga_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`),
  ADD CONSTRAINT `usuario_vaga_ibfk_2` FOREIGN KEY (`cod_vaga`) REFERENCES `vaga` (`cod_vaga`);

--
-- Limitadores para a tabela `vaga`
--
ALTER TABLE `vaga`
  ADD CONSTRAINT `vaga_ibfk_1` FOREIGN KEY (`emp_codigo`) REFERENCES `empresa` (`emp_codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
