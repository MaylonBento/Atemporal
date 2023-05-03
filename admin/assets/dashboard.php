<?php
include_once './routines/semLogin.php';
include_once './routines/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- CSS do Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!-- CSS do Dashboard -->
<link rel="stylesheet" href="./css/dashboard.css">

<body onload="tabelas()">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tabelas Disponíveis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav" id="tabelasDisponiveis"></ul>
            </div>
        </div>
    </nav>

    <iframe src="" frameborder="0"></iframe>
</body>

<!-- Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
    function tabelas() {
        $.ajax({
            method: 'POST',
            url: './routines/dashboard/tabelasModal.php',
        })

            .done(function (tabelasDisponiveis) {
                tabelas = JSON.parse(tabelasDisponiveis);

                let lista = '';

                for (i = 0; i < tabelas.length; i++) {
                    lista += '<li class="nav-item dropdown">';
                    lista += '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">' + tabelas[i].Tables_in_atemporal + '</a>';
                    lista += '<ul class="dropdown-menu" id="' + tabelas[i].Tables_in_atemporal + '">';
                    lista += '<li id="inserir_' + tabelas[i].Tables_in_atemporal + '"><a class="dropdown-item" href="#" onclick="metodos(`inserir`)">Inserir</a></li>';
                    lista += '<li id="editar_' + tabelas[i].Tables_in_atemporal + '"><a class="dropdown-item" href="#" onclick="metodos(`editar`)">Editar</a></li>';
                    lista += '<li id="pesquisar_' + tabelas[i].Tables_in_atemporal + '"><a class="dropdown-item" href="#" onclick="metodos(`pesquisar`)">Pesquisar</a></li>';
                    lista += '<li><hr class="dropdown-divider"></li>';
                    lista += '<li id="excluir_' + tabelas[i].Tables_in_atemporal + '"><a class="dropdown-item" href="#" onclick="metodos(`excluir`)">Excluir</a></li>';
                    lista += '</ul>';
                    lista += '</li>';
                }

                $('#tabelasDisponiveis').append(lista);
            })
    }

    function metodos(a) {
        switch (a) {
            case 'inserir':
                alert('Inserir');
                break;

            case 'editar':
                alert('editar');
                break;

            case 'pesquisar':
                alert('pesquisar');
                break;

            case 'excluir':
                alert('excluir');
                break;
        };
    }
</script>

</html>