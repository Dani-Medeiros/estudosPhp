-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.21 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para escola_teste
CREATE DATABASE IF NOT EXISTS `escola_teste` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `escola_teste`;

-- Copiando estrutura para tabela escola_teste.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT ' id do aluno, chave primária.',
  `nome` varchar(50) NOT NULL DEFAULT '0' COMMENT 'nome do aluno',
  `email` varchar(1024) DEFAULT NULL COMMENT 'e-mail do aluno',
  `telefone` varchar(1024) DEFAULT NULL COMMENT 'telefone do aluno',
  `data_nasc` date DEFAULT NULL COMMENT 'data de nascimento do aluno',
  `matricula` int(10) DEFAULT NULL COMMENT 'matricula do aluno',
  `turma` varchar(10) DEFAULT NULL COMMENT 'turma do aluno',
  `turno` varchar(10) NOT NULL COMMENT 'exemplo: manhã, tarde, noite.',
  `data_cad` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data de cadastro do aluno',
  `data_exc` datetime DEFAULT NULL COMMENT 'data de exclusão do aluno',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COMMENT='cadastro de alunos no sistema';

-- Copiando dados para a tabela escola_teste.alunos: ~13 rows (aproximadamente)
INSERT INTO `alunos` (`id`, `nome`, `email`, `telefone`, `data_nasc`, `matricula`, `turma`, `turno`, `data_cad`, `data_exc`) VALUES
	(1, 'Dani', 'dani@teste.com', '21111115555', '1995-05-10', 2544897, '3009', '', '2022-10-06 17:54:08', NULL),
	(4, 'Dylan2', 'dylanmedeirosdev@gmail.com', '21974735803', '2017-09-20', NULL, NULL, 'manha', '2022-10-07 11:59:43', NULL),
	(6, 'Teste', 'usuario@teste.com.br', '21999999999', '2000-01-28', NULL, NULL, 'tarde', '2022-10-07 12:13:07', NULL),
	(7, 'Daniele', 'danielemedeiros9@gmail.com', '(21) 97473-5803', '1995-08-28', NULL, NULL, 'noite', '2022-10-10 15:05:50', NULL),
	(8, 'Daniele', 'danielemedeiros9@gmail.com', '(21) 97473-5803', '1995-08-28', NULL, NULL, 'noite', '2022-10-10 15:15:11', NULL),
	(25, 'asdsf', 'asdas@asda.br', '21999988888', '2000-10-21', NULL, NULL, 'noite', '2022-10-10 16:19:52', NULL),
	(26, 'asdsf', 'asdas@asda.br', '21999988888', '2000-10-21', NULL, NULL, 'noite', '2022-10-10 16:20:07', NULL),
	(27, 'asdsf', 'asdas@asda.br', '21999988888', '2000-10-21', NULL, NULL, 'noite', '2022-10-10 16:48:26', NULL),
	(28, 'aaaaaa', 'foi@all.com', '3198879-6589', '2000-10-04', NULL, NULL, 'noite', '2022-10-10 16:49:18', NULL),
	(32, 'bbbb', 'bbb@aaa.ccc', '2134566789', '1990-08-10', NULL, NULL, 'manha', '2022-10-10 18:04:44', NULL),
	(33, 'Fernando', 'fernando@gmail.com', '2158741679794', '1995-06-14', NULL, NULL, 'tarde', '2022-10-13 17:08:48', NULL),
	(34, 'lyf', 'hihiio@r', '878457978', '9445-07-05', NULL, NULL, 'noite', '2022-10-20 16:25:51', NULL),
	(35, 'rita', 'rita@gmail.com', '544160167974613', '1988-06-12', NULL, NULL, '', '2022-10-24 15:25:18', NULL);

