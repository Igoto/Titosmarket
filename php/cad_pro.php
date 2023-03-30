<?php
include_once("../db/conexao.php");

if (($_POST)) {
    $cat = $_POST["area"];

    $nome = $_POST["nome"];
    $desc = $_POST["desc"];
    $slug = $_POST["slug"];
    $link = $_POST["link"];
    $preco = $_POST["preco"];

    $query = "INSERT INTO tbl_produtos
            VALUES (NULL, '$nome', '$desc', '$cat','$slug', '$link', '$preco')";

    $inserir = mysqli_query($conexao, $query);

if ($inserir) {
    echo "<script>alert('Cadastro de produto realizado com sucesso!'); location.href='admin.php';</script>";
} else {
    echo "<script>alert(Algo deu errado, volte mais tarde!'); location.href='cadastrar_produto.php';</script>";
}

}else {
    header('Location: index.php');
}
?>