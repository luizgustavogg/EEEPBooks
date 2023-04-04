<?php
include_once("../../../../include/include.php");
session_start();
$titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
$id = mysqli_real_escape_string($conn, $_POST['id']);

if (!empty($titulo)) {

    $titulo = str_replace("img", "____", $titulo);
    $sql = mysqli_query($conn, "UPDATE categoria SET titulo = '$titulo' WHERE idCategoria = '$id'");
    if ($sql) {
        echo "sucesso";
    } else {
        echo "Error ao finalizar tarefa";
    }
} else {
    echo "Preencher todos os campos";
}