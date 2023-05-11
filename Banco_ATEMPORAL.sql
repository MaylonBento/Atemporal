DROP DATABASE Atemporal;
CREATE DATABASE Atemporal DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE Atemporal;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Abr-2023 às 13:31
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atemporal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_anuncio`
--

DROP TABLE IF EXISTS `tb_anuncio`;
CREATE TABLE IF NOT EXISTS `tb_anuncio` (
  `ID_ANUNCIO` int NOT NULL AUTO_INCREMENT,
  `NOME_ANUNCIO` varchar(80) NOT NULL,
  `CATEGORIA_ANUNCIO` varchar(13) NOT NULL,
  `DESC_ANUNCIO` text NOT NULL,
  `VALOR_VENDA_ANUNCIO` decimal(8,2) NOT NULL,
  `ID_VENDEDOR` int NOT NULL,
  `STATUS_ANUNCIO` varchar(40) DEFAULT NULL,
  `QTD_ANUNCIO` int DEFAULT NULL,
  `IMAGEM_ANUNCIO` varchar(85) NOT NULL,
  `DTA_ANUNCIO` date NOT NULL,
  PRIMARY KEY (`ID_ANUNCIO`),
  KEY `ID_VENDEDOR` (`ID_VENDEDOR`)
);

--
-- Extraindo dados da tabela `tb_anuncio`
--

INSERT INTO `tb_anuncio` (`ID_ANUNCIO`, `NOME_ANUNCIO`, `CATEGORIA_ANUNCIO`, `DESC_ANUNCIO`, `VALOR_VENDA_ANUNCIO`, `ID_VENDEDOR`, `STATUS_ANUNCIO`, `QTD_ANUNCIO`, `IMAGEM_ANUNCIO`, `DTA_ANUNCIO`) VALUES
(1, 'Relógio Antigo', 'utensilios', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto odit incidunt sequi excepturi quam quaerat earum repellat repellendus magni adipisci quas cumque delectus dicta accusantium porro, saepe dolorum ducimus ipsum.', '300.50', 1, NULL, NULL, '../media/fotoAnuncio/ce70472e0c228ef7d9b8983d6b7d1cb7', '2023-04-10'),
(2, 'Telefone Discador', 'eletronicos', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto odit incidunt sequi excepturi quam quaerat earum repellat repellendus magni adipisci quas cumque delectus dicta accusantium porro, saepe dolorum ducimus ipsum.', '100.00', 1, NULL, NULL, '../media/fotoAnuncio/33236bc9a205b4bdc9f5687d9a78a88c', '2023-04-10'),
(3, 'Televisão', 'eletronicos', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto odit incidunt sequi excepturi quam quaerat earum repellat repellendus magni adipisci quas cumque delectus dicta accusantium porro, saepe dolorum ducimus ipsum.', '250.00', 1, NULL, NULL, '../media/fotoAnuncio/881502c7655ea251c21d05125e2585a3', '2023-04-10'),
(4, 'Cédulas Brasileiras Antigas Cem Mil Cruzeiros Juscelino', 'colecionaveis', 'CÉDULAS BRASILEIRAS ANTIGAS DE JUSCELINO KUBITSCHEK\r\n1 - Cédula (01) de 100 Cruzados - Juscelino Kubitschek - No. Se. A1680034504A ... (1986).\r\n2 - Cédulas (02) de 100000 Cem Mil Cruzeiros - Juscelino Kubitschek - Nos. Se. A0687028751A, e, A2592076430A ... (1985) .\r\n3 - Cédula (01) de 100000 Cem Mil Cruzeiros (Carimbo de 100 Cruzados) - Juscelino Kubitschek - No. Se. A6092021833A ... (1986) .', '100.00', 2, NULL, NULL, '../media/fotoAnuncio/99dfe4ff7b9ef0a6a6beeae1aca834a5', '2023-05-02'),
(5, 'Cédulas Antigas', 'colecionaveis', 'notas nacionais e estrangeiras, em ótimo estado de conservação.\r\n13 cédulas prontas para serem adquiridas.', '150.00', 2, NULL, NULL, '../media/fotoAnuncio/473eaf1f133ed10cc29d50a66bb462d4', '2023-05-02'),
(6, 'Orelhão vermelho original antigo telesp anos 90', 'colecionaveis', 'orelhão original de colecionador da telesp\r\npossui cabo para instalação de telefone fixo\r\n\r\npeso: 10,5kg\r\nenvio a combinar', '464.90', 2, NULL, NULL, '../media/fotoAnuncio/5b29d0079184d63538efd1efdc80e81a', '2023-05-02'),
(7, 'Vitrola Antiga', 'eletronicos', 'PHILIPS ANTIGA VITROLA PHILIPS 547 (APRESENTA DESGASTE NA MADEIRA),FUNCIONANDO, NO ESTADO. MEDINDO: 35 X 31 X 18 CM', '300.00', 3, NULL, NULL, '../media/fotoAnuncio/643c74a07205ae15c9e45f57f0378b83', '2023-05-02'),
(8, 'Boneca em Porcelana', 'colecionaveis', 'Boneca Antiga - Sentada - Rosto, Braços, Pernas em Porcelana - Corpo em tecido - med. 60cm - obs. a cadeira não faz parte do lote', '599.00', 3, NULL, NULL, '../media/fotoAnuncio/1159f071fc6c7153b63fe0866b6b6566', '2023-05-02'),
(9, 'Game Retro', 'colecionaveis', 'uper Game Box - Video Game Retro Com Jogos Antigos 64gb ( Esse aparelho box tbm pode baixar Netflix, YouTube e outras coisas mais, porque ele tem Play Story)', '500.00', 3, NULL, NULL, '../media/fotoAnuncio/0c7818eb2c498f20bd210c6075763eae', '2023-05-02'),
(10, 'Game Retro 400 jogos', 'eletronicos', 'Mini Game Sup Retrô Portatil 400 Jogos Antigos Anos.\r\n', '69.00', 4, NULL, NULL, '../media/fotoAnuncio/a27b3e2c1275fa3f773eb6bd564bd3e4', '2023-05-02'),
(11, 'Lustre Antigo de Cristal', 'utensilios', 'Cristal - Elegante e clássico lustre antigo em cristal com 5 braços.', '600.00', 4, NULL, NULL, '../media/fotoAnuncio/1e7b0ececff51c73dba566c9f4ceb1d0', '2023-05-02'),
(12, 'Tapete Bulgaro ', 'utensilios', 'Tapete bulgaro com desenho de Ardebil -med. 2,05 x 1,28 = 2,62 m². \r\nArdebil Rugs, par de tapetes do século XVI, que se encontram no Victoria and Albert Museum, Londres.', '200.00', 5, NULL, NULL, '../media/fotoAnuncio/504b1b1d863538e54499254cd6e2df96', '2023-05-02'),
(13, 'Abaju Retro', 'utensilios', 'abajur antigo retrô, sensível ao toque, 3 modos de iluminação', '100.00', 5, NULL, NULL, '../media/fotoAnuncio/75019646e77e0fac2b60dfd5c002d817', '2023-05-02'),
(14, 'Crinolina para volume em vestido curto de festa', 'vestuario', 'Crinolina para volume em vestido curto de festa.\r\nDisponível e em ótimo estado.', '200.00', 6, NULL, NULL, '../media/fotoAnuncio/ce26d79d1efd81b182d05cbefadc61d4', '2023-05-02'),
(15, 'Vestido Midi Retrô De Manga Floral', 'vestuario', 'Vestido Midi Retrô De Manga Floral.\r\nLindíssimos vestidos estampados florais estilo Pin Up, retrô, com saia rodada, acinturado, de meia manga e decote redondo. Para ficar armado, use com Anágua.\r\n', '180.00', 6, NULL, NULL, '../media/fotoAnuncio/f6d2e088a7b0460ec59557c0a94a983e', '2023-05-02'),
(16, 'Vestido Retrô Preto P10', 'vestuario', 'Vestido Retrô Preto P10.\r\ninformações: Algodão/Poliéster, Acompanha a faixa, Sem Manga, Altura do Joelho, ', '160.00', 6, NULL, NULL, '../media/fotoAnuncio/99138c4685810f72c8e9b7c9b1a51cfd', '2023-05-02'),
(17, 'Conjunto de Cadeira Madeira Nobre', 'moveis', 'Conjunto de Mesa com 6 cadeiras em Madeira Nobre.\r\nNada como ter uma sala de jantar lindíssima com móveis de qualidade e que agreguem valor à decoração do ambiente. ', '100.00', 26, NULL, NULL, '../media/fotoAnuncio/ffb077d79a9b3e6573a38a3e55dd2d2f', '2023-05-09'),
(18, 'Cristaleira Rustica', 'moveis', ' cristaleira de vidro charmosa. Mas não é qualquer cristaleira não, sua sala merece a Cristaleira Branca Antônia! Mas como decorar cristaleira na sala? Com espaço suficiente para armazenar louças, cristais e até guardar com carinho fotos da família, essa cristaleira da madeira conta com duas prateleiras internas de vidro e duas portas também de vidro', '400.00', 26, NULL, NULL, '../media/fotoAnuncio/d30dc57deb1cb72d724bca61206a4ecd', '2023-05-09'),
(19, 'Cristaleira em Madeira Maciça', 'moveis', 'Estilo clássico e design de luxo, móveis que denotam autenticidade ao ambiente.\r\nFabricação própria, peças exclusivas e matérias-primas de excelência, atendendo ao mais refinado padrão de consumo.\r\nMobiliário que dialoga com tendências proeminentes, aliando a atemporalidade do design clássico ao que há de melhor em referências de vanguarda.', '1500.00', 26, NULL, NULL, '../media/fotoAnuncio/ae096598ab168a9d72ee202ece5e4bc1', '2023-05-09'),
(20, 'cômoda Madeira contemporânea, rústica ', 'moveis', 'As cômodas são, de longe, os móveis antigos mais populares. \r\nPor ser bem espaçoso e conter detalhes bonitos em sua decoração, fica fácil entender o porquê que muita gente busca esse móvel para incluir em suas casas', '1500.00', 25, NULL, NULL, '../media/fotoAnuncio/a0ada23a0b057d0200ba089292f1b1fe', '2023-05-09'),
(21, 'Cadeira ', 'moveis', 'Cadeira Luis xv com capitonês no encosto.\r\nLinda na Cor Verde.', '100.00', 25, NULL, NULL, '../media/fotoAnuncio/d4be37cb8a4331a50fc89694411019e7', '2023-05-09'),
(22, 'Cadeira Balanço', 'moveis', 'Cadeira de Balanço de Madeira Maciça Peroba.\r\nAntiga e em excelente estado de conservação \r\nAssento e encosto removiveis e reformados, revestidos com veludo na cor Bordô Medidas:\r\nAltura: 1.16m - Largura: 58.5cm - Profundidade: 80cm', '150.00', 25, NULL, NULL, '../media/fotoAnuncio/b39ecc86048554ee513f289b63b67c2f', '2023-05-09'),
(23, 'Jaqueta de Couro', 'vestuario', 'aqueta De Couro PU Moto Jaqueta Marrom Antiga Design Prático De Bolso Com Cinto Para Esportes Ao Ar Livre, Andar De Moto (Color : Black, Size : Large)', '150.00', 24, NULL, NULL, '../media/fotoAnuncio/d8bd3ecdf8881d6b88809bae2c01c39c', '2023-05-09'),
(24, 'Scarpin Griffe Com Pulseira', 'vestuario', 'Scarpin Griffe Com Pulseira.\r\n\r\nDepartamento BS: Calçados\r\nIndicado para: Dia a Dia\r\nOcasião: Dia a Dia\r\nMaterial: Sintético\r\nAcabamento: Verniz\r\nMaterial Interno: Sintético', '50.00', 24, NULL, NULL, '../media/fotoAnuncio/de0177936ec9804ddddd5f91360ffc65', '2023-05-09'),
(25, 'Sapato de Dança', 'vestuario', 'Sapato Dança De Salão Masculino Capezio Cj03 Preto', '50.00', 24, NULL, NULL, '../media/fotoAnuncio/c00aec990a3576441d3a4a23763a375f', '2023-05-09'),
(26, 'Telefone com fio antigo', 'eletronicos', 'Marca Hozee\r\nTipo de telefoneCom fio\r\nMaterial	Material\r\nFonte de alimentação PowerSource\r\nDispositivos compatíveis	Default', '150.00', 22, NULL, NULL, '../media/fotoAnuncio/cde03789a7901ad59f20f327677a2642', '2023-05-09'),
(27, 'Ferro de passar À Brasa', 'utensilios', 'Antigo Ferro À Brasa Preto Fama- Para Coleção - Excelente', '100.00', 22, NULL, NULL, '../media/fotoAnuncio/ce3a8bd6785d2aa07bb8ff9f5a221c12', '2023-05-09'),
(28, 'Panela de Barro', 'utensilios', 'Panela De Barro Restaurante Tamanho G Preta 3 Ltrs', '50.00', 22, NULL, NULL, '../media/fotoAnuncio/a0813830c63ee3059e8604b0afd784cd', '2023-05-09'),
(29, 'Moringa De Barro Cerâmica ', 'utensilios', 'Moringa De Barro Cerâmica 2000 Ml 2 Litro.\r\nCapacidade da jarra: 2 L\r\nMaterial: Barro / Cerâmica\r\nAcessórios incluídos: Prato de plástico\r\nAltura: 27.5 cm\r\nDiâmetro: 17.5 cm', '50.00', 21, NULL, NULL, '../media/fotoAnuncio/89e728cbdae0a51e28d51b6e6b123f5a', '2023-05-09'),
(30, 'Filtro de Barro ', 'utensilios', 'Filtro de Barro São Pedro 5 Litros com 1 Boia e 1 Vela Tradicional', '150.00', 21, NULL, NULL, '../media/fotoAnuncio/e6643996a19d05acfc581f9294faad84', '2023-05-09'),
(31, 'Chaleira', 'utensilios', 'A linha da yazi é desenvolvida especialmente para profissionais(as) ou para você que deseja se aventurar na cozinha com produtos que além de qualidade.', '40.00', 21, NULL, NULL, '../media/fotoAnuncio/7fc07397e89e5191e0cbcf985688eb30', '2023-05-09'),
(32, 'Utensílios Ingleses Em Ferro', 'utensilios', 'Utensílios Ingleses Em Ferro Antigos E Raros. Para Decoração', '200.00', 20, NULL, NULL, '../media/fotoAnuncio/5350b754ac8608bc59803d2a30656c19', '2023-05-09'),
(33, 'Carinho de Feira', 'utensilios', 'A ida semanal às feiras livres ficava muito mais fácil com esse acessório. E, depois de chegar em casa, o carrinho ficava no canto da cozinha, com os legumes e frutas frescos sempre à mão, e ficava fa... \r\n\r\nLeia mais em: https://vejasp.abril.com.br/coluna/memoria/dez-objetos-cozinha-antigamente', '60.00', 20, NULL, NULL, '../media/fotoAnuncio/68f801f2b2ce10d4397524ee791f8886', '2023-05-09'),
(34, 'Sanduicheira de fogão ', 'utensilios', 'Até hoje tem gente que prefere um pão de forma tostadinho com queijo derretido feito nessas sanduicheiras que vão diretamente ao fogo. Não há sanduicheira elétrica que faça melhor que elas! ', '30.00', 20, NULL, NULL, '../media/fotoAnuncio/bc8711b05ae375c90d9412ad062dd9c0', '2023-05-09'),
(35, 'Balança Mecânica', 'utensilios', 'as cozinhas mais equipadas tinham essas, mecânicas, para pesar corretamente os ingredientes. Como eram enormes e não cabiam no armário, ficavam à mostra o tempo todo. \r\n', '150.00', 19, NULL, NULL, '../media/fotoAnuncio/7d9727512a18556fa1de63d0c5efc41f', '2023-05-09'),
(36, 'Utensílios antigos', 'utensilios', 'utensílios antigos para cozinha.\r\nencontra-se em ótimo estado.', '50.00', 19, NULL, NULL, '../media/fotoAnuncio/106918bf77f300e21416b84f20933bb4', '2023-05-09'),
(37, 'Cuscuzeira', 'utensilios', 'cuscuzeira com revestimento antiaderente.\r\nA cuscuzeira com peneira removível, você terá mais facilidade para desenformar o cuscuz ainda quent', '40.00', 19, NULL, NULL, '../media/fotoAnuncio/3974d54f5c2b2aed634f4745f895b429', '2023-05-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_chat`
--

