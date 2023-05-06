<?php
include_once 'connection.php';

$emailAdmin = filter_input(INPUT_POST, 'emailAdmin');
$senhaAdmin = filter_input(INPUT_POST, 'senhaAdmin');
$confirmarSenhaAdmin = filter_input(INPUT_POST, 'confirmarSenhaAdmin');

if (isset($_POST['signUp'])) {
    if ($senhaAdmin != $confirmarSenhaAdmin) {
        echo "<script language='javascript' type='text/javascript'>alert('As senhas precisam ser iguais!');window.location.href='../../dashboard.php';</script>";
    } else {
        $senhaAdminHashed = password_hash($senhaAdmin, PASSWORD_BCRYPT);
    
        $stmInserir = $connection->prepare("INSERT INTO TB_ADMIN(EMAIL_ADMIN, SENHA_ADMIN) VALUES(?,?)");
        $stmInserir->bind_param('ss', $emailAdmin, $senhaAdminHashed);
        if (!$stmInserir->execute()) {
            echo "<script language='javascript' type='text/javascript'>alert('Falha na inserção dos dados!');window.location.href='../../dashboard.php';</script>";
        } else {
            echo "<script language='javascript' type='text/javascript'>alert('Conta de Administrador cadastrada!');window.location.href='../../dashboard.php';</script>";
        }
    }
}

?>