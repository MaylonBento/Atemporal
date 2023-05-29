<?php
include_once '../connection.php';

$pagina = $_GET['pagina'];
$categoria = $_GET['categoria'];

$limite = 6;

$inicio = ($pagina * $limite) - $limite;

if (isset($_GET['pagina']))
    $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);

if (!$pagina)
    $pagina = 1;

if ($categoria != 'todos') {
    $stmAnuncios = $connection->prepare("SELECT*FROM TB_ANUNCIO WHERE CATEGORIA_ANUNCIO=? ORDER BY ID_ANUNCIO LIMIT ?,?");
    $stmAnuncios->bind_param('sss', $categoria, $inicio, $limite);
    if ($stmAnuncios->execute()) {
        $res = $stmAnuncios->get_result();
        $row = $res->fetch_all(MYSQLI_ASSOC);
    
        $resultadoJSON = json_encode($row);
        echo $resultadoJSON;
    } else {
        return;
    }
} else {
    $stmAnuncios = $connection->prepare("SELECT*FROM TB_ANUNCIO ORDER BY ID_ANUNCIO LIMIT ?,?");
    $stmAnuncios->bind_param('ss', $inicio, $limite);
    if ($stmAnuncios->execute()) {
        $res = $stmAnuncios->get_result();
        $row = $res->fetch_all(MYSQLI_ASSOC);
    
        $resultadoJSON = json_encode($row);
        echo $resultadoJSON;
    } else {
        return;
    }
}

?>