DROP TABLE IF EXISTS `tb_chat`;
CREATE TABLE IF NOT EXISTS `tb_chat` (
  `ID_CHAT` int NOT NULL AUTO_INCREMENT,
  `MENSAGEM_CHAT` varchar(800) NOT NULL,
  `TIME_ENVIO_CHAT` date NOT NULL,
  `DES_CHAT` varchar(40) NOT NULL,
  `ID_ANUNCIO` int NOT NULL,
  `ID_CLIENTE` int NOT NULL,
  PRIMARY KEY (`ID_CHAT`),
  UNIQUE KEY `DES_CHAT` (`DES_CHAT`),
  KEY `ID_ANUNCIO` (`ID_ANUNCIO`),
  KEY `ID_CLIENTE` (`ID_CLIENTE`)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `ID_CLIENTE` int NOT NULL AUTO_INCREMENT,
  `NOME_CLIENTE` varchar(60) NOT NULL,
  `TIPO_CLIENTE` char(1) DEFAULT NULL,
  `FONE_CLIENTE` char(14) NOT NULL,
  `EMAIL_CLIENTE` varchar(100) NOT NULL,
  `SENHA_CLIENTE` varchar(255) NOT NULL,
  `CPF_CLIENTE` char(14) NOT NULL,
  `DTA_CAD_CLIENTE` date NOT NULL,
  `DTA_NASC_CLIENTE` date NOT NULL,
  `STATUS_CLIENTE` varchar(1) DEFAULT NULL,
  `IMAGEM_CLIENTE` varchar(52) DEFAULT NULL,
  `ID_USER` int DEFAULT NULL,
  PRIMARY KEY (`ID_CLIENTE`),
  UNIQUE KEY `EMAIL_CLIENTE` (`EMAIL_CLIENTE`),
  UNIQUE KEY `CPF_CLIENTE` (`CPF_CLIENTE`),
  KEY `ID_USER` (`ID_USER`)
);

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`ID_CLIENTE`, `NOME_CLIENTE`, `TIPO_CLIENTE`, `FONE_CLIENTE`, `EMAIL_CLIENTE`, `SENHA_CLIENTE`, `CPF_CLIENTE`, `DTA_CAD_CLIENTE`, `DTA_NASC_CLIENTE`, `STATUS_CLIENTE`, `IMAGEM_CLIENTE`, `ID_USER`) VALUES
(1, 'Ana Julia Simões', NULL, '(11)92243-1815', 'anajusimoes@gmail.com', '$2y$10$c.yEmjTsWONp7Ut2uLAw..5SnzLO0B9OoKXVFOIYVwxzNfoBm6DYy', '277.405.114-55', '2023-04-26', '1998-03-02', NULL, NULL, NULL),
(2, 'João Adalberto ', NULL, '(11)97458-1723', 'joaoadal@gmail.com', '$2y$10$NEex9pQj/VrMn.2BLx5csubL2R6.xbFGKYTyczxmknfn55ATnMcuK', '792.211.542-28', '2023-04-26', '1995-11-05', NULL, NULL, NULL),
(3, 'Maria Silva', NULL, '(11)95410-3310', 'mariasilva@gmail.com', '$2y$10$TwkhN/a1fNLWX/6UBeRTMOKdWYvtD5jjv07uD7ul5w/dNalOBYzIa', '947.789.003-81', '2023-04-26', '1995-11-29', NULL, NULL, NULL),
(4, 'Mariana Gonsalvez', NULL, '(11)92787-9581', 'marianagon@gmail.com', '$2y$10$3g7gPSzxbr5/wsHy0KhhkOXROp1gaVRJRzvlTCAqnQ3go2/9Lne6q', '697.007.545-81', '2023-04-26', '1988-09-28', NULL, NULL, NULL),
(5, 'Victor Carneiro', NULL, '(11)95627-0491', 'victorcar@gmail.com', '$2y$10$64LmkLo8s/UhhucDqSmQgebKFAYeFVbk66PvXZnL/IStxYFgUv0rm', '653.922.798-91', '2023-04-26', '2003-04-07', NULL, NULL, NULL),
(6, 'Carlos Mitico', NULL, '(11)96567-4986', 'miticocar@gmail.com', '$2y$10$01augBAKP1752IgzH3wVduEslItqgmsK/Ab.mH1WnD5XZkFQlIB5q', '979.303.140-65', '2023-04-26', '1998-12-17', NULL, NULL, NULL),
(7, 'Wellamy Duarte', NULL, '(11)98905-3257', 'wellamy@gmail.com', '$2y$10$Ol.ds66oaFa1pyrfPYgtSueVjENmrof7YcABEMnI/wHMhewul5TMy', '442.220.091-59', '2023-04-26', '1989-11-24', NULL, NULL, NULL),
(8, 'Carmen Santana', NULL, '(11)95775-1190', 'carmensatan@gmail.com', '$2y$10$1IfBSyvVtfJklG5LEsV5oOe2I8pGB8EfFtgj8X.9iBm4gdK5lIQY6', '577.264.953-20', '2023-04-26', '1987-10-24', NULL, NULL, NULL),
(9, 'Gilberto Gomez', NULL, '(11)94050-6919', 'gigobit@gmail.com', '$2y$10$FpFLuiLbhmTySSdMd90xsuxa1603fCMQa3EnNXR32Q8kSH026Vj0W', '269.701.145-01', '2023-04-26', '1999-02-12', NULL, NULL, NULL),
(10, 'Peter Parker', NULL, '(11)93338-3121', 'pptparker@gmail.com', '$2y$10$MHrKwkEJx7/uLdKAYWKz3.TIEEnnUJTUt8V1c1hha36t8IPILCrqC', '510.513.462-61', '2023-04-26', '2005-04-13', NULL, NULL, NULL),
(11, 'Wally Darwinson', NULL, '(11)98374-3019', 'darwinsonwa@gmail.com', '$2y$10$reM0eNwuC68HTuZi0sDRuOxZm3sgfnjuTkVlkkV1OsMIaAv62vP7m', '284.858.549-07', '2023-04-26', '1997-08-03', NULL, NULL, NULL),
(12, 'Pedro Pereira', NULL, '(11)96211-6795', 'peroperera@gmail.com', '$2y$10$9ETZzWZqc9PeWC5rHKHlz.jidM0qY6PNJOCyjMlt3rjXlt.hnJnqu', '814.112.896-54', '2023-04-26', '1994-07-28', NULL, NULL, NULL),
(13, 'Mary Fernandes', NULL, '(11)98948-1858', 'maryferno@gmail.com', '$2y$10$eLUcVt/ZycEaoqHoUaD5zeiB3ZJE2OeRvDFarS39ivl4i2RvhHTTG', '446.584.195-62', '2023-04-26', '1991-04-15', NULL, NULL, NULL),
(14, 'Zezé de Camargo', NULL, '(11)97794-0129', 'zzdicamargo@gmail.com', '$2y$10$w460UBIRvOY7rTjGtqEFge5qoyF35QMHs9qOCgmjHZJnWIoMdXw0e', '271.124.137-25', '2023-04-26', '1995-08-09', NULL, NULL, NULL),
(15, 'Luciano Zafi', NULL, '(11)98236-8355', 'luzafari@gmail.com', '$2y$10$.RvHInmlEEi/8qYnWEifz.sIQDo3giBrhlxALBTr0Yn4fb998obHW', '453.335.934-35', '2023-04-26', '1993-05-25', NULL, NULL, NULL),
(16, 'Mariana Pereira', NULL, '(11)95045-6554', 'maripere@gmail.com', '$2y$10$GGeZNMMQDnY7NXd3XTjFfu8cK8sNHBpKBBNHfMSL1ZRXH8iZHiEEu', '864.623.551-78', '2023-04-26', '2001-10-27', NULL, NULL, NULL),
(17, 'Luiz Pereira', NULL, '(11)99614-7904', 'lupera@gmail.com', '$2y$10$ZQi7ondMHWqosfXWwFdDIuSIT3FYIkTb8RzKlhUQdoknGpDEDQMlq', '419.940.735-58', '2023-04-26', '1986-01-13', NULL, NULL, NULL),
(18, 'Jair Bolsonaro', NULL, '(11)90155-9767', 'bolsonaro@gmail.com', '$2y$10$d3g6WgjkqhLOC/Xa8JOYkOAM32/GT0.RNWa1bd/Kag3QS.yN2NrDy', '425.529.703-48', '2023-04-26', '1971-11-12', NULL, NULL, NULL),
(19, 'Victoria Santos', NULL, '(11)94139-3966', 'vicsant@gmail.com', '$2y$10$Q8XLlq2QuH.st674Kqwkm.STK0GRhR6S9qCk0Cbk6iHSPlzBrjdze', '661.045.816-51', '2023-04-26', '1964-03-17', NULL, NULL, NULL),
(20, 'José De Alencar', NULL, '(11)97645-5256', 'josedialenca@gmail.com', '$2y$10$OxECCIsvoDEROUvZ1nzPa.XJELiUWhLckAeAKnsAAHTkC2.F/cp06', '756.387.756-36', '2023-04-26', '1988-07-16', NULL, NULL, NULL),
(21, 'Guimaraes Rosa ', NULL, '(11)95196-2313', 'guimaraesrosa@gmail.com', '$2y$10$VuCmQkf3fI1PVh3SDuiz0.61WnlPFoI0NESq5OXw/4QSTHrsbOqbe', '828.317.957-70', '2023-04-26', '1975-09-05', NULL, NULL, NULL),
(22, 'Drausio Vareula', NULL, '(11)92427-6338', 'drauziovariola@gmail.com', '$2y$10$AaKe.ljxzTPOvs4oDUyq.eWzVUNWRiolGIg.tCcNdoy0oN0K4xx0W', '663.184.995-12', '2023-04-26', '2004-02-07', NULL, NULL, NULL),
(23, 'Pedro dos Santos', NULL, '(11)94222-0950', 'pedrosant@gmail.com', '$2y$10$X1vxL8F3pzTnSJgaq1LQtOUtgKjlDBSjFedhxRLn30hHNjbmMCLRi', '305.537.583-27', '2023-04-26', '2002-02-14', NULL, NULL, NULL),
(24, 'Silvio Santos', NULL, '(11)92977-3789', 'ssabravanel@gmail.com', '$2y$10$qb9A1uD1qUiGbUNbiVlknuR2ugwZIDUT1CR7dSdmZF24UOxFWv5s2', '862.059.473-06', '2023-04-26', '1986-08-03', NULL, NULL, NULL),
(25, 'Silvia Leão', NULL, '(11)94732-7266', 'silviaroar@gmail.com', '$2y$10$R/TwuQwxsDMBh0H2EroP9eiMWtYi7fPtnWIUpI0Ed2FKq7YAE7Wbq', '785.953.977-37', '2023-04-26', '1978-06-19', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

DROP TABLE IF EXISTS `tb_endereco`;
CREATE TABLE IF NOT EXISTS `tb_endereco` (
  `ID_END` int NOT NULL AUTO_INCREMENT,
  `LOGRADOURO_END` varchar(60) NOT NULL,
  `CEP` char(8) NOT NULL,
  `NUM` int NOT NULL,
  `COMPLEMENTO` varchar(50) DEFAULT NULL,
  `ID_USER` int NOT NULL,
  PRIMARY KEY (`ID_END`),
  KEY `ID_USER` (`ID_USER`)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`; 
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `ID_ADMIN` int NOT NULL AUTO_INCREMENT,
  `EMAIL_ADMIN` varchar(60) NOT NULL,
  `SENHA_ADMIN` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_ADMIN`)
);

