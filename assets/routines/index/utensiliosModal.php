<?php
include_once '../connection.php';

$stmAnuncios = $connection->prepare("SELECT*FROM TB_ANUNCIO WHERE CATEGORIA_ANUNCIO='utensilios' ORDER BY VALOR_VENDA_ANUNCIO ASC LIMIT 6");
if ($stmAnuncios->execute()) {
    $res = $stmAnuncios->get_result();
    $row = $res->fetch_all(MYSQLI_ASSOC);

    $resultadoJSON = json_encode($row);
    echo $resultadoJSON;
} else {
    return;
}

?>