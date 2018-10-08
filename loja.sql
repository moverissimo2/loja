-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 08/10/2018 às 09:39
-- Versão do servidor: 10.0.36-MariaDB
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `religiosos_loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `titulo_categoria` varchar(200) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `titulo_categoria`, `ativo`) VALUES
(1, 'Chá aromatico', 1),
(2, 'Chá Preto', 1),
(3, 'Chá branco', 1),
(4, 'Chá de Frutas', 1),
(6, 'Chá verde', 1),
(7, 'Chá Rooibos', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nm_cliente` varchar(200) NOT NULL,
  `email_cliente` varchar(200) NOT NULL,
  `telefone_cliente` varchar(40) NOT NULL,
  `enderecoEntrega_cliente` varchar(200) NOT NULL,
  `cidadeEntrega_cliente` varchar(200) NOT NULL,
  `BairroEntrega_cliente` varchar(200) NOT NULL,
  `cepEntrega_cliente` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nm_cliente`, `email_cliente`, `telefone_cliente`, `enderecoEntrega_cliente`, `cidadeEntrega_cliente`, `BairroEntrega_cliente`, `cepEntrega_cliente`) VALUES
(1, 'José da Silva', 'jose@teste.com', '(11) 98321-2122', 'rua 10', 'Santos', 'Macuco', '11435-021'),
(2, 'Maria da Silva', 'marai.silva@gmail.com', '(11) 32121-3212', 'rua 9', 'Guarulhos', 'Centro', '08932-212');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `total_pedido` float NOT NULL,
  `dt_pedido` date NOT NULL,
  `total_frete` float NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `total_pedido`, `dt_pedido`, `total_frete`, `status`) VALUES
(1, 1, 450, '2018-10-01', 21, 'Entregue'),
(2, 2, 800, '2018-10-03', 21, 'Aguardando pagamento'),
(3, 0, 67, '2018-09-12', 45, 'Aguardando pagamento'),
(4, 2, 67, '2018-10-04', 21, 'Aguardando pagamento');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_produtos`
--

CREATE TABLE `pedido_produtos` (
  `id_pedido_produto` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `vl_produto` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `pedido_produtos`
--

INSERT INTO `pedido_produtos` (`id_pedido_produto`, `id_pedido`, `id_produto`, `vl_produto`) VALUES
(1, 1, 1, 30),
(2, 1, 2, 30);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nm_produto` varchar(200) NOT NULL,
  `vl_produto` float(11,0) NOT NULL,
  `foto` text NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nm_produto`, `vl_produto`, `foto`, `id_categoria`, `ativo`, `descricao`) VALUES
(1, 'Chá Verde', 20, '244.jpg', 2, 1, 'Chá verde- frequentemente refere-se aos não oxidados. As folhas recém apanhadas são cozidas no vapor imediatamente pa...'),
(2, 'Chá Branco China Pai Mu Tam', 40, '251.jpg', 3, 1, 'Chá Branco China Pai Mu Tam'),
(3, 'Chá Preto', 12, '272.jpg', 2, 1, 'Chá preto-Passa pelo processo maior, que inclui secar, oxidar e queimar. O chá preto é tambem conhecido como o unico chá oxidado. Isto se refere ao processo de oxidação que produz uma tonalidade vermelha escura e um cheiro doce das folhas do chá preto. '),
(4, 'Chá Aromático', 25, '252.jpg', 2, 1, 'Chás aromaticos podem ser considerados como a sobremesa de chás - deliciosos servidos quente ou frio.'),
(5, 'Chá Branco', 26, '272.jpg', 3, 1, 'Chá branco auxilia a digestão');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Administrador', 'admin', 'admin2018@');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices de tabela `pedido_produtos`
--
ALTER TABLE `pedido_produtos`
  ADD PRIMARY KEY (`id_pedido_produto`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pedido_produtos`
--
ALTER TABLE `pedido_produtos`
  MODIFY `id_pedido_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
