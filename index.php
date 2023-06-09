<?php
include_once("db/conexao.php");
?>
<html>
<head>
  <title>Tito's Market</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link href="css/estrutura.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jcycle.js"></script>
  <script type="text/javascript" src="js/destaques.js"></script>
</head>

<body>
  <div id="pagina">
    <div id="suporte">
      <div id="logo">
        <a href="index.html"><img src="./img/logo.jpg" border="0" /></a>
      </div>

      <div id="cabe">
        <div id="login">
          <form action="php/validar-usuario.php" method="POST">
            <div>
              <label for="#"><b>Usuário:</b></label>
              <input type="text" name="usuario" placeholder="Usuário" size="15" />&nbsp&nbsp
            </div>
            <div>
              <label for="#"><b>Senha:</b></label>
              <input type="password" name="senha" placeholder="Senha" size="15" />
            </div>
            <button>Acessar</button> <a href="cadastro.html">Cadastre-se</a>
          </form>
        </div>
      </div>
      <div id="conteudo">
        <div id="menu">
          <div id="link">
            <a href="index.html"> Home </a>
          </div>

          <div id="link">
            <a href="sobre.html"> Nossa história </a>
          </div>

          <div id="link">
            <a href="promocao.html"> Promoções </a>
          </div>

          <div id="link">
            <a href="lojas.html"> Lojas </a>
          </div>

          <div id="linkb">
            <a href="contato.html"> Contato </a>
          </div>
        </div>
      </div>
    </div>

    <div id="suporte2">
      <div id="destaques">
        <ul>
          <li><img src="./img/1.jpg" border="0" /></li>
          <li><img src="./img/2.jpg" border="0" /></li>
          <li><img src="./img/3.jpg" border="0" /></li>
          <li><img src="./img/4.jpg" border="0" /></li>
        </ul>
      </div>
      <div id="controle">
      <form name="selecionar_cat" action="index.php" method="POST">
      <select name="filtro" id="filtro">    
        <option value="1" selected = selected>Menor preço</option>
        <option value="2">Maior preço</option>
        <option value="3">A-Z</option>
        <option value="3">Z-A</option>
      </select>
    <select name="categoria" id="categoria">    
        <option value="0" selected = selected>Selecione uma categoria</option>
    
        <?php
        $queryConsultLogin = "SELECT * FROM tbl_categoria";
        $consulta = mysqli_query($conexao, $queryConsultLogin);
        $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    
        foreach($resultado as $categoria){
         echo "<option value='".$categoria['id_cat']."'>".$categoria['nome_cat']."</option>";
        }
        ?>
    </select>
    <input type ="submit" name ="OK_btn" value="OK"> 
      </form> 
      <div id="centro" style="display: flex; flex-wrap:wrap; gap: 25px; justify-content:center;">
          <?php
          include 'php/vitrine.php'
          ?>
        </div>
      </div>

    <div id="rodape">
      <div><b>Tito's Market</b></div>
      <div>Todos os direitos reservados</div>
      <div>Rua Tito, 1000 - Lapa - São Paulo</div>
    </div>
	</div>

  </div>
</body>

</html>