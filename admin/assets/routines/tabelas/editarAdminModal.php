<?php
include_once '../connection.php';

$emailAdmin = filter_input(INPUT_POST, 'emailAdminBuscar');

$stmBuscar = $connection->prepare("SELECT*FROM TB_ADMIN WHERE EMAIL_ADMIN=?");
$stmBuscar->bind_param('s', $emailAdmin);
if (!$stmBuscar->execute()) {
    echo "<script language='javascript' type='text/javascript'>alert('Você precisa digitar um Email válido');window.location.href='../../dashboard.php';</script>";
} else {
    $res = $stmBuscar->get_result();
    $dados = $res->fetch_all(MYSQLI_ASSOC);

    $resultadoJSON = json_encode($dados);
    echo $resultadoJSON;
}
