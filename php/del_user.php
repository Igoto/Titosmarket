<?php 
include_once("../db/conexao.php");

if (($_POST)) {

    $id = $_POST["area"];
    $query = "DELETE FROM tbl_login WHERE id = $id";

$consulta = mysqli_query($conexao, $query);
if($consulta){
    echo "<script>alert('Usuário deletado com sucesso!'); location.href='admin.php';</script>";
}
}

?>