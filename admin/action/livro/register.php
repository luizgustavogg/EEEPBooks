<?php
include_once("../../../include/include.php");
session_start();
$titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
$sinopse = mysqli_real_escape_string($conn, $_POST['sinopse']);
$quantidade = mysqli_real_escape_string($conn, $_POST['quantidade']);
$categoria = mysqli_real_escape_string($conn, $_POST['categoria']);
if(!empty($titulo) && !empty($sinopse) && !empty($quantidade)){
if(isset($_FILES['image'])){ 
    $img_name = $_FILES['image']['name'];
    $img_type = $_FILES['image']['type']; 
    $tmp_name = $_FILES['image']['tmp_name']; 
  

    $img_explode = explode(".", $img_name);
    $img_ext = end($img_explode); 
  
    $extensions = ['png', 'jpeg', 'jpg', 'gif']; 

    if(in_array($img_ext, $extensions) === true && in_array($img_ext, $extensions) !== ""){ 
        $random_id = rand(time(), 10000000);
        $time = time(); 
        $new_img_name = $time.$img_name; // foto perfil
        $hoje = date('d/m/Y');
        $titulo = str_replace("img", "____", $titulo);
        $sinopse = str_replace("img", "____", $sinopse);

        if(move_uploaded_file($tmp_name, "../../images-livros/".$new_img_name)){
           $sql = mysqli_query($conn, "INSERT INTO livros(idLivro, datac, FK_idCategoria, titulo, sinopse, estoque, img)
           VALUES ('$random_id', '$hoje', '$categoria', '$titulo', '$sinopse', '$quantidade', '$new_img_name')");
           if($sql){
               echo "sucesso";
            }
            else{
                echo "Error ao finalizar tarefa";
            }
        }
    }else{
        echo "Por favor, selecione um arquivo de imagem - jpgeg, jpg, png!";
    }
}
else{
    echo "Selecionar foto";
}}
else{
    echo "preencher todos os campos";
}