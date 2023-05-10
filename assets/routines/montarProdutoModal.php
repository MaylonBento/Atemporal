<?php
include_once 'connection.php';

$produtoId = $_GET['produtoId'];

$stmGetProd = $connection->prepare("SELECT TB_ANUNCIO.*, TB_VENDEDOR.NOME_VENDEDOR, TB_VENDEDOR.FONE_VENDEDOR FROM TB_ANUNCIO JOIN TB_VENDEDOR ON TB_ANUNCIO.ID_VENDEDOR=TB_VENDEDOR.ID_VENDEDOR WHERE ID_ANUNCIO=?");
$stmGetProd->bind_param('s', $produtoId);
if (!$stmGetProd->execute()) {
    echo "<script language='javascript' type='text/javascript'>alert('Ocorreu um Erro na Busca pelo Produto!');window.location.href='../../index.php';</script>";
} else {
    $dados = $stmGetProd->get_result();
    $res = $dados->fetch_all(MYSQLI_ASSOC);

    $resJSON = json_encode($res);
    echo $resJSON;
}
