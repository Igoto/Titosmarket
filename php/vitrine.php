<?php
include_once("db/conexao.php");


$queryConsultLogin = "SELECT * FROM tbl_produtos";
$consulta = mysqli_query($conexao, $queryConsultLogin);
$resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

foreach($resultado as $produto){
 echo $produto['nome_pro']."<img src='".$produto['img_pro']."</img>";
}









?>