<?php
    include_once 'connection.php';

    $dataVenda = date('Y-m-d');
    $radioButton = filter_input(INPUT_POST, 'itemAnuncio');
    $motivoVenda = filter_input(INPUT_POST, 'motivo');

    if (isset($_POST['removerAnuncio'])) {
        $stmGetAnuncio = $connection->prepare("SELECT*FROM TB_ANUNCIO WHERE ID_ANUNCIO=?");
        $stmGetAnuncio->bind_param('s', $radioButton);
        if ($stmGetAnuncio->execute()) {
            $dados = $stmGetAnuncio->get_result();
            while ($variaveis = $dados->fetch_assoc()) {
                $idAnuncio = $variaveis['ID_ANUNCIO'];
                $nomeAnuncio = $variaveis['NOME_ANUNCIO'];
                $categoriaAnuncio = $variaveis['CATEGORIA_ANUNCIO'];
                $descAnuncio = $variaveis['DESC_ANUNCIO'];
                $valorVendaAnuncio = $variaveis['VALOR_VENDA_ANUNCIO'];
                $idVendedor = $variaveis['ID_VENDEDOR'];
                $imagemAnuncio = $variaveis['IMAGEM_ANUNCIO'];
                $dataAnuncio = $variaveis['DTA_ANUNCIO'];
            }

            $stmRemoveAnuncio = $connection->prepare("DELETE FROM TB_ANUNCIO WHERE ID_ANUNCIO=?");
            $stmRemoveAnuncio->bind_param('s', $idAnuncio);
            if ($stmRemoveAnuncio->execute()) {
                $stmMover = $connection->prepare("INSERT INTO TB_VENDA(DTA_VENDA,MOTIVO_VENDA,ID_ANUNCIO,NOME_ANUNCIO,CATEGORIA_ANUNCIO,VALOR_VENDA,DESC_ANUNCIO,ID_VENDEDOR,IMAGEM_ANUNCIO,DTA_ANUNCIO) VALUES(?,?,?,?,?,?,?,?,?,?)");
                $stmMover->bind_param('ssssssssss', $dataVenda, $motivoVenda, $idAnuncio, $nomeAnuncio, $categoriaAnuncio, $valorVendaAnuncio, $descAnuncio, $idVendedor, $imagemAnuncio, $dataAnuncio);
                if ($stmMover->execute()) {
                    echo "<script language='javascript' type='text/javascript'>alert('Seu anúncio foi removido com sucesso!');window.location.href='../iframe/meusProdutos.php'</script>";
                } else {
                    echo "<script language='javascript' type='text/javascript'>alert('Ocorreu um erro na inserção dos dados! Verificar DB e os Dados fornecidos!');window.location.href='../iframe/meusProdutos.php'</script>";
                }

            } else {
                echo "<script language='javascript' type='text/javascript'>alert('Ocorreu um erro ao Remover Dados! Verificar DB e os Dados fornecidos!');window.location.href='../iframe/meusProdutos.php'</script>";
            }

        } else {
            echo "<script language='javascript' type='text/javascript'>alert('Você precisa Selecionar um Anúncio a ser Removido!');window.location.href='../iframe/meusProdutos.php'</script>";
        }
    }
?>