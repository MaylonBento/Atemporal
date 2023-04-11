<?php
    include_once 'connection.php';
    
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location:../login.php");
        exit();
    }

    $tituloAnuncio = filter_input(INPUT_POST, 'tituloAnuncio');
    $descricaoAnuncio = filter_input(INPUT_POST, 'descricaoAnuncio');
    $categoriaAnuncio = filter_input(INPUT_POST, 'categoriaAnuncio');
    $precoAnuncio = filter_input(INPUT_POST, 'precoAnuncio');

    if (isset($_POST['criarAnuncio'])) {
        echo $_SESSION['tipoConta'];
        echo $_SESSION['idUser'];

        /* $stmCriar = $connection->prepare("INSERT INTO TB_ANUNCIO(NOME_ANUNCIO,DESC_ANUNCIO,CATEGORIA_ANUNCIO,VALOR_VENDA_ANUNCIO,ID_VENDEDOR) VALUES(?,?,?,?,?)");
        $stmCriar->bind_param('sssss', $tituloAnuncio, $descricaoAnuncio, $categoriaAnuncio, $precoAnuncio, $idVendedor);
        
        if ($stmCriar->execute()) {
            echo 'Foi';
            die();
        }else {
            echo 'Não foi';
            die();
        } */
    }
?>