<?php
    include_once 'connection.php';

    $stmGetProd = $connection->prepare("SELECT*FROM TB_ANUNCIO WHERE ID_ANUNCIO=?");
    $stmGetProd->bind_param('s', $_COOKIE['produtoId']);
    if (!$stmGetProd->execute()) {
        echo "<script language='javascript' type='text/javascript'>alert('Ocorreu um Erro na Busca pelo Produto!');window.location.href='../../index.php';</script>";
    } else {
        $dados = $stmGetProd->get_result();
        $res = $dados->fetch_all(MYSQLI_ASSOC);

        $resJSON = json_encode($res);
        echo $resJSON;
    }
?>