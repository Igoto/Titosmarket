<?php
include_once("../db/conexao.php");

if (($_POST)) {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];
    $nivel = $_POST["nivel"];

    if($senha!= $senha2){
        echo "<script>alert('As senhas não são iguais, favor preencher novamente!'); location.href='../cadastro.html';</script>";
        return;
    }


    $query = "INSERT INTO tbl_login
            VALUES (NULL, '$usuario', '$senha', '$nivel')";

    $inserir = mysqli_query($conexao, $query);

if ($inserir) {
    echo "<script>alert('Cadastro realizado com sucesso, aproveite o Titos Market'); location.href='../cadastro.html';</script>";
} else {
    echo "<script>alert(Algo deu errado, volte mais tarde!'); location.href='../cadastro.html';</script>";
}

}else {
    header('Location: index.php');
}
?>