INSERT INTO `tb_admin` (`ID_ADMIN`, `EMAIL_ADMIN`, `SENHA_ADMIN`) VALUES(1, 'admin@admin.com', '$2y$10$l85NSzsqScdY8B6jBaIy9.gmviemY//qHYZFYxaBubs44ZLGZWK4K');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_venda`
--

DROP TABLE IF EXISTS `tb_venda`;
CREATE TABLE IF NOT EXISTS `tb_venda` (
  `ID_VENDA` int NOT NULL AUTO_INCREMENT,
  `DTA_VENDA` date NOT NULL,
  `MOTIVO_VENDA` varchar(11) NOT NULL,
  `ID_ANUNCIO` int NOT NULL,
  `NOME_ANUNCIO` varchar(80) NOT NULL,
  `CATEGORIA_ANUNCIO` varchar(13) NOT NULL,
  `VALOR_VENDA` decimal(8,2) NOT NULL,
  `DESC_ANUNCIO` text NOT NULL,
  `ID_CLIENTE` int DEFAULT NULL,
  `ID_VENDEDOR` int DEFAULT NULL,
  `IMAGEM_ANUNCIO` varchar(85) NOT NULL,
  `DTA_ANUNCIO` date NOT NULL,
  PRIMARY KEY (`ID_VENDA`),
  KEY `ID_ANUNCIO` (`ID_ANUNCIO`),
  KEY `ID_CLIENTE` (`ID_CLIENTE`)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vendedor`
