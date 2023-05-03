<?php
include_once 'connection.php';

$userLogin = filter_input(INPUT_POST, 'userEmail');
$userPassword = filter_input(INPUT_POST, 'userPassword');

if (isset($_POST['btnEntrar'])) {
    $stmLoginAdmin = $connection->prepare("SELECT SENHA_ADMIN FROM TB_ADMIN WHERE EMAIL_ADMIN=?");
    $stmLoginAdmin->bind_param('s', $userLogin);

    if ($stmLoginAdmin->execute()) {
        $stmLoginAdmin->store_result();

        if ($stmLoginAdmin->num_rows > 0) {
            $stmLoginAdmin = $connection->prepare("SELECT SENHA_ADMIN FROM TB_ADMIN WHERE EMAIL_ADMIN=?");
            $stmLoginAdmin->bind_param('s', $userLogin);
            $stmLoginAdmin->execute();
            $dados = $stmLoginAdmin->get_result();
            $pass = $dados->fetch_assoc();

            if (password_verify($userPassword, $pass['SENHA_ADMIN'])) {
                session_destroy();
                session_start();
                $_SESSION['admin'] = $userLogin;

                $stmGetAdmin = $connection->prepare("SELECT ID_ADMIN FROM TB_ADMIN WHERE EMAIL_ADMIN=?");
                $stmGetAdmin->bind_param('s', $userLogin);
                $stmGetAdmin->execute();
                $getIdAdmin = $stmGetAdmin->get_result();
                $idAdmin = $getIdAdmin->fetch_assoc();

                $_SESSION['tipoConta'] = 'Admin';

                $_SESSION['idUser'] = $idAdmin['ID_ADMIN'];
                header("Location:../dashboard.php");
            } else {
                echo "<script language='javascript' type='text/javascript'>alert('Login inválido! Verifique seu Email e Senha e tente novamente.');window.location.href='../index.php';</script>";
                die();
            }
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Login inválido! Verifique seu Email e Senha e tente novamente.');window.location.href='../index.php';</script>";
    }
}
