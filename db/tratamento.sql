-- phpMyAdmin SQL Dump
-- version 4.0.7
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 29-Mar-2014 às 16:43
-- Versão do servidor: 5.6.15
-- versão do PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `multidental`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tratamento`
--

CREATE TABLE IF NOT EXISTS `tratamento` (
  `idTratamento` int(11) NOT NULL AUTO_INCREMENT,
  `idPaciente` int(11) NOT NULL,
  `data` date NOT NULL,
  `procedimento` varchar(255) NOT NULL,
  `valor` double NOT NULL,
  `orcamentoAprovado` varchar(3) DEFAULT 'Não',
  `DtAprovaOrcamento` datetime DEFAULT NULL COMMENT 'Data de aprovação do orçamento',
  `formaPagamento` tinyint(4) DEFAULT '0',
  `parcelamento` int(11) DEFAULT '1',
  `realizado` varchar(45) DEFAULT 'Não',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `DtCadastro` datetime DEFAULT NULL,
  `pago` int(11) DEFAULT '0',
  PRIMARY KEY (`idTratamento`),
  KEY `fk_tratamento_paciente1_idx` (`idPaciente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tratamento`
--

INSERT INTO `tratamento` (`idTratamento`, `idPaciente`, `data`, `procedimento`, `valor`, `orcamentoAprovado`, `DtAprovaOrcamento`, `formaPagamento`, `parcelamento`, `realizado`, `status`, `DtCadastro`, `pago`) VALUES
(1, 8, '2014-03-25', 'Consulta Inicial', 100, 'Não', '0000-00-00 00:00:00', 0, 1, '0', 0, '2014-03-29 14:39:12', 0),
(2, 8, '2014-03-31', 'Consulta Inicial', 150, 'Não', NULL, 0, 1, '0', 0, NULL, 0),
(3, 8, '2014-03-29', 'Consulta Inicial', 100, 'Sim', NULL, 0, 1, 'Não', 1, '2014-03-29 14:41:42', 0),
(4, 8, '2014-03-31', 'Limpeza', 150, 'Sim', NULL, 0, 1, 'Não', 1, '2014-03-29 14:41:51', 0),
(5, 8, '2014-03-31', 'Restauração', 120, 'Sim', NULL, 0, 1, 'Não', 1, '2014-03-29 16:31:48', 0);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tratamento`
--
ALTER TABLE `tratamento`
  ADD CONSTRAINT `fk_tratamento_paciente1` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
