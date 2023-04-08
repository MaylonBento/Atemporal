<?php
    $connection = mysqli_connect('localhost', 'root', '', 'Atemporal');

    if (mysqli_connect_errno()) {
        echo "Problema com o Banco de Dados: " . mysqli_connect_error();
        exit();
      }
?>