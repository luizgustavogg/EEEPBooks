<?php
include_once("../../../include/include.php");
session_start();
$titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
if (!empty($titulo)) {
    $random_id = rand(time(), 10000000);
    $time = time();
    $hoje = date('d/m/Y');
    $titulo = str_replace("img", "____", $titulo);
    $sql = mysqli_query($conn, "INSERT INTO categoria(idCategoria, datac, titulo)
           VALUES ('$random_id', '$hoje', '$titulo')");
    if ($sql) {
        echo "sucesso";
    } else {
        echo "Error ao finalizar tarefa";
    }
} else {
    echo "preencher todos os campos";
}