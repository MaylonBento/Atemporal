<?php
include_once '../connection.php';

$stmTabelas = $connection->prepare("SHOW TABLES;");
if ($stmTabelas->execute()) {
    $res = $stmTabelas->get_result();
    $row = $res->fetch_all(MYSQLI_ASSOC);

    $resultadoJSON = json_encode($row);
    echo $resultadoJSON;
} else {
    return;
}

?>