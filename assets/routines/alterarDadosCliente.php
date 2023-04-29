<?php
session_start();
include_once 'connection.php';

$novoNome = filter_input(INPUT_POST, 'novoNome');
$novoEmail = filter_input(INPUT_POST, 'novoEmail');
$novoCpf = filter_input(INPUT_POST, 'novoCpf');
$novoTelefone = filter_input(INPUT_POST, 'novoTelefone');
$novoDataNascimento = filter_input(INPUT_POST, 'novoDataNascimento');
$sessaoUsuario = $_SESSION['login'];

$arqTemp = $_FILES['alterarFoto']['tmp_name'];
$arqNome = $_FILES['alterarFoto']['name'];

$pasta = '../media/fotoPerfil/';

$caminho = $pasta . md5($sessaoUsuario);

if (isset($_POST['saveBtn'])) {
    $stmAlter = $connection->prepare("UPDATE TB_CLIENTE SET FONE_CLIENTE=? WHERE EMAIL_CLIENTE=?");
    $stmAlter->bind_param('ss', $novoTelefone, $sessaoUsuario);
    $stmAlter->execute();

    if (@move_uploaded_file($arqTemp, $caminho)) {
        $stmFoto = $connection->prepare("UPDATE TB_CLIENTE SET IMAGEM_CLIENTE=? WHERE EMAIL_CLIENTE=?");
        $stmFoto->bind_param('ss', $caminho, $sessaoUsuario);
        $stmFoto->execute();

        echo "<script language='javascript' type='text/javascript'>alert('Seus dados foram alterados com sucesso!');window.location.href='../iframe/dadosCliente.php';</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Seus dados foram alterados com sucesso!');window.location.href='../iframe/dadosCliente.php';</script>";
    }
} else {
    echo "<script language='javascript' type='text/javascript'>alert('Algo de errado aconteceu!');window.location.href='../iframe/dadosCliente.php';</script>";
    exit();
}
?>