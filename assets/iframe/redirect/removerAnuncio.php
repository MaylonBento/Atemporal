<?php
include_once '../../routines/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS do Remover Anuncio -->
    <link rel="stylesheet" href="../../css/removerAnuncio.css?ver=<?= Date('his') ?>">

    <!-- Nome da Página -->
    <title>Encerrar Anúncio - ATEMPORAL</title>

    <!-- Ícone da Página -->
    <link rel="shortcut icon" href="../../media/logo.png" type="image/x-icon">

    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">
</head>

<body onload="buscar()">
    <header>
        <span>Remover Anúncio</span>
    </header>

    <main>
        <div class="main-bg">
            <form action="../../routines/removerAnuncioModal.php" method="post" id="formRemover">
                <div class="input-row">
                    <span class="mb-2">Selecione o Anúncio a ser removido.</span>
                    <ul class="anunciosDisponiveis" id="anunciosDisponiveis"></ul>
                </div>

                <div class="input-row">
                    <span>Motivo</span>
                    <select name="motivo" id="motivo" required>
                        <option value="Vendido">Já Vendi</option>
                        <option value="Desistencia">Desisti da Venda</option>
                    </select>
                </div>

                <input type="submit" value="Remover Anúncio" name="removerAnuncio" id="removerAnuncio">
            </form>
        </div>
    </main>

</body>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>

    function buscar() {
        $.ajax({
            method: 'POST',
            url: '../../routines/buscarAnuncioModal.php',
        })

            .done(function (anunciosAtivos) {
                anuncios = JSON.parse(anunciosAtivos);

                let lista = '';

                for (i = 0; i < anuncios.length; i++) {
                    lista += '<label for="' + anuncios[i].ID_ANUNCIO + '">';
                    lista += '<li>';
                    lista += '<div class="input-radio"><input type=radio name="itemAnuncio" id="' + anuncios[i].ID_ANUNCIO + '" value="' + anuncios[i].ID_ANUNCIO + '"><p>ID#0' + anuncios[i].ID_ANUNCIO + '</p></div>';
                    lista += '<img src="../' + anuncios[i].IMAGEM_ANUNCIO + '?ver=<?php date('his')?>" alt="' + anuncios[i].NOME_ANUNCIO + '" loading="lazy">';
                    lista += '<p>' + anuncios[i].NOME_ANUNCIO + '</p>';
                    lista += '<span>R$ ' + anuncios[i].VALOR_VENDA_ANUNCIO + '</span>';
                    lista += '</li>';
                    lista += '</label>';
                }

                $('#anunciosDisponiveis').append(lista);
            })
    }
</script>

</html>