--

DROP TABLE IF EXISTS `tb_vendedor`;
CREATE TABLE IF NOT EXISTS `tb_vendedor` (
  `ID_VENDEDOR` int NOT NULL AUTO_INCREMENT,
  `NOME_VENDEDOR` varchar(60) NOT NULL,
  `TIPO_VENDEDOR` char(1) DEFAULT NULL,
  `FONE_VENDEDOR` char(14) NOT NULL,
  `EMAIL_VENDEDOR` varchar(100) NOT NULL,
  `SENHA_VENDEDOR` varchar(255) NOT NULL,
  `CPF_VENDEDOR` char(14) NOT NULL,
  `DTA_CAD_VENDEDOR` date NOT NULL,
  `DTA_NASC_VENDEDOR` date NOT NULL,
  `STATUS_VENDEDOR` varchar(1) DEFAULT NULL,
  `IMAGEM_VENDEDOR` varchar(52) DEFAULT NULL,
  `ID_USER` int DEFAULT NULL,
  PRIMARY KEY (`ID_VENDEDOR`),
  UNIQUE KEY `EMAIL_VENDEDOR` (`EMAIL_VENDEDOR`),
  UNIQUE KEY `CPF_VENDEDOR` (`CPF_VENDEDOR`),
  KEY `ID_USER` (`ID_USER`)
);

