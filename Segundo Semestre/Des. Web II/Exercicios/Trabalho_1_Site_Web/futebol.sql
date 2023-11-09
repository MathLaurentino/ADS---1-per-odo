-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2023 às 20:55
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `futebol`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `perna_dominante` int(1) NOT NULL,
  `fk_posicao` int(11) NOT NULL,
  `fk_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `jogador`
--

INSERT INTO `jogador` (`id`, `nome`, `idade`, `perna_dominante`, `fk_posicao`, `fk_time`) VALUES
(11, 'aa', 18, 1, 5, 3),
(12, 'Matheus', 18, 1, 7, 6),
(13, 'Matheus Laurentino Alves Barbosa Vieira', 18, 2, 7, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `posicao`
--

CREATE TABLE `posicao` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `posicao`
--

INSERT INTO `posicao` (`id`, `nome`, `descricao`) VALUES
(1, 'Goleiro', 'Responsável por defender o gol.'),
(2, 'Zagueiro', 'Jogador responsável por proteger a área próxima ao gol.'),
(3, 'Lateral', 'Jogador que atua pelas laterais do campo, tanto na defesa quanto no ataque.'),
(4, 'Volante', 'Jogador responsável por proteger a defesa e distribuir o jogo no meio-campo.'),
(5, 'Meio-Campista', 'Jogador que atua na região central do campo e participa tanto da defesa quanto do ataque.'),
(6, 'Atacante', 'Jogador responsável por marcar gols e criar jogadas de ataque.'),
(7, 'Ponta', 'Jogador que atua nas laterais do campo, com ênfase no ataque e na criação de jogadas.'),
(8, 'Centroavante', 'Jogador que atua na linha de frente e é o principal responsável por marcar gols.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `time`
--

CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `divisao` varchar(25) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `time`
--

INSERT INTO `time` (`id`, `nome`, `divisao`, `estado`) VALUES
(1, 'ABC', '2', 'RN'),
(2, 'Flamengo', 'Série A', 'Rio de Janeiro'),
(3, 'Palmeiras', 'Série A', 'São Paulo'),
(4, 'Grêmio', 'Série A', 'Rio Grande do Sul'),
(5, 'Internacional', 'Série A', 'Rio Grande do Sul'),
(6, 'Santos', 'Série A', 'São Paulo'),
(7, 'Corinthians', 'Série A', 'São Paulo'),
(8, 'São Paulo', 'Série A', 'São Paulo'),
(9, 'Fluminense', 'Série A', 'Rio de Janeiro'),
(10, 'Botafogo', 'Série B', 'Rio de Janeiro'),
(11, 'Vasco', 'Série B', 'Rio de Janeiro'),
(12, 'Atlético Mineiro', 'Série A', 'Minas Gerais'),
(13, 'Cruzeiro', 'Série B', 'Minas Gerais'),
(14, 'Bahia', 'Série A', 'Bahia'),
(15, 'Vitória', 'Série B', 'Bahia'),
(16, 'Sport', 'Série B', 'Pernambuco');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jogador_time` (`fk_time`),
  ADD KEY `fk_jogador_posicao` (`fk_posicao`);

--
-- Índices para tabela `posicao`
--
ALTER TABLE `posicao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogador`
--
ALTER TABLE `jogador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `posicao`
--
ALTER TABLE `posicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `jogador`
--
ALTER TABLE `jogador`
  ADD CONSTRAINT `fk_jogador_posicao` FOREIGN KEY (`fk_posicao`) REFERENCES `posicao` (`id`),
  ADD CONSTRAINT `fk_jogador_time` FOREIGN KEY (`fk_time`) REFERENCES `time` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
