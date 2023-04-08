<?php
    include_once 'connection.php';

    session_start();

    $novoNome = filter_input(INPUT_POST,'novoNome');
    $novoEmail = filter_input(INPUT_POST,'novoEmail');
    $novoCpf = filter_input(INPUT_POST,'novoCpf');
    $novoTelefone = filter_input(INPUT_POST,'novoTelefone');
    $novoDataNascimento = filter_input(INPUT_POST,'novoDataNascimento');
    $sessaoUsuario = $_SESSION['login'];

    $arqTemp = $_FILES['alterarFoto']['tmp_name'];
    $arqNome = $_FILES['alterarFoto']['name'];

    $pasta = '../media/fotoPerfil/';

    $caminho = $pasta.md5($sessaoUsuario);

    if (isset($_POST['saveBtn'])) {
        $stmAlter = $connection->prepare("UPDATE TB_VENDEDOR SET FONE_VENDEDOR=? WHERE EMAIL_VENDEDOR=?");
        $stmAlter->bind_param('ss',$novoTelefone, $sessaoUsuario);
        $stmAlter->execute();

        if(@move_uploaded_file($arqTemp,$caminho)){
            $stmFoto = $connection->prepare("UPDATE TB_VENDEDOR SET IMAGEM_VENDEDOR=? WHERE EMAIL_VENDEDOR=?");
            $stmFoto->bind_param('ss',$caminho, $sessaoUsuario);
            $stmFoto->execute();

            echo    "<script language='javascript' type='text/javascript'>alert('Seus dados foram alterados com sucesso!');window.location.href='../iframe/dadosVendedor.php';</script>";
            }else {
                echo    "<script language='javascript' type='text/javascript'>alert('Seus dados foram alterados com sucesso!');window.location.href='../iframe/dadosVendedor.php';</script>";
            }
        }else {
        echo    "<script language='javascript' type='text/javascript'>alert('Algo de errado aconteceu!');window.location.href='../iframe/dadosVendedor.php';</script>";
        exit();
    }
?>