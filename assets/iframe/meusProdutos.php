<?php
    include_once '../routines/connection.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS dos Produtos -->
    <link rel="stylesheet" href="../css/meusProdutos.css?ver=<?=Date('his')?>">

    <!-- Nome da Página -->
    <title>Meus Produtos - ATEMPORAL</title>

    <!-- Ícone da Página -->
    <link rel="shortcut icon" href="./media/favicon.png" type="image/x-icon">



    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <div class="meus-produtos-bg">
            <div class="botoes-bg">
                <div class="botoes" id="novoAnuncio">
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M480 32c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9L381.7 53c-48 48-113.1 75-181 75H192 160 64c-35.3 0-64 28.7-64 64v96c0 35.3 28.7 64 64 64l0 128c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V352l8.7 0c67.9 0 133 27 181 75l43.6 43.6c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V300.4c18.6-8.8 32-32.5 32-60.4s-13.4-51.6-32-60.4V32zm-64 76.7V240 371.3C357.2 317.8 280.5 288 200.7 288H192V192h8.7c79.8 0 156.5-29.8 215.3-83.3z"/></svg>                            </li>
                            <li>
                                <span>Novo Anúncio</span>
                                <p>Crie até 3 anúncios para desapegar rapidinho!</p>
                            </li>
                        </ul>
                    </div>

                    <div class="botoes" id="removerAnuncio">
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V336c0 1.5 0 3.1 .1 4.6L67.6 283c-16-15.2-41.3-14.6-56.6 1.4s-14.6 41.3 1.4 56.6L124.8 448c43.1 41.1 100.4 64 160 64H304c97.2 0 176-78.8 176-176V128c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V32z"/></svg>                            </li>
                            <li>
                                <span>Encerrar Anúncio</span>
                                <p>Ja vendeu ou deseja encerrar o seu anúncio?</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="lista-produtos"></div>
        </div>
    </main>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    const novoAnuncio = document.getElementById('novoAnuncio');
    const removerAnuncio = document.getElementById('removerAnuncio');

    novoAnuncio.addEventListener('click', ()=>{
        window.location.href = "./redirect/novoAnuncio.php";
    })

    removerAnuncio.addEventListener('click', ()=>{
        window.location.href = "./redirect/removerAnuncio.php";
    })
</script>
</html>