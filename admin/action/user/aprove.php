<?php

include('../../../include/include.php');
$idUser  = $_GET['id'];
$sqlremove = mysqli_query($conn, "UPDATE users SET status = 'aprovado' WHERE idUser = '$idUser'");
if($sqlremove){
    header('Location: ../../AlunosPendente.php');
}
?>