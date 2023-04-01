<?php

include('../../../include/include.php');
$idUser  = $_GET['id'];
$sqlremove = mysqli_query($conn, "DELETE FROM users WHERE idUser = '$idUser'");
if($sqlremove){
    header('Location: ../../AlunosPendente.php');
}
?>