-- Copiando estrutura para tabela escola_teste.materias
CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id da materia',
  `materia` varchar(50) NOT NULL COMMENT 'nome da materia',
  `professor` varchar(50) NOT NULL COMMENT 'professor',
  `data_cad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data do cadastro',
  `data_exc` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data da exclusao',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela escola_teste.materias: ~7 rows (aproximadamente)
INSERT INTO `materias` (`id`, `materia`, `professor`, `data_cad`, `data_exc`) VALUES
	(9, 'Filosofia', '304', '2022-10-26 16:32:43', '2022-10-26 16:32:43'),
	(11, 'PortuguÃªs', '246', '2022-10-26 16:38:09', '2022-10-26 16:38:09'),
	(12, 'MatemÃ¡tica', '315', '2022-10-26 16:40:34', '2022-10-26 16:40:34'),
	(13, 'HistÃ³ria', '262', '2022-10-26 16:40:57', '2022-10-26 16:40:57'),
	(14, 'QuÃ­mica', '316', '2022-10-26 16:41:43', '2022-10-26 16:41:43'),
	(15, 'Biologia', '4', '2022-10-26 18:23:48', '2022-10-26 18:23:48'),
	(16, 'Sociologia', '262', '2022-10-26 18:34:10', '2022-10-26 18:34:10');

-- Copiando estrutura para tabela escola_teste.professores
CREATE TABLE IF NOT EXISTS `professores` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id do professor',
  `nome` varchar(50) NOT NULL DEFAULT '0' COMMENT 'nome do professor',
  `email` varchar(1024) DEFAULT '0' COMMENT 'e-mail do professor',
  `telefone` varchar(1024) DEFAULT NULL COMMENT 'telefone do professor',
  `cpf` varchar(30) NOT NULL DEFAULT '0' COMMENT 'cpf do professor',
  `data_nasc` date DEFAULT NULL COMMENT 'data de nascimento do professor',
  `turno` varchar(10) NOT NULL DEFAULT '0' COMMENT 'exemplo: manhã, tarde, noite.',
  `data_cad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data de cadastro do professor',
  `data_exc` timestamp NULL DEFAULT NULL COMMENT 'data de exclusão do cadastro do professor',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=325 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela escola_teste.professores: ~58 rows (aproximadamente)
