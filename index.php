<?php
session_start();
include_once './assets/routines/connection.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS do Index -->
    <link rel="stylesheet" href="./assets/css/index.css?ver=<?= Date('his') ?>">



    <!-- Nome da Página -->
    <title>Atemporal, o Melhor das Antiguidades!</title>

    <!-- Ícone da Página -->
    <link rel="shortcut icon" href="./assets/media/logo.png" type="image/x-icon">



    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">
</head>

<body onload="recentes(), antigos(), colecionaveis(), utensilios(), moveis(), eletronicos(), roupas()">
    <header>

        <!-- Redes Sociais / Área do Cliente -->
        <div class="socials-customers-bg">
            <a href="" id="top"></a>
            <div class="socials-customers">
                <div class="socials">
                    <ul>
                        <li>
                            <a href="http://facebook.com/2023atemporal" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="white"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="http://twitter.com/2023atemporal" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="white"
                                    class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/1814_atemporal_antiguidades" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="white"
                                    class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>



                <!-- Área do Cliente -->
                <div class="customers-area">
                    <ul>
                        <li><a href="./assets/minhaConta.php">Minha Conta</a></li>
                        <li><a href="./assets/suporte.php">Atendimento</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </header>

    <main>
        <!-- Barra de Navegação Fixa -->
        <div class="fixed-nav-bg">
            <div class="fixed-nav">
                <div class="shop-name">
                    <a href="index.php">
                        <img src="./assets/media/logo.png" alt="Atemporal Antiguidades" height="50px" width="auto">
                    </a>
                </div>

                <div class="search-field">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="O que esta procurando?"
                            aria-label="O que esta procurando?" aria-describedby="button-addon2">
                        <button class="btn btn-light btn-outline-silent" type="button" id="button-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="user-login">
                    <div class="input-group">
                        <button class="btn-lg navbar-toggler" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white"
                                class="bi bi-person-circle me-2" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg><span style="color: white;">Login</button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                            <li><a class="dropdown-item" href="./assets/minhaConta.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-house-fill me-1" viewBox="0 0 16 16">
                                        <path
                                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                                        <path
                                            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                                    </svg>Minha Conta</a></li>

                            <li><a class="dropdown-item" href="./assets/purchases.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-heart-fill me-1" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                    </svg>Meus Pedidos</a></li>

                            <li><a class="dropdown-item" href="./assets/support.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-question-circle-fill me-1" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                                    </svg>Atendimento</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./assets/sair.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-box-arrow-left me-1" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                        <path fill-rule="evenodd"
                                            d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                    </svg>Sair</a></li>
                        </ul>
                    </div>
                </div>

                <div class="user-cart">
                    <a href="./assets/cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-cart2"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="categories-bg">
            <div class="categories">
                <ul>
                    <li id="special-currency">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M146 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3C4.9 411.4-2.4 392.5 4.8 376.3s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C105.4 279.3 70.4 270 44.4 253c-14.2-9.3-27.5-22-35.8-39.6C.3 195.4-1.4 175.4 2.5 154.1C9.7 116 38.3 91.2 70.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z" />
                            </svg><!-- Promoção -->
                        </a>
                        <span>Promoção</span>
                    </li>

                    <li>
                        <a href="./assets/verTudo.php">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M264.5 5.2c14.9-6.9 32.1-6.9 47 0l218.6 101c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 149.8C37.4 145.8 32 137.3 32 128s5.4-17.9 13.9-21.8L264.5 5.2zM476.9 209.6l53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 277.8C37.4 273.8 32 265.3 32 256s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0l152-70.2zm-152 198.2l152-70.2 53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 405.8C37.4 401.8 32 393.3 32 384s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0z" />
                            </svg><!-- Todas as Categorias -->
                        </a>
                        <span>Ver Tudo</span>
                    </li>

                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M4.1 38.2C1.4 34.2 0 29.4 0 24.6C0 11 11 0 24.6 0H133.9c11.2 0 21.7 5.9 27.4 15.5l68.5 114.1c-48.2 6.1-91.3 28.6-123.4 61.9L4.1 38.2zm503.7 0L405.6 191.5c-32.1-33.3-75.2-55.8-123.4-61.9L350.7 15.5C356.5 5.9 366.9 0 378.1 0H487.4C501 0 512 11 512 24.6c0 4.8-1.4 9.6-4.1 13.6zM80 336a176 176 0 1 1 352 0A176 176 0 1 1 80 336zm184.4-94.9c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z" />
                            </svg><!-- Colecionaveis -->
                        </a>
                        <span>Colecionáveis</span>
                    </li>

                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M281.2 248.9C295.6 228.3 304 203.2 304 176c0-70.7-57.3-128-128-128S48 105.3 48 176c0 27.2 8.4 52.3 22.8 72.9c3.7 5.3 8.1 11.3 12.8 17.7l0 0c12.9 17.7 28.3 38.9 39.8 59.8c10.4 19 15.7 38.8 18.3 57.5H93c-2.2-12-5.9-23.7-11.8-34.5c-9.9-18-22.2-34.9-34.5-51.8l0 0 0 0c-5.2-7.1-10.4-14.2-15.4-21.4C11.6 247.9 0 213.3 0 176C0 78.8 78.8 0 176 0s176 78.8 176 176c0 37.3-11.6 71.9-31.4 100.3c-5 7.2-10.2 14.3-15.4 21.4l0 0 0 0c-12.3 16.8-24.6 33.7-34.5 51.8c-5.9 10.8-9.6 22.5-11.8 34.5H210.4c2.6-18.7 7.9-38.6 18.3-57.5c11.5-20.9 26.9-42.1 39.8-59.8l0 0 0 0 0 0c4.7-6.4 9-12.4 12.7-17.7zM176 128c-26.5 0-48 21.5-48 48c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-44.2 35.8-80 80-80c8.8 0 16 7.2 16 16s-7.2 16-16 16zm0 384c-44.2 0-80-35.8-80-80V416H256v16c0 44.2-35.8 80-80 80z" />
                            </svg><!-- Utensilios -->
                        </a>
                        <span>Utensílios</span>
                    </li>

                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M0 32V64H320V32c0-17.7-14.3-32-32-32H32C14.3 0 0 14.3 0 32zM24 96H0v24V488c0 13.3 10.7 24 24 24s24-10.7 24-24v-8H272v8c0 13.3 10.7 24 24 24s24-10.7 24-24V120 96H296 24zM256 240v64c0 8.8-7.2 16-16 16s-16-7.2-16-16V240c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                            </svg><!-- Móveis -->
                        </a>
                        <span>Móveis</span>
                    </li>

                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M320 0c17.7 0 32 14.3 32 32V96H472c39.8 0 72 32.2 72 72V440c0 39.8-32.2 72-72 72H168c-39.8 0-72-32.2-72-72V168c0-39.8 32.2-72 72-72H288V32c0-17.7 14.3-32 32-32zM208 384c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H208zm96 0c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H304zm96 0c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H400zM264 256a40 40 0 1 0 -80 0 40 40 0 1 0 80 0zm152 40a40 40 0 1 0 0-80 40 40 0 1 0 0 80zM48 224H64V416H48c-26.5 0-48-21.5-48-48V272c0-26.5 21.5-48 48-48zm544 0c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H576V224h16z" />
                            </svg><!-- Eletrônicos -->
                        </a>
                        <span>Eletrônicos</span>
                    </li>

                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z" />
                            </svg><!-- Vestuário -->
                        </a>
                        <span>Vestuário</span>
                    </li>
                </ul>
            </div>
        </div>



        <!-- Banner Principal -->
        <div class="main-carousel">
            <div class="carousel-box">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="">
                                <img src="./assets/media/banners/primeiro-big.jpg" class="d-block" alt="..."
                                    height="auto" width="100%">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="">
                                <img src="./assets/media/banners/segundo-big.jpg" class="d-block" alt="..."
                                    height="auto" width="100%">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="">
                                <img src="./assets/media/banners/terceiro-big.jpg" class="d-block" alt="..."
                                    height="auto" width="100%">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="">
                                <img src="./assets/media/banners/quarto-big.jpg" class="d-block" alt="..." height="auto"
                                    width="100%">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Produtos em Destaque -->
        <div class="products-showcase-bg">
            <div class="row-tittle">
                <span>ANÚNCIOS RECENTES</span>
                <p>AS MELHORES OFERTAS PARA VOCÊ</p>
                <section></section>
            </div>

            <div class="products-showcase">

                <!-- Anúncios Recentes -->
                <div class="showcase-recentes">
                    <ul id="anunciosRecentesUl"></ul>
                </div>
            </div>

            <div class="banner-meio-bg">
                <div class="banner-meio-content">

                    <!-- Logo e nome da página no Footer -->
                    <div class="banner-meio">
                        <img src="./assets/media/banners/primeiro-small.jpg" alt="Favicon" loading="lazy">
                    </div>

                </div>
            </div>

            <div class="row-tittle">
                <span>AINDA ESTA DISPONÍVEL</span>
                <p>PRODUTOS MAIS ANTIGOS</p>
                <section></section>
            </div>

            <div class="products-showcase">

                <!-- Ofertas Antigas -->
                <div class="showcase-antigos">
                    <ul id="anunciosAntigosUl"></ul>
                </div>
            </div>



            <div class="banner-meio-bg">
                <div class="banner-meio-content">

                    <!-- Logo e nome da página no Footer -->
                    <div class="banner-meio">
                        <img src="./assets/media/banners/terceiro-small.jpg" alt="Favicon" loading="lazy">
                    </div>

                </div>
            </div>



            <div class="row-tittle">
                <span>MELHORES COLECIONÁVEIS</span>
                <p>AS MELHORES OFERTAS PARA VOCÊ</p>
                <section></section>
            </div>


            <div class="products-showcase">
                <div class="showcase-melhores">
                    <ul id="anunciosColecionaveisUl"></ul>
                </div>
            </div>


            <div class="row-tittle">
                <span>MELHORES UTENSÍLIOS</span>
                <p>AS MELHORES OFERTAS PARA VOCÊ</p>
                <section></section>
            </div>

            <div class="products-showcase">
                <div class="showcase-melhores">
                    <ul id="anunciosUtensiliosUl"></ul>
                </div>
            </div>



            <div class="row-tittle">
                <span>MELHORES MÓVEIS</span>
                <p>AS MELHORES OFERTAS PARA VOCÊ</p>
                <section></section>
            </div>

            <div class="products-showcase">
                <div class="showcase-melhores">
                    <ul id="anunciosMoveisUl"></ul>
                </div>
            </div>




            <div class="row-tittle">
                <span>MELHORES ELETRÔNICOS</span>
                <p>AS MELHORES OFERTAS PARA VOCÊ</p>
                <section></section>
            </div>

            <div class="products-showcase">
                <div class="showcase-melhores">
                    <ul id="anunciosEletronicosUl"></ul>
                </div>
            </div>




            <div class="row-tittle">
                <span>MELHORES ROUPAS</span>
                <p>AS MELHORES OFERTAS PARA VOCÊ</p>
                <section></section>
            </div>

            <div class="products-showcase">
                <div class="showcase-melhores">
                    <ul id="anunciosRoupasUl"></ul>
                </div>
            </div>
        </div>


    </main>





    <footer>

        <div class="footer-bg">
            <div class="footer-content">

                <!-- Logo e nome da página no Footer -->
                <div class="footer-logo">
                    <img src="./assets/media/logo.png" alt="Favicon">
                </div>

                <!-- Referencias -->
                <div class="footer-references">
                    <h6>Sobre nós</h6>

                    <span>
                        Somos a Atemporal Antiguidades, uma loja com foco em antiguidades.
                        Nosso objetivo é trazer segurança e confiança para você vender e comprar.
                    </span>
                </div>
            </div>

            <!-- Voltar ao Topo -->
            <a href="#top" id="back-to-top">
                <div class="to-top">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z" />
                        </svg>
                        Voltar ao Topo
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z" />
                        </svg>
                    </span>
                </div>
            </a>

            <!-- Resto-->
            <div class="rest">
                <ul>
                    <span>Institucional</span>
                    <li>
                        <a href="./assets/sobreNos.php">Sobre Nós</a>
                    </li>

                    <li>
                        <a href="./assets/politicaCookies.php">Política de Cookies</a>
                    </li>

                    <li>
                        <a href="./assets/termosVendas.php">Termos e Condições de Venda</a>
                    </li>

                    <li>
                        <a href="./assets/politicaPrivacidade.php">Política de Privacidade</a>
                    </li>
                </ul>

                <ul>
                    <span>Cliente</span>
                    <li>
                        <a href="./assets/minhaConta.php">Minha Conta</a>
                    </li>
                    <li>
                        <a href="./assets/meusTickets.php">Meus Tickets</a>
                    </li>
                </ul>

                <ul>
                    <span>FAQ</span>
                    <li>
                        <a href="./assets/faq.php">FAQ - Orientações</a>
                    </li>
                </ul>

                <ul>
                    <span>Ajuda</span>
                    <li>
                        <a href="./assets/faleConosco.php">Fale Conosco</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>



    <!-- CHANGELOG -->
    <a href="./references/changelog.html" id="changelog" target="_blank">Changelog</a>
