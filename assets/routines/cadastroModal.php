<?php
    include_once 'connection.php';

    $emailCliente = filter_input(INPUT_POST,'emailCliente');
    $senhaCliente = filter_input(INPUT_POST, 'senhaCliente');
    $confirmarSenhaCliente = filter_input(INPUT_POST, 'confirmarSenhaCliente');
    $nomeCliente = filter_input(INPUT_POST, 'nomeCliente');
    $cpfCliente = filter_input(INPUT_POST, 'cpfCliente');
    $foneCliente = filter_input(INPUT_POST, 'foneCliente');
    $nascimentoCliente = filter_input(INPUT_POST, 'nascimentoCliente');

    $emailVendedor = filter_input(INPUT_POST,'emailVendedor');
    $senhaVendedor = filter_input(INPUT_POST, 'senhaVendedor');
    $confirmarSenhaVendedor = filter_input(INPUT_POST, 'confirmarSenhaVendedor');
    $nomeVendedor = filter_input(INPUT_POST, 'nomeVendedor');
    $cpfVendedor = filter_input(INPUT_POST, 'cpfVendedor');
    $foneVendedor = filter_input(INPUT_POST, 'foneVendedor');
    $nascimentoVendedor = filter_input(INPUT_POST, 'nascimentoVendedor');

    $senhaClienteHashed = password_hash($senhaCliente, PASSWORD_BCRYPT);
    $senhaVendedorHashed = password_hash($senhaVendedor, PASSWORD_BCRYPT);

    $dataCriacao = date('Y-m-d');

    if (isset($_POST['signUpCliente'])) {
        $stmCheckEmail = $connection->prepare("SELECT*FROM TB_CLIENTE WHERE EMAIL_CLIENTE=?");
        $stmCheckEmail->bind_param('s',$emailCliente);
        $stmCheckEmail->execute();
        $stmCheckEmail->store_result();

        if ($stmCheckEmail->num_rows <= 0) {
            $stmCliente = $connection->prepare("INSERT INTO TB_CLIENTE(NOME_CLIENTE,CPF_CLIENTE,FONE_CLIENTE,DTA_NASC_CLIENTE,DTA_CAD_CLIENTE,EMAIL_CLIENTE,SENHA_CLIENTE) VALUES(?,?,?,?,?,?,?)");
            $stmCliente->bind_param('sssssss', $nomeCliente,$cpfCliente,$foneCliente,$nascimentoCliente,$dataCriacao,$emailCliente,$senhaClienteHashed);
            $stmCliente->execute();
    
            session_start();
            $_SESSION['login']=$emailCliente;
            $_SESSION['tipoConta']='Cliente';

            header("Location:../minhaConta.php");
        }else {
            echo    "<script language='javascript' type='text/javascript'>alert('Ja existe uma conta com os dados inseridos! Faça o login.');</script>";
            header('Location:../login.php');
        }
    }        

    if (isset($_POST['signUpVendedor'])) {
        $stmCheckEmail = $connection->prepare("SELECT*FROM TB_VENDEDOR WHERE EMAIL_VENDEDOR=?");
        $stmCheckEmail->bind_param('s',$emailVendedor);
        $stmCheckEmail->execute();
        $stmCheckEmail->store_result();

        if ($stmCheckEmail->num_rows <= 0) {
            $stmVendedor = $connection->prepare("INSERT INTO TB_VENDEDOR(NOME_VENDEDOR,CPF_VENDEDOR,FONE_VENDEDOR,DTA_NASC_VENDEDOR,DTA_CAD_VENDEDOR,EMAIL_VENDEDOR,SENHA_VENDEDOR) VALUES(?,?,?,?,?,?,?)");
            $stmVendedor->bind_param('sssssss', $nomeVendedor,$cpfVendedor,$foneVendedor,$nascimentoVendedor,$dataCriacao,$emailVendedor,$senhaVendedorHashed);
            $stmVendedor->execute();

            session_start();
                $_SESSION['login']=$emailVendedor;
                $_SESSION['tipoConta']='Vendedor';

            header("Location:../minhaConta.php");
            }else {
            echo    "<script language='javascript' type='text/javascript'>alert('Ja existe uma conta com os dados inseridos! Faça o login.');</script>";
            header('Location:../login.php');
        }
    }
?>