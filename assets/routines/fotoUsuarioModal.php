<?php

include_once 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$curso = $_POST['curso'];
$endereco = $_POST['end'];

$arqTemp = $_FILES['arquivo']['tmp_name'];
$arqNome = $_FILES['arquivo']['name'];

$caminho = 'C:/wamp64/www/atv/img/';

$caminho = $caminho.$arqNome;


if (@move_uploaded_file($arqTemp,$caminho)) {
    echo 'Joia';
}
else{
    echo 'Não joia';
}