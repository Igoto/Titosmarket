<?php 
include_once("../db/conexao.php");
?>
<html>
 <head>
 <title> Tito's Market Admin</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
 <link href="../css/estrutura.css" rel="stylesheet" type="text/css"/>

 </head>
<body>
 <div id="pagina">
 <div id="suporte">
 	     	
			<div id="centro">
            <div id="logo">
 <a href = "admin.php"><img src = "../img/logo_t.png" width=60 height=60> Voltar</a>
 <div><b>Visualizar contatos</b></div>

 <?php

   
$query = "SELECT * FROM tbl_contato";
$consulta = mysqli_query($conexao, $query   );
$resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

foreach($resultado as $contato){
 echo "<p>#".$contato['id'].") ".$contato['nome']." ".$contato['email']." - ".$contato['comentario']."</p>";
}


?>
   </div> 
				</div>

<div id = "rodape">
<div><b>Tito's Market</b></div>	
<div>Todos os direitos reservados  </div>	  
<div>Rua Tito, 1000 - Lapa - São Paulo</div>	
  </div>	  
				  
		

</div>
</div>

 </div>
</body>
</html>
