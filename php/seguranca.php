<?php
// Garantir a segurança na estrada de informações apenas para o usuario autenticados e verificads no PHP e pelo Banco de Dados

session_start();

if($_SESSION['ID_USUARIO']){


}else{
    header("Location: admin.php");
}


?>