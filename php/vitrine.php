<?php
include_once("db/conexao.php");
$query = "SELECT * FROM tbl_produtos";

if (($_POST)) {

    $id_cat = $_POST["categoria"];


    if($id_cat>0){
        $query = "SELECT * FROM tbl_produtos WHERE fk_id_cat = $id_cat";

    }

    $id_filtro = $_POST["filtro"];
    
    if ($id_filtro == 1){
        $query = $query." ORDER BY preco_pro";
    }else if ($id_filtro == 2){
        $query = $query." ORDER BY preco_pro DESC";
    }else if ($id_filtro == 3){
        $query = $query." ORDER BY nome_pro";
    }
    else if ($id_filtro == 4){
        $query = $query." ORDER BY nome_pro DESC";
    }
}
$consulta = mysqli_query($conexao, $query);
$resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

foreach($resultado as $produto){
 echo "<div><b>".$produto['nome_pro']."<div><img src=".$produto['img_pro']." height=110 width=110 /></div><div>R$ ".$produto['preco_pro']."</b></div></div>";
}









?>