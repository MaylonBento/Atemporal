<?php
    $connection = mysqli_connect('localhost', 'root', '', 'Atemporal');
    $connection-> set_charset("utf8");

    if (mysqli_connect_errno()) {
        echo "Problema com o Banco de Dados: " . mysqli_connect_error();
        exit();
      }
?>