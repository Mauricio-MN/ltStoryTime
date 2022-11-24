-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2022 às 02:34
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ltstorytime`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `admin` bit(1) NOT NULL DEFAULT b'0',
  `userban` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `account`
--

INSERT INTO `account` (`id`, `login`, `password`, `email`, `admin`, `userban`) VALUES
(1, 'Mauricio', '07082001', 'mauriciomoraesnantes@gmail.com', b'0', b'0'),
(5, 'Teste', 'teste', 'teste@teste.com', b'0', b'0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `story`
--

CREATE TABLE `story` (
  `title` varchar(100) NOT NULL,
  `bbcodetext` text NOT NULL,
  `autor` int(11) NOT NULL,
  `postdate` date NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `story`
--

INSERT INTO `story` (`title`, `bbcodetext`, `autor`, `postdate`, `id`) VALUES
('Teste', 'PHA+VGVzdGUgbm90aWNlPC9wPg0K', 1, '2022-07-07', 1),
('adaa', 'PHA+dGhqaHRyZ2Vhd2Y8L3A+DQo=', 1, '2022-07-07', 2),
('waaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'PHA+d2FhYWFhYWFhYWFhYWFhYWFhYWFhYTxzdHJvbmc+YWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFmYWdydHNoeXVpZ2sseXV0cmhmd2Vkc1JHQkcgUkdaRyBBRVJHYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWE8c3BhbiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjojZjFjNDBmIj5hYTwvc3Bhbj48L3N0cm9uZz48c3BhbiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjojZjFjNDBmIj5hYWFmYWdydHNoeXVpZ2sseXV0cmhmd2Vkc1JHQkcgUkdaRyBBRVJHYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWZhZ3J0c2h5dWlnayx5dXRyaGZ3ZWRzUkdCRyBSR1pHIEFFUkdhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhZmFncnRzPC9zcGFuPmh5dWlnPHNwYW4gc3R5bGU9ImJhY2tncm91bmQtY29sb3I6IzliNTliNiI+ayx5dTwvc3Bhbj48ZW0+PHNwYW4gc3R5bGU9ImJhY2tncm91bmQtY29sb3I6IzliNTliNiI+dHJoZndlZHNSR0JHIFJHWkcgQUVSR2FhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFmYWdydHNoeXVpZ2sseXV0cmhmd2Vkc1JHQkcgUkdaRyBBRVJHYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWZhZ3J0c2h5dWlnayx5dXRyaGZ3ZWRzUkdCPC9zcGFuPjxzdHJvbmc+PHNwYW4gc3R5bGU9ImJhY2tncm91bmQtY29sb3I6IzliNTliNiI+RyBSR1pHIEFFUkdhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhZmFncnRzaHl1aWdrLHl1dHJoZndlZHNSR0JHIFJHWkcgQUVSR2FhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFmYWdydHNoeXVpZ2sseXV0cmhmd2VkPC9zcGFuPnNSR0JHIFJHWkcgQUVSR2FhYTwvc3Ryb25nPmFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFmYWdydHNoeXVpZ2sseXV0cmhmd2Vkc1JHQkcgUkdaRyBBRVJHYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWZhZ3J0c2h5dWlnayx5dXRyaGZ3ZWRzUkdCRyBSR1pHIEFFUkc8L2VtPmFhYWFhYWFhYWFhYWFhYWFhPHNwYW4gc3R5bGU9ImNvbG9yOiMyN2FlNjAiPmFhYWFhYWFhYWFhZmFncnRzaHl1aWdrLHl1dHJoZndlZHNSR0JHIFJHWkcgQUVSR2FhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFmYWdydHNoeXVpZ2sseXV0cmhmd2Vkc1JHQkcgUkdaRyBBRVJHYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWZhPC9zcGFuPmdydHNoeXVpZ2sseXV0cmhmd2Vkc1JHQkcgUkdaRyBBRVJHPC9wPg0K', 1, '2022-07-07', 3),
('wwqdqdwd', 'PHA+Jm5ic3A7cXdkZHEgd2RxIHF3ZCBxZCZuYnNwOyAmbmJzcDtxd2RxZHdkcXdkcSBxd2Rxd2QgcXdkcXdxZHdxZSBxd2V3cWV3IHdxd3J3ZmV3ZmV3IHdxd3FlJm5ic3A7Jm5ic3A7cXdkZHEgd2RxIHF3ZCBxZCZuYnNwOyAmbmJzcDtxd2RxZHdkcXdkcSBxd2Rxd2QgcXdkcXdxZHdxZSBxd2V3cWV3IHdxd3J3ZmV3ZmV3IHdxd3FlJm5ic3A7cXdkZHEgd2RxIHF3ZCBxZCZuYnNwOyAmbmJzcDtxPHNwYW4gc3R5bGU9ImZvbnQtc2l6ZToxOHB4Ij53ZHFkd2Q8L3NwYW4+PHNwYW4gc3R5bGU9ImJhY2tncm91bmQtY29sb3I6I2YxYzQwZiI+PHNwYW4gc3R5bGU9ImZvbnQtc2l6ZToxOHB4Ij5xd2RxIHF3ZHF3ZCBxd2Rxd3Fkd3FlIHF3ZXdxZXcgd3F3cndmZXdmZXcgd3F3cWUmbmJzcDtxd2RkcSB3ZHEgcXdkIHFkJm5ic3A7ICZuYnNwO3F3ZHFkd2Rxd2RxIHF3ZHF3ZCBxd2Rxd3Fkd3FlIHF3ZXdxZXcgd3F3cndmZXdmZXcgd3F3cWUmbmJzcDtxd2RkcSB3ZHEgcXdkIHFkJm5ic3A7ICZuYnNwO3F3ZHFkd2Rxd2RxIHE8L3NwYW4+d2Rxd2QgcXc8L3NwYW4+ZHF3cTxzcGFuIHN0eWxlPSJjb2xvcjojMjdhZTYwIj5kd3FlIHF3ZXdxZXcgd3F3cndmZXdmZXcgd3F3cWUmbmJzcDtxd2RkcSB3ZHEgcXdkIHFkJm5ic3A7ICZuYnNwO3F3ZHFkd2Rxd2RxIHF3ZHF3ZCBxd2Rxd3Fkd3FlIHF3ZXdxZXcgd3F3cndmZXdmZXcgd3F3cWUmbmJzcDtxd2RkcSB3ZHEgcXdkIHFkJm5ic3A7ICZuYnNwO3F3ZHFkd2Rxd2RxIHF3ZHF3ZCBxd2Rxd3Fkd3FlIHF3ZXdxZXcgd3F3cndmZXdmZXcgd3F3cWUmbmJzcDtxd2RkcSB3ZHEgcXdkIHFkJm5ic3A7ICZuYnNwO3F3ZHFkd2Rxd2RxIHF3ZHF3ZCBxd2Rxd3Fkd3FlIHF3ZXdxZXcgd3F3cndmZXdmZXcgd3F3cWUmbmJzcDtxd2RkcSB3ZHEgcXdkIHFkJm5ic3A7ICZuYnNwO3F3ZHFkd2Rxd2RxIHF3ZHF3ZCBxd2Rxd3Fkd3FlIHF3ZXdxZXcgd3F3cndmZXdmZXc8L3NwYW4+IHdxd3FlJm5ic3A7cXdkZHEgd2RxIHF3ZCBxZCZuYnNwOyAmbmJzcDtxd2RxZHdkcXdkcSBxd2Rxd2QgcXdkcXdxZHdxZSBxd2V3cWV3IHdxd3J3ZmV3ZmV3IHdxd3FlJm5ic3A7cXdkZHEgd2RxIHF3ZCBxZCZuYnNwOyAmbmJzcDtxd2RxZHdkcXdkcSBxd2Rxd2QgcXdkcXdxZHdxZSBxd2V3cWV3IHdxd3J3ZmV3ZmV3IHdxd3FlJm5ic3A7cXdkZHEgd2RxIHF3ZCBxZCZuYnNwOyAmbmJzcDtxd2RxZHdkcXdkcSBxd2Rxd2QgcXdkcXdxZHdxZSBxd2V3cWV3IHdxd3J3ZmV3ZmV3IHdxd3FlJm5ic3A7cXdkZHEgd2RxIHF3ZCBxZCZuYnNwOyAmbmJzcDtxd2RxZHdkcXdkcSBxd2Rxd2QgcXdkcXdxZHdxZSBxd2V3cWV3IHdxd3J3ZmV3ZmV3IHdxd3FlPC9wPg0K', 1, '2022-07-07', 4),
('TEstead asd', 'PHA+YXdkYXdkPC9wPg0KDQo8cD5hd2Rkd2Fkd2Fkd2Fkd2RhZ2h0eWo4N3U2eXRld2RjcTwvcD4NCg0KPHA+cXIzdHk1NHRoNSA4IHRiZ3VyZWJoZ2hnYXVleWdmYmFvIGZ1YXcgZ3VmZyB3ZWZ3IGV3dWZ5Z3cgZndnZiBlZ2ZlIHdlZmV3eWZnd3UgZmZ5d2UgdVlXRkdXIFlHIFc8L3A+DQo=', 1, '2022-07-08', 5),
('tete ç a í lín', 'PHA+YXNmZGJnaDwvcD4NCg==', 1, '2022-07-08', 6),
('Trava Língua', '', 1, '2022-07-08', 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
