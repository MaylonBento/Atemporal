drop database Atemporal;

Create Database Atemporal;
use Atemporal;

/* 

if not exists ( caso não tenha exista tabela com nome escolhido, tabela será criada

 */
 

CREATE TABLE if not exists TB_USUARIO(
ID_USER int AUTO_INCREMENT PRIMARY KEY,
EMAIL_USER Varchar(60) NOT Null,
SENHA_USER Varchar(255) NOT Null,
STATUS_USER int(1) NOT Null);

desc TB_USUARIO;
SELECT * FROM TB_USUARIO;

CREATE TABLE if not exists TB_VENDEDOR(
ID_VENDEDOR int AUTO_INCREMENT PRIMARY KEY,
NOME_VENDEDOR Varchar(60) NOT Null,
TIPO_VENDEDOR Char(1) Null,
FONE_VENDEDOR Char(14) NOT Null,
EMAIL_VENDEDOR Varchar(60) NOT Null UNIQUE,
SENHA_VENDEDOR Varchar(255) NOT Null,
CPF_VENDEDOR Char(14) NOT Null UNIQUE,
DTA_CAD_VENDEDOR Date NOT Null,
DTA_NASC_VENDEDOR Date NOT Null,
STATUS_VENDEDOR Varchar(1) Null,
IMAGEM_VENDEDOR Varchar(200) Null,
ID_USER int Null,

foreign key (ID_USER) references TB_USARIO (ID_USER));

desc TB_VENDEDOR;
SELECT * FROM TB_VENDEDOR;


CREATE TABLE if not exists TB_CLIENTE(
ID_CLIENTE int AUTO_INCREMENT PRIMARY KEY,
NOME_CLIENTE Varchar(60) NOT Null,
TIPO_CLIENTE Char(1) Null,
FONE_CLIENTE Char(14) NOT Null,
EMAIL_CLIENTE Varchar(100) NOT Null UNIQUE,
SENHA_CLIENTE Varchar(255) NOT Null,
CPF_CLIENTE Char(14) NOT Null UNIQUE,
DTA_CAD_CLIENTE Date NOT NUll,
DTA_NASC_CLIENTE Date NOT Null,
STATUS_CLIENTE Varchar(1) Null,
IMAGEM_CLIENTE Varchar(200) Null,
ID_USER int Null,

foreign key (ID_USER) references TB_USARIO (ID_USER));

desc TB_CLIENTE;
SELECT * FROM TB_CLIENTE;


CREATE TABLE if not exists TB_ENDERECO(
ID_END int AUTO_INCREMENT PRIMARY KEY,
LOGRADOURO_END Varchar(60) NOT Null,
CEP Char(8) NOT Null,
NUM Int(7) NOT Null,
COMPLEMENTO Varchar(50),
ID_USER Int NOT Null,

foreign key (ID_USER) references TB_USARIO (ID_USER));

desc TB_ENDERECO;
SELECT * FROM TB_ENDERECO;


CREATE TABLE if not exists TB_ANUNCIO(
ID_ANUNCIO int AUTO_INCREMENT PRIMARY KEY,
NOME_ANUNCIO Varchar(80) NOT Null,
CATEGORIA_ANUNCIO Varchar(13) NOT Null,
DESC_ANUNCIO Text NOT Null,
VALOR_VENDA_ANUNCIO Numeric(8,2) NOT Null,
ID_VENDEDOR int NOT NULL,
STATUS_ANUNCIO Varchar(40) NOT Null,
QTD_ANUNCIO int NOT Null,

foreign key (ID_VENDEDOR) references TB_VENDEDOR (ID_VENDEDOR));

desc TB_ANUNCIO;
SELECT * FROM TB_ANUNCIO;


