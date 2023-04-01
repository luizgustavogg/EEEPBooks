<?php

include('../../../include/include.php');
$idCategoria  = $_GET['id'];
$sqlremove = mysqli_query($conn, "DELETE FROM categoria WHERE idCategoria = '$idCategoria'");
if($sqlremove){
    header('Location: ../../CadastrarCategoria.php');
}
?>