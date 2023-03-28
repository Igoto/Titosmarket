<?php
include_once("../db/conexao.php");

if (($_POST)) {

    $nome = $_POST["nome"];
    $desc = $_POST["desc"];
    $slug = $_POST["slug"];
    $link = $_POST["link"];

    $query = "INSERT INTO tbl_categoria
            VALUES (NULL, '$nome', '$desc', '$slug', '$link')";

    $inserir = mysqli_query($conexao, $query);

if ($inserir) {
    echo "<script>alert('Cadastro de categoria realizado com sucesso!'); location.href='../cadastro.html';</script>";
} else {
    echo "<script>alert(Algo deu errado, volte mais tarde!'); location.href='../cadastro.html';</script>";
}

}else {
    header('Location: index.html');
}
?>