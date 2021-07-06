-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jul-2021 às 00:22
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `post` text NOT NULL,
  `data_publicacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `autor`, `post`, `data_publicacao`) VALUES
(30, 'Folhas de Relva, de Walt Whitman', 'Felipe ', 'Walt Whitman não é “um” e sim “o” poeta norte-americano. Segundo Otto Maria Carpeaux, é um “poeta para poetas”. Dado o uso intensivo do verso livre, que ele “criou” como um método — então novo e rebelde em relação à poesia metrificada —, o poema longo de Whitman deveria ser de fácil acesso. Se fosse russo, seria cantado nas ruas, como se faz com Púchkin. A dificuldade teria a ver mais com o poema longo do que com o poema em si? Pode ser. O que a poesia de Whitman exige é um leitor atento. Harold Bloom o apresenta como “fundador” da poesia americana. “O” poeta. Há algumas traduções no Brasil. As mais citadas são as de Bruno Gambarotto (Hedra), Rodrigo Garcia Lopes (Iluminuras) e Geir Campos (Civilização Brasileira). Há uma da Editora Martin Claret.', '2021-07-06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT '2021-07-01 21:08:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `senha`, `usuario`, `nome`, `data_cadastro`) VALUES
(9, 'c088d9d46733a6fd95ddf555a1bce2ab', 'maria@gmail.com', 'Maria', '2021-07-05 17:52:53');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nome_usuario` (`autor`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `email` (`usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
