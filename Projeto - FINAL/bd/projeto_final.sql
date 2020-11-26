-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 26-Nov-2020 às 00:45
-- Versão do servidor: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_final`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao`
--

CREATE TABLE `formacao` (
  `id_formacao` int(11) NOT NULL,
  `grau_escolaridade` int(11) NOT NULL,
  `id_grau` int(11) NOT NULL,
  `nome_curso` varchar(150) NOT NULL,
  `instituicao` varchar(100) NOT NULL,
  `duracao` varchar(25) NOT NULL,
  `id_duracao` int(11) NOT NULL,
  `dt_inicio` date NOT NULL,
  `dt_conclusao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formacao`
--

INSERT INTO `formacao` (`id_formacao`, `grau_escolaridade`, `id_grau`, `nome_curso`, `instituicao`, `duracao`, `id_duracao`, `dt_inicio`, `dt_conclusao`) VALUES
(1, 6, 0, 'Ensino médio - Completo', 'Escola Estadual Senador Vergueiro', '3', 0, '2010-01-04', '2013-12-31'),
(2, 15, 0, 'Curso de inglês avançado e conversação', 'SENAC', '3', 0, '2010-01-04', '2013-11-22'),
(3, 8, 0, 'Bacharel em engenharia da computação', 'Universidade de Sorocaba', '3', 0, '2016-01-04', '2021-12-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao_duracao`
--

CREATE TABLE `formacao_duracao` (
  `id_duracao` int(11) NOT NULL,
  `duracao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formacao_duracao`
--

INSERT INTO `formacao_duracao` (`id_duracao`, `duracao`) VALUES
(1, 'Curta (até 40 horas)'),
(2, 'Média (acima de 40 horas, até 360 horas)'),
(3, 'Longa (acima de 360 horas)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao_grau`
--

CREATE TABLE `formacao_grau` (
  `id_grau` int(11) NOT NULL,
  `grau_escolaridade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formacao_grau`
--

INSERT INTO `formacao_grau` (`id_grau`, `grau_escolaridade`) VALUES
(1, 'Ensino Fundamental (1o. grau) - Interrompido'),
(2, 'Ensino Fundamental (1o. grau) - Cursando'),
(3, 'Ensino Fundamental (1o. grau) - Completo'),
(4, 'Ensino Médio (2o. grau) - Interrompido'),
(5, 'Ensino Médio (2o. grau) - Cursando'),
(6, 'Ensino Médio (2o. grau) - Completo'),
(7, 'Formação superior - Interrompida'),
(8, 'Formação superior - Cursando'),
(9, 'Formação superior - Completa'),
(10, 'Pós graduação - Especialização'),
(11, 'Pós graduação - Mestrado'),
(12, 'Pós graduação - Doutorado'),
(13, 'Curso profissionalizante - Interrompido'),
(14, 'Curso profissionalizante - Cursando'),
(15, 'Curso profissionalizante - Concluído');

-- --------------------------------------------------------

--
-- Estrutura da tabela `habilidades`
--

CREATE TABLE `habilidades` (
  `id_competencias` int(11) NOT NULL,
  `competencias` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `habilidades`
--

INSERT INTO `habilidades` (`id_competencias`, `competencias`) VALUES
(1, 'proatividade, liderança, organização, gerenciamento de tempo, criatividade, receptividade em feedback, facilidade de aprendizagem, pacote office completo, redes sociais, inglês avançado, adobe photoshop, programação e design de transmissões ao vivo.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id_historico` int(11) NOT NULL,
  `instituicao` varchar(50) NOT NULL,
  `funcao` varchar(50) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `situacao` varchar(100) NOT NULL,
  `dt_admissao` date NOT NULL,
  `dt_demissao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id_historico`, `instituicao`, `funcao`, `descricao`, `situacao`, `dt_admissao`, `dt_demissao`) VALUES
(1, 'Universidade de Sorocaba', 'Voluntária', 'Trabalho voluntário de organização, programação, design e transmissão da live do evento do III Encontro de Biomedicina - 2020.', '2', '2020-07-29', '2020-11-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_situacao`
--

CREATE TABLE `historico_situacao` (
  `id_situacao` int(11) NOT NULL,
  `situacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `historico_situacao`
--

INSERT INTO `historico_situacao` (`id_situacao`, `situacao`) VALUES
(1, 'Em execução do cargo'),
(2, 'Função já concluída');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `id_sobre` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `id_identificacao` int(11) NOT NULL,
  `identificacao` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `estado_civil` varchar(11) NOT NULL,
  `id_estadocivil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`id_sobre`, `nome`, `id_identificacao`, `identificacao`, `telefone`, `email`, `cidade`, `estado`, `id_estado`, `estado_civil`, `id_estadocivil`) VALUES
(1, 'Milena Munhoz de Barros', 0, '1', '(15)91234-1234', 'barrosmilenaa@gmail.com', 'Sorocaba', '25', 0, '1', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre_estado`
--

CREATE TABLE `sobre_estado` (
  `id_estado` int(11) NOT NULL,
  `estados` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre_estado`
--

INSERT INTO `sobre_estado` (`id_estado`, `estados`) VALUES
(1, 'Acre'),
(2, 'Alagoas'),
(3, 'Amapá'),
(4, 'Amazonas'),
(5, 'Bahia'),
(6, 'Ceará'),
(7, 'Distrito Federal'),
(8, 'Espírito Santo'),
(9, 'Goiás'),
(10, 'Maranhão'),
(11, 'Mato Grosso'),
(12, 'Mato Grosso do Sul'),
(13, 'Minas Gerais'),
(14, 'Pará'),
(15, 'Paraíba'),
(16, 'Paraná'),
(17, 'Pernambuco'),
(18, 'Piauí'),
(19, 'Rio de Janeiro'),
(20, 'Rio Grande do Norte'),
(21, 'Rio Grande do Sul'),
(22, 'Rondônia'),
(23, 'Roraima'),
(24, 'Santa Catarina'),
(25, 'São Paulo'),
(26, 'Sergipe'),
(27, 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre_estadocivil`
--

CREATE TABLE `sobre_estadocivil` (
  `id_estadocivil` int(11) NOT NULL,
  `estado_civil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre_estadocivil`
--

INSERT INTO `sobre_estadocivil` (`id_estadocivil`, `estado_civil`) VALUES
(1, 'Solteiro'),
(2, 'Casado'),
(3, 'Divorciado'),
(4, 'Separado'),
(5, 'Viúvo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre_identificacao`
--

CREATE TABLE `sobre_identificacao` (
  `id_identificacao` int(11) NOT NULL,
  `identificacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre_identificacao`
--

INSERT INTO `sobre_identificacao` (`id_identificacao`, `identificacao`) VALUES
(1, 'Feminino'),
(2, 'Masculino'),
(3, 'Transgênero'),
(4, 'Transexual'),
(5, 'Não-binário'),
(6, 'Outro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `usuario`, `senha`) VALUES
(1, 'milena', '1b52a583020088fad8cc06fd0e67910e'),
(2, 'professor', '3f9cd3c7b11eb1bae99dddb3d05da3c5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formacao`
--
ALTER TABLE `formacao`
  ADD PRIMARY KEY (`id_formacao`);

--
-- Indexes for table `formacao_duracao`
--
ALTER TABLE `formacao_duracao`
  ADD PRIMARY KEY (`id_duracao`);

--
-- Indexes for table `formacao_grau`
--
ALTER TABLE `formacao_grau`
  ADD PRIMARY KEY (`id_grau`);

--
-- Indexes for table `habilidades`
--
ALTER TABLE `habilidades`
  ADD PRIMARY KEY (`id_competencias`);

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id_historico`);

--
-- Indexes for table `historico_situacao`
--
ALTER TABLE `historico_situacao`
  ADD PRIMARY KEY (`id_situacao`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`id_sobre`);

--
-- Indexes for table `sobre_estado`
--
ALTER TABLE `sobre_estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indexes for table `sobre_estadocivil`
--
ALTER TABLE `sobre_estadocivil`
  ADD PRIMARY KEY (`id_estadocivil`);

--
-- Indexes for table `sobre_identificacao`
--
ALTER TABLE `sobre_identificacao`
  ADD PRIMARY KEY (`id_identificacao`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formacao`
--
ALTER TABLE `formacao`
  MODIFY `id_formacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `formacao_duracao`
--
ALTER TABLE `formacao_duracao`
  MODIFY `id_duracao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `formacao_grau`
--
ALTER TABLE `formacao_grau`
  MODIFY `id_grau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `habilidades`
--
ALTER TABLE `habilidades`
  MODIFY `id_competencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `historico`
--
ALTER TABLE `historico`
  MODIFY `id_historico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `historico_situacao`
--
ALTER TABLE `historico_situacao`
  MODIFY `id_situacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id_sobre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sobre_estado`
--
ALTER TABLE `sobre_estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sobre_estadocivil`
--
ALTER TABLE `sobre_estadocivil`
  MODIFY `id_estadocivil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sobre_identificacao`
--
ALTER TABLE `sobre_identificacao`
  MODIFY `id_identificacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
