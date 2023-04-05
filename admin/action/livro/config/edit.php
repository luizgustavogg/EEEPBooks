<?php
include_once("../../../../include/include.php");
session_start();
$titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
$sinopse = mysqli_real_escape_string($conn, $_POST['sinopse']);
$quantidade = mysqli_real_escape_string($conn, $_POST['quantidade']);
$categoria = mysqli_real_escape_string($conn, $_POST['categoria']);
$id = mysqli_real_escape_string($conn, $_POST['id']);

if (!empty($titulo) && !empty($sinopse) && !empty($quantidade) && !empty($categoria)) {

    $titulo = str_replace("img", "____", $titulo);
    $sinopse = str_replace("img", "____", $sinopse);

    $sql = mysqli_query($conn, "UPDATE livros SET titulo = '$titulo', sinopse = '$sinopse', estoque = '$quantidade', FK_idCategoria = '$categoria' WHERE idLivro = '$id'");
    if ($sql) {
        echo "sucesso";
    } else {
        echo "Error ao finalizar tarefa";
    }
} else {
    echo "Preencher todos os campos";
}