INSERT INTO `professores` (`id`, `nome`, `email`, `telefone`, `cpf`, `data_nasc`, `turno`, `data_cad`, `data_exc`) VALUES
	(4, 'Daniele', 'danielemedeiros9@gmail.com', '00000000000', '78945612321', '1950-01-01', 'noite', '2022-10-07 19:27:37', NULL),
	(18, 'joa quim', 'jo@quim.com', '988884444', '77788899944', '2010-10-10', 'manha', '2022-10-10 11:29:55', NULL),
	(235, 'Medeiros', 'medeiros@gmail.com', '21955554444', '33322211121', '1996-10-08', 'noite', '2022-10-10 17:33:01', NULL),
	(242, 'Fessor', 'fessor@escola.com', '21345678900', '45632178956', '1986-06-12', 'noite', '2022-10-11 15:37:30', NULL),
	(246, 'Laura', 'laurinha@gmail.com', '31955554444', '01472856963', '2007-05-15', 'manha', '2022-10-11 18:55:32', NULL),
	(253, 'Gisele', 'gisele@gmail.com', '21977753444', '74561234789', '2001-05-03', 'tarde', '2022-10-11 19:03:45', NULL),
	(260, 'teste', 'teste@gmail.com', '21955554444', '12345698723', '1998-06-25', 'manha', '2022-10-13 14:17:15', NULL),
	(261, 'teste', 'teste@gmail.com', '21955554444', '12345698723', '1998-06-25', 'manha', '2022-10-13 14:57:05', NULL),
	(262, 'Benjamin', 'benjamin@gmail.com', '21345678900', '5485120649', '2005-09-28', 'tarde', '2022-10-13 14:59:54', NULL),
	(265, 'Nome', 'nome@teste.com', '2199998888', '12345678911', '1996-03-28', 'tarde', '2022-10-18 18:06:40', NULL),
	(266, 'Nome', 'nome@teste.com', '2199998888', '12345678911', '1996-03-28', 'tarde', '2022-10-18 18:09:44', NULL),
	(267, 'Teste', 'usuario@teste.com.br', '', '12345678978', NULL, 'manha', '2022-10-18 20:43:41', NULL),
	(268, 'Teste', 'usuario@teste.com.br', '', '12345678978', NULL, 'manha', '2022-10-18 20:46:19', NULL),
	(269, 'Teste', 'usuario@teste.com.br', '', '12345678978', NULL, 'manha', '2022-10-18 20:49:19', NULL),
	(270, 'Carrye', 'carryeaestranha@gmail.com', '11980524444', '56478932101', '1999-02-15', 'noite', '2022-10-19 14:30:03', NULL),
	(271, 'Carrye2', 'carryeaestranha@gmail.com', '11980524444', '56478932101', '1999-02-15', 'noite', '2022-10-19 14:42:35', NULL),
	(272, 'teste 222', 'ca@gmail.com', '1198052444', '56478932101', '1999-02-15', 'noite', '2022-10-19 14:43:08', NULL),
	(273, 'lu', 'lu@cas.com', '87963545698', '1', '1988-05-30', 'manha', '2022-10-19 14:45:56', NULL),
	(274, 'nome', 'email', 'celular', 'cpf', '1996-10-21', 'noite', '2022-10-19 14:47:41', NULL),
	(275, 's', 'a@a', '12', '32', '1990-09-25', 'manha', '2022-10-19 14:51:52', NULL),
	(276, 's', 'a@a', '12', '32', '1990-09-25', 'manha', '2022-10-19 14:52:18', NULL),
	(277, 'dani', 'dani@teste.com', '2155554444', '12332112321', '1995-08-28', 'manha', '2022-10-19 14:52:55', NULL),
	(278, 'dani', 'dani@teste.com', '2155554444', '12332112321', '1995-08-28', 'manha', '2022-10-19 14:53:15', NULL),
	(279, 'dani', 'dani@teste.com', '2155554444', '12332112321', '1995-08-28', 'manha', '2022-10-19 14:53:15', NULL),
	(280, 'Joao', 'joao@gmail.com', '19555554444', '96325874112', '1989-06-14', 'tarde', '2022-10-19 18:26:43', NULL),
	(281, 'Joao', 'joao@gmail.com', '19555554444', '96325874112', '1989-06-14', 'tarde', '2022-10-19 18:35:56', NULL),
	(282, 'Joao', 'joao@gmail.com', '19555554444', '96325874112', '1989-06-14', '', '2022-10-19 18:50:26', NULL),
	(283, 'b.kgk;l', 'nilhih@54', '99999999999999', '8888888888888888', '1989-05-28', '', '2022-10-19 19:54:03', NULL),
	(284, 'olaf', 'olaf@gmail.com', '05457892125', '7946161654613', '2018-01-01', '', '2022-10-19 19:55:17', NULL),
	(285, 'olaf', 'olaf@gmail.com', '05457892125', '7946161654613', '2018-01-01', '', '2022-10-19 19:56:44', NULL),
	(286, 'elza', 'elza@frozen.com', '554796265979', '898953530552', '2014-02-15', 'manha', '2022-10-19 19:58:25', NULL),
	(287, 'Anna', 'anna@frozen.com', '21479131646', '487613124979', '2015-08-24', 'manha', '2022-10-19 20:01:17', NULL),
	(299, 'bulma', 'bulma@capsulecorp', '41616952664', '544313216563', '1995-08-14', 'manha', '2022-10-19 20:47:27', NULL),
	(300, 'videl', 'videl@gmail.com', '4514568411', '4455544552222', '1997-07-25', 'manha', '2022-10-19 20:55:33', NULL),
	(301, 'videl', 'videl@gmail.com', '4514568411', '4455544552222', '1997-07-25', 'manha', '2022-10-19 20:57:44', NULL),
	(302, 'Teste', 'usuario@teste.com.br', '21974735803', '12345678911', '1999-02-05', 'manha', '2022-10-19 21:00:10', NULL),
	(303, 'Julia', 'julia@gmail.com', '22988884444', '11122233322', '1985-04-22', 'manha', '2022-10-20 11:43:33', NULL),
	(304, 'Julia', 'julia@gmail.com', '22988884444', '11122233322', '1985-04-22', 'manha', '2022-10-20 11:43:33', NULL),
	(305, 'Julia', 'julia@gmail.com', '22988884444', '11122233322', '1985-04-22', 'manha', '2022-10-20 12:39:08', NULL),
	(306, 'Julia', 'julia@gmail.com', '22988884444', '11122233322', '1985-04-22', 'manha', '2022-10-20 12:39:08', NULL),
	(307, 'oi', 'oi@gmail.com', '21944444444', '14794102555', '1988-06-21', 'manha', '2022-10-20 14:07:35', NULL),
	(308, 'oi', 'oi@gmail.com', '21944444444', '14794102555', '1988-06-21', 'manha', '2022-10-20 14:17:17', NULL),
	(309, 'oi', 'oi@gmail.com', '21944444444', '14794102555', '1988-06-21', 'manha', '2022-10-20 14:17:17', NULL),
	(310, 'oi', 'oi@gmail.com', '21944444444', '14794102555', '1988-06-21', 'manha', '2022-10-20 14:21:43', NULL),
	(311, 'oi', 'oi@gmail.com', '21944444444', '14794102555', '1988-06-21', 'manha', '2022-10-20 14:21:43', NULL),
	(312, 'nome', 'email@gmail.com', '21555554444', '12365478921', '1996-02-01', 'manha', '2022-10-20 14:39:28', NULL),
	(313, 'nome', 'email@gmail.com', '21555554444', '12365478921', '1996-02-01', 'manha', '2022-10-20 14:39:28', NULL),
	(314, 'Davi', 'davi@gmail.com', '2199998888', '12345698732', '2000-06-04', 'manha', '2022-10-20 15:03:53', NULL),
	(315, 'Kira', 'kira@gmail.com', '25459998752', '32165498712', '2001-08-19', 'manha', '2022-10-20 17:43:15', NULL),
	(316, 'Goku', 'goku@gmail.com', '23544578965', '1144778523699', '1999-04-11', 'manha', '2022-10-20 18:07:01', NULL),
	(317, 'testando', 'testando@bla', '2222222222222', '1111111111111111', '1933-12-25', 'manha', '2022-10-20 18:08:34', NULL),
	(318, 'testando', 'testando@bla', '2222222222222', '1111111111111111', '1933-12-25', 'manha', '2022-10-20 18:13:10', NULL),
	(319, 'lyf', 'hihiio@r', '878457978', '', '9445-07-05', '', '2022-10-20 19:25:51', NULL),
	(320, 'rita', 'rita@gmail.com', '544160167974613', '12453185544', '1988-06-12', 'tarde', '2022-10-24 18:25:18', NULL),
	(321, 'Daniele', 'danielemedeiros9@gmail.com', '2199995555', '78945612321', '1950-01-01', 'manha', '2022-10-31 18:04:29', NULL),
	(322, 'Daniele', 'danielemedeiros9@gmail.com', '2199994444', '78945612321', '1998-01-01', 'manha', '2022-10-31 18:05:01', NULL),
	(323, 'Teste14', 'teste14@gmail.com', '211414141414', '14444111114', '1944-04-14', 'manha', '2022-10-31 18:12:22', NULL),
	(324, 'luky joaquim', 'suporte@bamboo.com', '789621', '11122233345', '1993-07-04', 'manha', '2022-10-31 18:37:53', NULL);

