<?php
    include_once 'connection.php';

    $userLogin = filter_input(INPUT_POST,'userEmail');
    $userPassword = filter_input(INPUT_POST, 'userPassword');
    
    if (isset($_POST['btnEntrar'])) {
        $stmLoginCliente = $connection->prepare("SELECT SENHA_CLIENTE FROM TB_CLIENTE WHERE EMAIL_CLIENTE=?");
        $stmLoginCliente->bind_param('s',$userLogin);
        $stmLoginCliente->execute();
        $stmLoginCliente->store_result();

        $stmLoginVendedor = $connection->prepare("SELECT SENHA_VENDEDOR FROM TB_VENDEDOR WHERE EMAIL_VENDEDOR=?");
        $stmLoginVendedor->bind_param('s',$userLogin);
        $stmLoginVendedor->execute();
        $stmLoginVendedor->store_result();

        if ($stmLoginCliente->num_rows > 0) {
            $stmLoginCliente = $connection->prepare("SELECT SENHA_CLIENTE FROM TB_CLIENTE WHERE EMAIL_CLIENTE=?");
            $stmLoginCliente->bind_param('s',$userLogin);
            $stmLoginCliente->execute();
            $dados = $stmLoginCliente->get_result();
            $pass = $dados->fetch_assoc();

            if (password_verify($userPassword,$pass['SENHA_CLIENTE'])) {
                session_start();
                $_SESSION['login']=$userLogin;

                $stmGetCliente = $connection->prepare("SELECT ID_CLIENTE FROM TB_CLIENTE WHERE EMAIL_CLIENTE=?");
                $stmGetCliente->bind_param('s', $userLogin);
                $stmGetCliente->execute();
                $getIdCliente = $stmGetCliente->get_result();
                $idCliente = $getIdCliente->fetch_assoc();

                $_SESSION['tipoConta']='Cliente';

                $_SESSION['idUser']=$pass['ID_CLIENTE'];
                header("Location:../../index.php");
            }else {
                echo    "<script language='javascript' type='text/javascript'>alert('Login inválido! Verifique seu Email e Senha e tente novamente.');window.location.href='../login.php';</script>";
                die();
            }
        }
        
        if ($stmLoginVendedor->num_rows > 0) {
            $stmLoginVendedor = $connection->prepare("SELECT SENHA_VENDEDOR FROM TB_VENDEDOR WHERE EMAIL_VENDEDOR=?");
            $stmLoginVendedor->bind_param('s',$userLogin);
            $stmLoginVendedor->execute();
            $dados = $stmLoginVendedor->get_result();
            $pass = $dados->fetch_assoc();

            if (password_verify($userPassword,$pass['SENHA_VENDEDOR'])) {
                session_start();
                $_SESSION['login']=$userLogin;

                $stmGetVendedor = $connection->prepare("SELECT ID_VENDEDOR FROM TB_VENDEDOR WHERE EMAIL_VENDEDOR=?");
                $stmGetVendedor->bind_param('s', $userLogin);
                $stmGetVendedor->execute();
                $getIdVendedor = $stmGetVendedor->get_result();
                $idVendedor = $getIdVendedor->fetch_assoc();

                $_SESSION['tipoConta']='Vendedor';

                $_SESSION['idUser']=$idVendedor['ID_VENDEDOR'];
                header("Location:../../index.php");
            }else {
                echo    "<script language='javascript' type='text/javascript'>alert('Login inválido! Verifique seu Email e Senha e tente novamente.');window.location.href='../login.php';</script>";
                die();
            }
        }else {
            echo    "<script language='javascript' type='text/javascript'>alert('Login inválido! Verifique seu Email e Senha e tente novamente.');window.location.href='../login.php';</script>";
        }
    }

?>