<?php
include_once("../db/conexao.php");

if($_POST){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $queryUsuario = "SELECT * FROM tbl_login WHERE  usuario= '$usuario'";
    $consultarDados = mysqli_query($conexao, $queryUsuario);
    $resultado = mysqli_fetch_all($consultarDados, MYSQLI_ASSOC);


        if($resultado[0]["usuario"] ==  $usuario){

            if($resultado[0]["senha"] ==  $senha){

                echo "autorizado";
            

                $_SESSION['usuario'] = $resultado[0]["usuario"];

                echo "<script>alert('Login efetuado com sucesso.'); location.href='../admin.php';</script>";
        
            }else{

                echo "<script>alert('Uhm... Temos algo de errado aqui! Verifique usuário e senha'); location.href='../index.html';</script>";
            
            }

        }

}

?>