</body>

<!-- Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>

    function recentes() {
        $.ajax({
            method: 'POST',
            url: './assets/routines/index/recentesModal.php',
        })

            .done(function (anunciosAtivos) {
                anuncios = JSON.parse(anunciosAtivos);

                let lista = '';

                for (i = 0; i < anuncios.length; i++) {
                    lista += '<li>';
                    lista += '<img src="./assets/routines/' + anuncios[i].IMAGEM_ANUNCIO + '" alt="Anuncio">';
                    lista += '<p>' + anuncios[i].NOME_ANUNCIO + '</p>';
                    lista += '<span>R$ ' + anuncios[i].VALOR_VENDA_ANUNCIO + '</span>';
                    lista += '</li>';
                }

                $('#anunciosRecentesUl').append(lista);
            })
    }

    function antigos() {
        $.ajax({
            method: 'POST',
            url: './assets/routines/index/antigosModal.php',
        })

            .done(function (anunciosAtivos) {
                anuncios = JSON.parse(anunciosAtivos);

                let lista = '';

                for (i = 0; i < anuncios.length; i++) {
                    lista += '<li>';
                    lista += '<img src="./assets/routines/' + anuncios[i].IMAGEM_ANUNCIO + '" alt="Anuncio">';
                    lista += '<p>' + anuncios[i].NOME_ANUNCIO + '</p>';
                    lista += '<span>R$ ' + anuncios[i].VALOR_VENDA_ANUNCIO + '</span>';
                    lista += '</li>';
                }

                $('#anunciosAntigosUl').append(lista);
            })
    }

    function colecionaveis() {
        $.ajax({
            method: 'POST',
            url: './assets/routines/index/colecionaveisModal.php',
        })

            .done(function (anunciosAtivos) {
                anuncios = JSON.parse(anunciosAtivos);

                let lista = '';

                for (i = 0; i < anuncios.length; i++) {
                    lista += '<li>';
                    lista += '<img src="./assets/routines/' + anuncios[i].IMAGEM_ANUNCIO + '" alt="Anuncio">';
                    lista += '<p>' + anuncios[i].NOME_ANUNCIO + '</p>';
                    lista += '<span>R$ ' + anuncios[i].VALOR_VENDA_ANUNCIO + '</span>';
                    lista += '</li>';
                }

                $('#anunciosColecionaveisUl').append(lista);
            })
    }

    function utensilios() {
        $.ajax({
            method: 'POST',
            url: './assets/routines/index/utensiliosModal.php',
        })

            .done(function (anunciosAtivos) {
                anuncios = JSON.parse(anunciosAtivos);

                let lista = '';

                for (i = 0; i < anuncios.length; i++) {
                    lista += '<li>';
                    lista += '<img src="./assets/routines/' + anuncios[i].IMAGEM_ANUNCIO + '" alt="Anuncio">';
                    lista += '<p>' + anuncios[i].NOME_ANUNCIO + '</p>';
                    lista += '<span>R$ ' + anuncios[i].VALOR_VENDA_ANUNCIO + '</span>';
                    lista += '</li>';
                }

                $('#anunciosUtensiliosUl').append(lista);
            })
    }

    function moveis() {
        $.ajax({
            method: 'POST',
            url: './assets/routines/index/moveisModal.php',
        })

            .done(function (anunciosAtivos) {
                anuncios = JSON.parse(anunciosAtivos);

                let lista = '';

                for (i = 0; i < anuncios.length; i++) {
                    lista += '<li>';
                    lista += '<img src="./assets/routines/' + anuncios[i].IMAGEM_ANUNCIO + '" alt="Anuncio">';
                    lista += '<p>' + anuncios[i].NOME_ANUNCIO + '</p>';
                    lista += '<span>R$ ' + anuncios[i].VALOR_VENDA_ANUNCIO + '</span>';
                    lista += '</li>';
                }

                $('#anunciosMoveisUl').append(lista);
            })
    }

    function eletronicos() {
        $.ajax({
            method: 'POST',
            url: './assets/routines/index/eletronicosModal.php',
        })

            .done(function (anunciosAtivos) {
                anuncios = JSON.parse(anunciosAtivos);

                let lista = '';

                for (i = 0; i < anuncios.length; i++) {
                    lista += '<li>';
                    lista += '<img src="./assets/routines/' + anuncios[i].IMAGEM_ANUNCIO + '" alt="Anuncio">';
                    lista += '<p>' + anuncios[i].NOME_ANUNCIO + '</p>';
                    lista += '<span>R$ ' + anuncios[i].VALOR_VENDA_ANUNCIO + '</span>';
                    lista += '</li>';
                }

                $('#anunciosEletronicosUl').append(lista);
            })
    }

    function roupas() {
        $.ajax({
            method: 'POST',
            url: './assets/routines/index/roupasModal.php',
        })

            .done(function (anunciosAtivos) {
                anuncios = JSON.parse(anunciosAtivos);

                let lista = '';

                for (i = 0; i < anuncios.length; i++) {
                    lista += '<li>';
                    lista += '<img src="./assets/routines/' + anuncios[i].IMAGEM_ANUNCIO + '" alt="Anuncio">';
                    lista += '<p>' + anuncios[i].NOME_ANUNCIO + '</p>';
                    lista += '<span>R$ ' + anuncios[i].VALOR_VENDA_ANUNCIO + '</span>';
                    lista += '</li>';
                }

                $('#anunciosRoupasUl').append(lista);
            })
    }
</script>

</html>