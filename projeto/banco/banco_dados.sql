-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.5.8-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para projeto_php
CREATE DATABASE IF NOT EXISTS `projeto_php` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projeto_php`;


-- Copiando estrutura para tabela projeto_php.apresentacao
CREATE TABLE IF NOT EXISTS `apresentacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo1` longtext CHARACTER SET latin1,
  `titulo2` longtext CHARACTER SET latin1,
  `subtitulo` longtext CHARACTER SET latin1,
  `imagem` longtext CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_php.apresentacao: 1 rows
DELETE FROM `apresentacao`;
/*!40000 ALTER TABLE `apresentacao` DISABLE KEYS */;
INSERT INTO `apresentacao` (`id`, `titulo1`, `titulo2`, `subtitulo`, `imagem`) VALUES
	(1, 'PontoCANAL', 'Inscreva-se', 'Canal de vídeos no Youtube com o objetivo de ensinar programação avançada em: PHP, HTML5, MySQL, CSS3, Designer gráfico, dentre outros... Inscreva-se e conheça um pouco mais do mundo da programação!', NULL);
/*!40000 ALTER TABLE `apresentacao` ENABLE KEYS */;


-- Copiando estrutura para tabela projeto_php.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` longtext CHARACTER SET latin1,
  `url` longtext CHARACTER SET latin1,
  `imagem` longtext CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_php.clientes: 0 rows
DELETE FROM `clientes`;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;


-- Copiando estrutura para tabela projeto_php.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` longtext CHARACTER SET latin1,
  `logomarca` longtext CHARACTER SET latin1,
  `fone` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `email` longtext CHARACTER SET latin1,
  `endereco` longtext CHARACTER SET latin1,
  `cidade` longtext CHARACTER SET latin1,
  `cep` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sobre` longtext CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_php.empresa: 1 rows
DELETE FROM `empresa`;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`id`, `nome`, `logomarca`, `fone`, `email`, `endereco`, `cidade`, `cep`, `sobre`) VALUES
	(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;


-- Copiando estrutura para tabela projeto_php.portifolio
CREATE TABLE IF NOT EXISTS `portifolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` longtext CHARACTER SET latin1,
  `url` longtext CHARACTER SET latin1,
  `resumo` longtext CHARACTER SET latin1,
  `conteudo` longtext CHARACTER SET latin1,
  `data` datetime DEFAULT NULL,
  `img_destaque` longtext CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_php.portifolio: 0 rows
DELETE FROM `portifolio`;
/*!40000 ALTER TABLE `portifolio` DISABLE KEYS */;
/*!40000 ALTER TABLE `portifolio` ENABLE KEYS */;


-- Copiando estrutura para tabela projeto_php.sites_relacionados
CREATE TABLE IF NOT EXISTS `sites_relacionados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` longtext CHARACTER SET latin1,
  `link` longtext CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_php.sites_relacionados: 0 rows
DELETE FROM `sites_relacionados`;
/*!40000 ALTER TABLE `sites_relacionados` DISABLE KEYS */;
/*!40000 ALTER TABLE `sites_relacionados` ENABLE KEYS */;


-- Copiando estrutura para tabela projeto_php.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` longtext CHARACTER SET latin1,
  `senha` longtext CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_php.user: 1 rows
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `login`, `senha`) VALUES
	(1, 'user', '123');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;