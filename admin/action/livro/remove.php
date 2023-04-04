<?php

include('../../../include/include.php');
$idLivro  = $_GET['id'];
$sqlremove = mysqli_query($conn, "DELETE FROM livros WHERE idLivro = '$idLivro'");
if($sqlremove){
    header('Location: ../../CadastrarLivro.php');
}
?>