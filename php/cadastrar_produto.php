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
 <div><b>Cadastrar produto</b></div>

<form name="cadastrar_pro" action="cad_pro.php" method="POST">
    
<select name="area" id="area">    
    <option value="" selected = selected>Selecione uma categoria</option>

    <?php
    $queryConsultLogin = "SELECT * FROM tbl_categoria";
    $consulta = mysqli_query($conexao, $queryConsultLogin);
    $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    foreach($resultado as $categoria){
     echo "<option value='".$categoria['id_cat']."'>".$categoria['nome_cat']."</option>";
    }
    ?>
</select>
<div id="linha">Nome:<font color = "red">*  </font>  
				<input type= "text" name ="nome" size=25></div>
		
				<div id="linha"><div>Descrição:<font color = "red">*  </font>
				<input type ="text" name ="desc" size =25></div>
		
				<div>Slug produto:<font color = "red">*  </font>
				<input type="text" id = "slug" name ="slug" size = 20><div>
		
				<div>Link (IMG):<font color = "red">*  </font>
				<textarea name= "link" id = "id_link" rows="5" cols="30"> </textarea></div>
       
        <div>Preço:(R$)<font color = "red">*  </font>
				<input type="text" id = "preco" name ="preco" size = 10></div>
		
<input type ="submit" name ="cadastrar_btn" value="Cadastrar"> 
  </form>
</div>
</div> 
</div>
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
