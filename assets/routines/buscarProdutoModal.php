<?php
include_once 'connection.php';

$pesquisa = $_GET['pesquisa'];
$pagina = $_GET['pagina'];

$limite = 6;

$inicio = ($pagina * $limite) - $limite;

$stmAnuncios = $connection->prepare("SELECT*FROM TB_ANUNCIO WHERE NOME_ANUNCIO REGEXP (?) ORDER BY DTA_ANUNCIO DESC LIMIT ?,?");
$stmAnuncios->bind_param('sss', $pesquisa, $inicio, $limite);
if ($stmAnuncios->execute()) {
    $res = $stmAnuncios->get_result();
    $row = $res->fetch_all(MYSQLI_ASSOC);

    $resultadoJSON = json_encode($row);
    echo $resultadoJSON;
} else {
    return;
}