CREATE TABLE if not exists TB_CHAT(
ID_CHAT int AUTO_INCREMENT PRIMARY KEY,
MENSAGEM_CHAT Varchar(800) NOT Null,
TIME_ENVIO_CHAT Date NOT Null,
DES_CHAT Varchar(40) NOT Null UNIQUE,
ID_ANUNCIO int NOT Null,
ID_CLIENTE int NOT Null,

foreign key (ID_ANUNCIO) references TB_ANUNCIO (ID_ANUNCIO),
foreign key (ID_CLIENTE) references TB_CLIENTE (ID_CLIENTE));

desc TB_CHAT;
SELECT * FROM TB_CHAT;

CREATE TABLE if not exists TB_VENDA(
ID_VENDA int AUTO_INCREMENT PRIMARY KEY,
DTA_VENDA Date NOT Null,
VALOR_VENDA Numeric(8,2) NOT Null,
STATUS_VENDA Varchar(40) NOT Null,
ID_ANUNCIO int NOT Null,
ID_CLIENTE Int NOT Null,

foreign key (ID_ANUNCIO) references TB_ANUNCIO (ID_ANUNCIO),
foreign key (ID_CLIENTE) references TB_CLIENTE (ID_CLIENTE));

desc TB_VENDA;
SELECT * FROM TB_VENDA;

INSERT INTO TB_ANUNCIO(ID_ANUNCIO,NOME_ANUNCIO,DESC_ANUNCIO,VALOR_VENDA_ANUNCIO,STATUS_ANUNCIO,QTD_ANUNCIO,ID_VENDEDOR) VALUES
    (
        '1',
        'Gramofone Retrô Clássico',
        'Enfeite decorativo em forma de um gramofone clássico com 23,5 x 18 x 15,5 cm de dimensão, detalhes e cores muito realista.',
        '15000',
        '1',
        '1',
        '1'
    ),

    (
        '2',
        'Máquina de Escrever Remingston Standard',
        'Máquina de escrever é um dos objetos mais nostálgicos para quem tem pelo menos 40 anos de idade. Nem tanto pelo visual, mas principalmente pelo som característico',
        '52000',
        '1',
        '1',
        '2'
    ),

    (
        '3',
        'Relógio de bolso Fiorenza',
        'Relógio Suiço com 5cm de diâmetro fabricado por volta de 1940 ',
        '60000',
        '1',
        '1',
        '3'
    ),

    (
        '4',
        'Ferro de Passar em Cobre',
        'Feito de Cobre, abastecido com carvão e pesa cerca de 400g. Não é mais utilizado no mundo contemporâneo mas esta em ótimo estado de conservação',
        '30000',
        '1',
        '1',
        '4'
    ),

    (
        '5',
        'Moedor de Café Antigo',
        'Moe grãos, operação manual: O manual do moedor de café pode satisfazer a diversão da operação manual e desfrutar de café DIY com amigos e familiares.',
        '66000',
        '1',
        '1',
        '5'
    ),

    (
        '6',
        'Máquina de Costura Thomas Saint',
        'A primeira máquina de costura a ser feita e patenteada foi idealizada para trabalhar com couro e o detentor da invenção foi Thomas Saint, em 1790.',
        '500000',
        '1',
        '1',
        '6'
    );

INSERT INTO `tb_vendedor` (`ID_VENDEDOR`, `NOME_VENDEDOR`, `TIPO_VENDEDOR`, `FONE_VENDEDOR`, `EMAIL_VENDEDOR`, `SENHA_VENDEDOR`, `CPF_VENDEDOR`, `DTA_CAD_VENDEDOR`, `DTA_NASC_VENDEDOR`, `STATUS_VENDEDOR`, `IMAGEM_VENDEDOR`, `ID_USER`) VALUES
(1, 'Bruno Nascimento de Moraes', NULL, '(12)31231-2312', 'bruno@hotmail.com', '$2y$10$T4hten.kfpKkdEZ9wbEP6Oi7sHQ2pNg4ybuEs/cCkgnpgoIm2Mb.m', '123.123.123-12', '2023-04-10', '1998-11-06', NULL, NULL, NULL);
COMMIT;