<?php
session_start();

include_once 'connection.php';

$stmAnuncios = $connection->prepare("SELECT*FROM TB_ANUNCIO WHERE ID_VENDEDOR=?");
$stmAnuncios->bind_param('s', $_SESSION['idUser']);
if ($stmAnuncios->execute()) {
    $res = $stmAnuncios->get_result();
    $row = $res->fetch_assoc();

    $resultadoJSON = json_encode($row);
    echo $resultadoJSON;
}