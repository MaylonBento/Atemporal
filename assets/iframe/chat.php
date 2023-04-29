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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Nome da Página -->
    <title>Chat - ATEMPORAL</title>

    <!-- Ícone da Página -->
    <link rel="shortcut icon" href="./media/favicon.png" type="image/x-icon">



    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Inter', sans-serif;
        color: gray;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }

    body {
        height: 100vh;
        width: 100%;

        background-color: transparent;
    }

    main {
        height: auto;
        width: 100%;
    }

    .meus-dados-bg {
        width: 100%;
        height: auto;
    }

    form {
        height: auto;
        width: 100%;

        display: flex;
        justify-content: space-between;
        gap: 40px;
    }

    .foto-usuario {
        width: 26%;
        height: auto;

        overflow: hidden;
    }

    .dados-usuario {
        width: 100%;
        height: auto;

        overflow: hidden;
    }

    img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 140px;
        height: 140px;
        object-fit: cover;
        margin-bottom: 10px;
    }
</style>

<body>
    <main>
        <div class="meus-produtos-bg">
            <h1>Chat</h1>
        </div>
    </main>

</body>

</html>