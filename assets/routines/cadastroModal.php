<?php
include_once 'connection.php';

$emailCliente = filter_input(INPUT_POST, 'emailCliente');
$senhaCliente = filter_input(INPUT_POST, 'senhaCliente');
$confirmarSenhaCliente = filter_input(INPUT_POST, 'confirmarSenhaCliente');
$nomeCliente = filter_input(INPUT_POST, 'nomeCliente');
$cpfCliente = filter_input(INPUT_POST, 'cpfCliente');
$foneCliente = filter_input(INPUT_POST, 'foneCliente');
$nascimentoCliente = filter_input(INPUT_POST, 'nascimentoCliente');

$emailVendedor = filter_input(INPUT_POST, 'emailVendedor');
$senhaVendedor = filter_input(INPUT_POST, 'senhaVendedor');
$confirmarSenhaVendedor = filter_input(INPUT_POST, 'confirmarSenhaVendedor');
$nomeVendedor = filter_input(INPUT_POST, 'nomeVendedor');
$cpfVendedor = filter_input(INPUT_POST, 'cpfVendedor');
$foneVendedor = filter_input(INPUT_POST, 'foneVendedor');
$nascimentoVendedor = filter_input(INPUT_POST, 'nascimentoVendedor');

$dataCriacao = date('Y-m-d');

if (isset($_POST['signUpCliente'])) {
    if ($senhaCliente != $confirmarSenhaCliente) {
        echo "<script language='javascript' type='text/javascript'>alert('As Senhas digitadas precisam ser iguais.');window.location.href='../cadastro.php'</script>";
    } else {
        $senhaClienteHashed = password_hash($senhaCliente, PASSWORD_BCRYPT);

        $stmCheckEmail = $connection->prepare("SELECT*FROM TB_CLIENTE WHERE EMAIL_CLIENTE=?");
        $stmCheckEmail->bind_param('s', $emailCliente);
        $stmCheckEmail->execute();
        $stmCheckEmail->store_result();

        if ($stmCheckEmail->num_rows <= 0) {
            $stmCliente = $connection->prepare("INSERT INTO TB_CLIENTE(NOME_CLIENTE,CPF_CLIENTE,FONE_CLIENTE,DTA_NASC_CLIENTE,DTA_CAD_CLIENTE,EMAIL_CLIENTE,SENHA_CLIENTE) VALUES(?,?,?,?,?,?,?)");
            $stmCliente->bind_param('sssssss', $nomeCliente, $cpfCliente, $foneCliente, $nascimentoCliente, $dataCriacao, $emailCliente, $senhaClienteHashed);

            if ($stmCliente->execute()) {
                session_start();
                $_SESSION['login'] = $emailCliente;
                $_SESSION['tipoConta'] = 'Cliente';
                
                $stmGetCliente = $connection->prepare("SELECT*FROM TB_CLIENTE WHERE EMAIL_CLIENTE =?");
                $stmGetCliente->bind_param('s', $emailCliente);

                if ($stmGetCliente->execute()){
                    $getIdCliente = $stmGetCliente->get_result();
                    $idCliente = $getIdCliente->fetch_assoc();

                    $_SESSION['idUser']=$idCliente['ID_CLIENTE'];
                    
                }else {
                    echo "<script language='javascript' type='text/javascript'>alert('Get ID: Ocorreu um erro na inserção dos dados! Verificar DB e arquivo do Cadastro!');window.location.href='../login.php'</script>";
                }

                
                $_SESSION['idUser'];

                header("Location:../minhaConta.php");
            } else {
                echo "<script language='javascript' type='text/javascript'>alert('Ja existe uma conta com os dados inseridos! Faça o Login.');window.location.href='../login.php'</script>";
            }
        } else {
            echo "<script language='javascript' type='text/javascript'>alert('Ja existe uma conta com os dados inseridos! Faça o Login.');window.location.href='../login.php'</script>";
        }
    }
}



if (isset($_POST['signUpVendedor'])) {
    if ($senhaVendedor != $confirmarSenhaVendedor) {
        echo "<script language='javascript' type='text/javascript'>alert('As Senhas digitadas precisam ser iguais.');window.location.href='../cadastro.php'</script>";
    } else {
        $senhaVendedorHashed = password_hash($senhaVendedor, PASSWORD_BCRYPT);

        $stmCheckEmail = $connection->prepare("SELECT*FROM TB_VENDEDOR WHERE EMAIL_VENDEDOR=?");
        $stmCheckEmail->bind_param('s', $emailVendedor);
        $stmCheckEmail->execute();
        $stmCheckEmail->store_result();

        if ($stmCheckEmail->num_rows <= 0) {
            $stmVendedor = $connection->prepare("INSERT INTO TB_VENDEDOR(NOME_VENDEDOR,CPF_VENDEDOR,FONE_VENDEDOR,DTA_NASC_VENDEDOR,DTA_CAD_VENDEDOR,EMAIL_VENDEDOR,SENHA_VENDEDOR) VALUES(?,?,?,?,?,?,?)");
            $stmVendedor->bind_param('sssssss', $nomeVendedor, $cpfVendedor, $foneVendedor, $nascimentoVendedor, $dataCriacao, $emailVendedor, $senhaVendedorHashed);

            if ($stmVendedor->execute()) {
                session_start();
                $_SESSION['login'] = $emailVendedor;
                $_SESSION['tipoConta'] = 'Vendedor';

                $stmGetVendedor = $connection->prepare("SELECT*FROM TB_VENDEDOR WHERE EMAIL_VENDEDOR=?");
                $stmGetVendedor->bind_param('s', $emailVendedor);

                if ($stmGetVendedor->execute()){
                    $getIdVendedor = $stmGetVendedor->get_result();
                    $idVendedor = $getIdVendedor->fetch_assoc();

                    $_SESSION['idUser']=$idVendedor['ID_VENDEDOR'];

                    echo 'ID User: '.$_SESSION['idUser'];
                }else {
                    echo "<script language='javascript' type='text/javascript'>alert('Get ID: Ocorreu um erro na inserção dos dados! Verificar DB e arquivo do Cadastro!');window.location.href='../login.php'</script>";
                }

                header("Location:../minhaConta.php");
            } else {
                echo "<script language='javascript' type='text/javascript'>alert('Ja existe uma conta com os dados inseridos! Faça o Login.');window.location.href='../login.php'</script>";
            }
        } else {
            echo "<script language='javascript' type='text/javascript'>alert('Ja existe uma conta com os dados inseridos! Faça o Login.');window.location.href='../login.php'</script>";

        }
    }
}
?>