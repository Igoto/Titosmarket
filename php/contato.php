<?php
include_once("../db/conexao.php");

if (($_POST)) {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["tel"];
    $comentario = $_POST["coment"];


    $query = "INSERT INTO tbl_contato
            VALUES (NULL, '$nome', '$email', '$telefone', '$comentario')";

echo $query;
    $inserir = mysqli_query($conexao, $query);
    if ($inserir) {
        echo "<script>alert('Contato enviado com sucesso, em breve retornamos ;)'); location.href='../index.php';</script>";
    } else {
        echo "<script>alert('Algo deu errado, por favor tente novamente!'); location.href='../contato.html';</script>";
    }
} else {
    header('Location: index.php');
}
?>