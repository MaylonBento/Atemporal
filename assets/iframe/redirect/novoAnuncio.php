<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS do Index -->
    <link rel="stylesheet" href="../../css/novoAnuncio.css">

    <!-- Nome da Página -->
    <title>Criar um Anúncio - ATEMPORAL</title>

    <!-- Ícone da Página -->
    <link rel="shortcut icon" href="../../media/logo.png" type="image/x-icon">

    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <span>Inserir novo Anúncio</span>
    </header>

    <main>
        <div class="main-bg">
            <form action="../../routines/novoAnuncioModal.php" method="post">
                <div class="input-row">
                    <span>Título</span>
                    <input type="text" name="tituloAnuncio" id="tituloAnuncio">
                </div>

                <div class="input-row">
                    <span>Descrição</span>
                    <input type="text" name="descricaoAnuncio" id="descricaoAnuncio">
                </div>

                <div class="input-row">
                    <span>Categoria</span>
                    <select name="categoriaAnuncio" id="categoriaAnuncio">
                        <option value="selecionar">Selecionar</option>
                        <option value="colecionaveis">Colecionáveis</option>
                        <option value="utensilios">Utensílios</option>
                        <option value="moveis">Móveis</option>
                        <option value="eletronicos">Eletrônicos</option>
                        <option value="vestuario">Vestuário</option>
                    </select>
                </div>

                <div class="input-row">
                    <span>Preço</span>
                    <input type="text" name="precoAnuncio" id="precoAnuncio" minlength="1" maxlength="9">
                </div>

                <div class="input-row">
                    <input type="submit" value="Anúnciar" name="criarAnuncio" id="criarAnuncio">
                </div>
            </form>
        </div>
    </main>
    
</body>
<script>
    const precoAnuncio = document.getElementById('precoAnuncio');

    precoAnuncio.addEventListener("keypress", () => {
    const precoValue = precoAnuncio.value.replace(/[^0-9]/g, "").replace(/^([\d]{6})([\d]{2})?/, "$1.$2");
    
    precoAnuncio.value = precoValue;
    });
</script>
</html>