--
-- Extraindo dados da tabela `tb_vendedor`
--

INSERT INTO `tb_vendedor` (`ID_VENDEDOR`, `NOME_VENDEDOR`, `TIPO_VENDEDOR`, `FONE_VENDEDOR`, `EMAIL_VENDEDOR`, `SENHA_VENDEDOR`, `CPF_VENDEDOR`, `DTA_CAD_VENDEDOR`, `DTA_NASC_VENDEDOR`, `STATUS_VENDEDOR`, `IMAGEM_VENDEDOR`, `ID_USER`) VALUES
(1, 'Bruno Nascimento de Moraes', NULL, '(11)98722-3506', 'bruno@hotmail.com', '$2y$10$T4hten.kfpKkdEZ9wbEP6Oi7sHQ2pNg4ybuEs/cCkgnpgoIm2Mb.m', '123.123.123-12', '2023-04-10', '1998-11-06', NULL, '../media/fotoPerfil/39ee3d2b9deba42c81e6557d64c15920', NULL),
(2, 'Antonio Silva', NULL, '(11)11111-1111', 'antonio.silva@gmail.com', '$2y$10$PyzuWlssbCWiJBTFoYgs1uFN11UtEM4euAgO1yBmKnRMm/53I.OPS', '111.111.111-11', '2023-04-26', '1989-03-14', NULL, NULL, NULL),
(3, 'Mariana Santos', NULL, '(11)98642-8585', 'mariana.santos@gmail.com', '$2y$10$vwDGIRsSq1mlri48THzd6OxkeissIibErWI86O3mwYOeTMPNRdjxa', '813.631.749-42', '2023-04-26', '1989-03-15', NULL, NULL, NULL),
(4, 'Jose Maria', NULL, '(11)94917-2366', 'jose.maria@gmail.com', '$2y$10$.0GEmgK/ABBwka8dmGegSu3vOiKjsyNSFJjteLoFWKvEMA9tqA47q', '929.860.188-33', '2023-04-26', '1989-03-16', NULL, NULL, NULL),
(5, 'Antonio Pereira', NULL, '(11)99756-0016', 'antonio.pereira@gmail.com', '$2y$10$poEpbiVlFqrGKJpWDOr6WuV4n887EXadtbnWG6iqUGpjmkXd8UExS', '961.958.791-84', '2023-04-26', '1989-03-17', NULL, NULL, NULL),
(6, 'Doris Alencar', NULL, '(11)92414-3283', 'doris.alencar@gmail.com', '$2y$10$i5X6VWgi0sl4e9/JM2naMeAdo6v/ig.UZRwrmCC2cS8UL2VKUYImu', '436.194.706-01', '2023-04-26', '1989-03-18', NULL, '../media/fotoPerfil/20a2ca2d15968612008ed6e636d16621', NULL),
(7, 'Doriana Neves', NULL, '(11)92448-6649', 'doriana.neves@gmail.com', '$2y$10$z0PsrNqhEfsOxTk4eM/56eoMDetq9XmZQWNOzsKAIhN3TanBIJNvC', '410.002.967-08', '2023-04-26', '1989-03-19', NULL, '../media/fotoPerfil/d05ff0d5d2c2e03e1af7bc453e825898', NULL),
(8, 'Patricia Pereira', NULL, '(11)96291-8026', 'patricia.pereira@gmail.com', '$2y$10$fs4PCbwWSveoeHeODXtZEOsrlJRmluMxlkIFBUYwbocvbHLPNSZAO', '879.581.063-14', '2023-04-26', '1989-03-20', NULL, '../media/fotoPerfil/b5c65fc24260b0a721f1b9962795fa75', NULL),
(9, 'Luiza da Silva', NULL, '(11)94170-8056', 'luiza.silva@gmail.com', '$2y$10$1ImRwBfbGLpgQSkeD/b1iO7./E7cO.DUlH/wuFDZ4gXlevvF2zC0a', '773.159.851-74', '2023-04-26', '1989-03-21', NULL, '../media/fotoPerfil/688ed8a9bbb9262e1910d86c88df462d', NULL),
(10, 'Luiza Santos', NULL, '(11)95798-3544', 'luiza.santos@gmail.com', '$2y$10$4sOjEnOLXUXjZ1gc2v/cmuNnhqIEB0O8Jc3UAm/l.Qw92T69vzS0m', '489.637.063-05', '2023-04-26', '1989-03-22', NULL, '../media/fotoPerfil/bcfb97c83eab09fd79f7e46cb8811839', NULL),
(11, 'Luan Rodrigues', NULL, '(11)97391-5507', 'luan.rodrigues@gmail.com', '$2y$10$XoIU2i4PNVoc.7ybqiwx2OmMD15Pq6IBKMCGHGTti8wgBOCvqrKIS', '225.972.446-07', '2023-04-26', '1989-03-23', NULL, '../media/fotoPerfil/f4e0b9ab27da48ee51d6f526f7ddb3a6', NULL),
(12, 'Rian Santos', NULL, '(11)97640-3813', 'rian.santos@gmail.com', '$2y$10$6m.Seaf539jhzmqGqeiQD.xnJzPJfi01qRydKlUcKumQO7FtQ.2be', '395.722.676-60', '2023-04-26', '1999-03-24', NULL, '../media/fotoPerfil/7cd246e20d0602619b5f4a3a6f2dcac0', NULL),
(13, 'Donizete Silva', NULL, '(11)90578-2670', 'donizete.silva@gmail.com', '$2y$10$6K4KzvMttSdXN3azLVnkv.hoplbTIh70/u12mNctITAGCDJaCsFG2', '690.598.402-58', '2023-04-26', '1989-03-25', NULL, '../media/fotoPerfil/cbccdccc9fe436a8351b73c23f3c9bdb', NULL),
(14, 'Packer Jose', NULL, '(11)91460-2306', 'packer.packer@gmail.com', '$2y$10$V7P1y2DNBP84BpCZlv1lD.jpvvbUEwE1WTFhO5E/rQ/yCDSD3.rnu', '425.077.334-70', '2023-04-26', '1989-03-26', NULL, '../media/fotoPerfil/644fb35609e78663c05b665433f5fabe', NULL),
(15, 'Breno Jose', NULL, '(11)91807-5818', 'breno.breno@gmail.com', '$2y$10$kHw3OrbdQdEN1iO84vdWteuq83xjP9VwihSMTkJg34bZV1JibTiGq', '580.536.971-46', '2023-04-26', '1989-03-27', NULL, '../media/fotoPerfil/177a30b3f898fa93232fb391f135ab40', NULL),
(16, 'José Mendes', NULL, '(11)95661-9358', 'jose.mendes@gmail.com', '$2y$10$YchORFtJTga0eFv3Dob5veLqPXKqIE6pnxOZLdduThjUGCo9.Zlom', '348.884.431-53', '2023-04-27', '1989-03-28', NULL, '../media/fotoPerfil/84f63cab487d9819434c0689f0734e94', NULL),
(17, 'Victor Silva', NULL, '(11)91599-8298', 'victor.silva@gmail.com', '$2y$10$bkPgk.NSDTCwA7kYDsE/POMt7V/Bzaz17ASJYVdlChblDkI1bjkae', '165.654.678-28', '2023-04-27', '1989-03-29', NULL, '../media/fotoPerfil/0dec74180d3933dad6497068f7da8e2d', NULL),
(18, 'Guilherme Santos', NULL, '(11)90026-3644', 'guilherme.santos@gmail.com', '$2y$10$WJ8Fg8apvPiLk1XAZOpBjO6ldKxPf2j90iE0oMiu8syofa9em/pa2', '289.145.595-20', '2023-04-27', '1989-03-30', NULL, '../media/fotoPerfil/458bff574a2fbd7477f7380526271ec1', NULL),
(19, 'Maylon Silva', NULL, '(11)98003-2969', 'maylon.silva@gmail.com', '$2y$10$RYlj89Ns5/YEm2T3XDjQm.t84/txCXgXssBdtKmu9pNeaKjQ4V97u', '257.626.653-96', '2023-04-27', '1989-03-31', NULL, '../media/fotoPerfil/8b96be0d02fc2a15b6f3bccdf1b3c070', NULL),
(20, 'Alan Pereira', NULL, '(11)94779-7941', 'alan.pereira@gmail.com', '$2y$10$63AubPoTI91G8CHg7WVtVuP8ACf5XJWhyO7jyqMNKj.n/8GIUlxTm', '823.404.375-07', '2023-04-27', '1990-04-01', NULL, '../media/fotoPerfil/4ed249cff84cd3e64783031576986930', NULL),
(21, 'Tadeu Silva', NULL, '(11)96172-6433', 'tadeu.silva@gmail.com', '$2y$10$MhQYROwD5JinnTdMOIZlO.e7zY82xFb/jzsoMKXnOYBmQlXgsLNEu', '256.234.588-44', '2023-04-27', '1990-04-02', NULL, '../media/fotoPerfil/e42f75278ece7ba2a31e126a7ec06e1c', NULL),
(22, 'Zilu Maria', NULL, '(11)99672-6559', 'zilu.maria@gmail.com', '$2y$10$swSoBiH7uIgiehM6RwHsNOn.4IMbbGQ7h0nBDOjE//pjLgTgAfgt6', '597.829.881-51', '2023-04-27', '1989-04-03', NULL, '../media/fotoPerfil/717c0cb84783c06a0640b520c737c972', NULL),
(23, 'Amado Batista', NULL, '(11)95352-7912', 'amado.batista@gmail.com', '$2y$10$mCBNwFEGnH9eJbH8O85RaeORgigPsCbGFbMFM7o9xEwZ91C5HeEvW', '680.689.345-21', '2023-04-27', '1990-04-04', NULL, '../media/fotoPerfil/16b4b61fb1492539e7c38b814e433fce', NULL),
(24, 'Luiz Inácio Lula da Silva', NULL, '(11)97242-9031', 'lula.silva@gmail.com', '$2y$10$Xmv0Wv.jq.34dJKVRRgS/eIlP6c368BOZlAAbsBItO6NVzUk4JXw2', '875.737.909-06', '2023-04-27', '1990-04-05', NULL, '../media/fotoPerfil/8c30634d5712418139e68384d5ce7381', NULL),
(25, 'Zezinho Pereira', NULL, '(11)99671-5018', 'zezinho.zezinho@gmail.com', '$2y$10$QBTEGmx3MWGvgmDus6vykuUgM9VpNRoUhMYLh0dAiA6E48DLCoUQm', '147.958.250-63', '2023-04-27', '1990-04-06', NULL, '../media/fotoPerfil/a21b56299103c7c11a15b19c1b5e0dce', NULL),
(26, 'Malu Daluz', NULL, '(11)96055-9520', 'malu.daluz@gmail.com', '$2y$10$AAc1erV510t4hVs8bkTAY.DZH1lP7IGs8hfEg6U63xSVgRUAAts.q', '785.778.380-73', '2023-04-27', '2023-04-07', NULL, '../media/fotoPerfil/8330ab20af9a3fea89ec0769dede6668', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
