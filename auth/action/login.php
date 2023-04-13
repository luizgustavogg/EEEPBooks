<?php
session_start();

include_once("../../include/include.php");
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, md5($_POST['senha']));

$sql01 = mysqli_query($conn, "SELECT * FROM users WHERE email  = '$email'");
if (!empty($email) && !empty($senha)) { // Ver se o campo ta vazio
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validar a extensão o email
        if (mysqli_num_rows($sql01) == 0) { // Verificar se tem alguma conta com este email
            echo "Conta não encontrada";
        }
        if (mysqli_num_rows($sql01) == 1) { // Dps da verificação do email
            $sql02 = mysqli_query($conn, "SELECT * FROM users WHERE email  = '$email' AND senha = '$senha'");
            if (mysqli_num_rows($sql02) == 0) { // Validar a senha do email encontrado
                echo "Sua senha ou email está incorreta. Confira-a.";
            } elseif (mysqli_num_rows($sql02) == 1) { 
                $sql04 = mysqli_query($conn, "SELECT * FROM users WHERE email  = '$email' AND senha = '$senha' AND status = 'rejeitado'");
                if (mysqli_num_rows($sql04) == 1) {
                    echo "Sua conta foi rejeitada";
                } else {
                    $sql03 = mysqli_query($conn, "SELECT * FROM users WHERE email  = '$email' AND senha = '$senha' AND status = 'aprovado'");
                    if (mysqli_num_rows($sql03) == 0) {
                        echo "Sua conta ainda não foi aprovada";
                    } else {
                        // Deu tudo certo
                        $row = mysqli_fetch_assoc($sql02);
                        $_SESSION['idUser'] = $row['idUser'];
                        echo "sucesso";
                    }
                }
            }
        }
    } else {
        echo "Email não valido";
    }
} else {
    echo "Preencher todos campos";
}

?>