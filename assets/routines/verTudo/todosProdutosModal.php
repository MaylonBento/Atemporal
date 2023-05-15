<?php
include_once '../connection.php';

$pagina = 1;

$limite = 6;

$inicio = ($pagina * $limite) - $limite;

if (isset($_GET['pagina']))
    $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);

if (!$pagina)
    $pagina = 1;


$stmAnuncios = $connection->prepare("SELECT*FROM TB_ANUNCIO ORDER BY ID_ANUNCIO ASC LIMIT $inicio, $limite");
if ($stmAnuncios->execute()) {
    $res = $stmAnuncios->get_result();
    $row = $res->fetch_all(MYSQLI_ASSOC);

    $resultadoJSON = json_encode($row);
    echo $resultadoJSON;
} else {
    return;
}

?>