-- Copiando estrutura para tabela escola_teste.turmas
CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id das turmas',
  `turma` varchar(11) NOT NULL DEFAULT '' COMMENT 'turmas',
  `turno` varchar(11) NOT NULL DEFAULT '' COMMENT 'turno das turmas',
  `nome_materia` varchar(50) NOT NULL COMMENT 'materia por turma',
  `data_cad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data de cadastro das turmas',
  `data_exc` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data de exclusão das turmas',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela escola_teste.turmas: ~12 rows (aproximadamente)
INSERT INTO `turmas` (`id`, `turma`, `turno`, `nome_materia`, `data_cad`, `data_exc`) VALUES
	(1, '1003', 'tarde', '6', '2022-10-26 15:00:41', '2022-10-26 15:00:41'),
	(2, '1005', 'manha', '7', '2022-10-26 15:05:59', '2022-10-26 15:05:59'),
	(3, '1005', 'noite', '9', '2022-10-26 16:33:30', '2022-10-26 16:33:30'),
	(4, '1011', 'manha', '13', '2022-10-26 16:42:05', '2022-10-26 16:42:05'),
	(5, '1005', 'manha', '9', '2022-10-26 17:06:13', '2022-10-26 17:06:13'),
	(6, '1011', 'manha', '13', '2022-10-26 17:12:59', '2022-10-26 17:12:59'),
	(7, '2001', 'manha', '14', '2022-10-26 17:18:12', '2022-10-26 17:18:12'),
	(8, '2005', 'noite', '13', '2022-10-26 17:30:35', '2022-10-26 17:30:35'),
	(9, '1011', 'manha', '9', '2022-10-26 17:46:14', '2022-10-26 17:46:14'),
	(10, '10112', 'manha', '9', '2022-10-26 18:13:14', '2022-10-26 18:13:14'),
	(11, '1005', 'tarde', '15', '2022-10-26 18:29:07', '2022-10-26 18:29:07'),
	(12, '2001', 'noite', '12', '2022-10-26 18:30:03', '2022-10-26 18:30:03');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
