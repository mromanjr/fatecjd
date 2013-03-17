-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Nov 04, 2012 as 01:06 PM
-- Versão do Servidor: 5.1.53
-- Versão do PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `fatecjd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `ra` varchar(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `alunos`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `noticia` longtext NOT NULL,
  `destaque` bit(1) NOT NULL,
  `imgdestaque` varchar(80) DEFAULT NULL,
  `descr` varchar(150) NOT NULL,
  `dt_noticia` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_noticia`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `noticia`, `destaque`, `imgdestaque`, `descr`, `dt_noticia`, `id_usuario`) VALUES
(2, 'as asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas as', 'asssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assasasssssssssssssssssss assas', b'0', 'asasasas', 'as asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas asas as', '2012-10-04', 0),
(6, 'zx', 'zx', b'0', 'zx', 'zx', '2012-10-27', 0),
(9, 'Destaque 1', 'sdsdsd\r\nsd\r\nsd\r\nsd\r\nsd\r\nsd\r\nsd\r\nsd\r\nsds\r\nd', b'1', 'destaque1.jpg', 'Descricao breve', '2012-10-24', 0),
(10, 'Outro destaque', 'asuhasauhs', b'1', 'destaque3.jpg', 'Descricao breve outro destaque', '2012-10-27', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `conteudo` longtext NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id_pagina`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `paginas`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `id_professor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  PRIMARY KEY (`id_professor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `professores`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `nivel_id` (`nivel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `senha`, `nivel`) VALUES
(3, 'aluno', 'aluno', 'alunos'),
(4, 'professor', 'professor', 'professores'),
(5, 'admin', 'admin', 'admin');
