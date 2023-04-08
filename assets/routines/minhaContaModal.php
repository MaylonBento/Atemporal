<?php 

    include_once 'connection.php';

    $emailCliente = filter_input(INPUT_POST,'emailCliente');
    $senhaCliente = filter_input(INPUT_POST, 'senhaCliente');
    $confirmarSenhaCliente = filter_input(INPUT_POST, 'confirmarSenhaCliente');
    $nomeCliente = filter_input(INPUT_POST, 'nomeCliente');
    $cpfCliente = filter_input(INPUT_POST, 'cpfCliente');
    $foneCliente = filter_input(INPUT_POST, 'foneCliente');
    $nascimentoCliente = filter_input(INPUT_POST, 'nascimentoCliente');

?>