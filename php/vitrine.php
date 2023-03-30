<?php
include_once("db/conexao.php");


$queryConsultLogin = "SELECT * FROM tbl_produtos ORDER BY preco_pro";
$consulta = mysqli_query($conexao, $queryConsultLogin);
$resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

foreach($resultado as $produto){
 echo "<div><b>".$produto['nome_pro']."<div><img src=".$produto['img_pro']." height=110 width=110 /></div><div>R$ ".$produto['preco_pro']."</b></div></div>";
}









?>