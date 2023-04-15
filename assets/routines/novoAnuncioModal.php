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

    
    $arqTemp = $_FILES['fotoAnuncio']['tmp_name'];
    $arqNome = $_FILES['fotoAnuncio']['name'];
    
    $pasta = '../media/fotoAnuncio/';
    
    $caminho = $pasta.md5($_SESSION['login'].$arqNome);
    
    if (isset($_POST['criarAnuncio'])) {
        if ($categoriaAnuncio === 'Selecionar') {
            echo "<script language='javascript' type='text/javascript'>alert('Selecione uma Categoria para o seu produto!');window.location.href='../iframe/redirect/novoAnuncio.php';</script>";
            die();
        } else{
            $stmCheckLimit = $connection->prepare("SELECT*FROM TB_ANUNCIO WHERE ID_VENDEDOR=?");
            $stmCheckLimit->bind_param('s', $_SESSION['idUser']);
            $stmCheckLimit->execute();
            $stmCheckLimit->store_result();

            if ($stmCheckLimit->num_rows <= 2) {
                if (@move_uploaded_file($arqTemp,$caminho)) {
                    $stmAnunciar = $connection->prepare("INSERT INTO TB_ANUNCIO(NOME_ANUNCIO,DESC_ANUNCIO,CATEGORIA_ANUNCIO,VALOR_VENDA_ANUNCIO,ID_VENDEDOR,IMAGEM_ANUNCIO) VALUES(?,?,?,?,?,?)");
                    $stmAnunciar->bind_param('ssssss', $tituloAnuncio, $descricaoAnuncio, $categoriaAnuncio, $precoAnuncio, $_SESSION['idUser'], $caminho);
                    
                    if ($stmAnunciar->execute()) {
                        echo "<script language='javascript' type='text/javascript'>alert('Seu produto foi anúnciado com Sucesso!');window.location.href='../iframe/meusProdutos.php';</script>";
                        die();
                    }else {
                        echo 'Ocorreu um Erro ao Anunciar';
                        die();
                    }
                }
            } else{
                echo "<script language='javascript' type='text/javascript'>alert('O limite máximo para anúncios é de 03 Itens por usuário');window.location.href='../iframe/meusProdutos.php';</script>";
            }
        }
    }
?>