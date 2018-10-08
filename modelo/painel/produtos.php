<!DOCTYPE html>
<html lang="pt_BR">
<head>
<title>Adm da Loja</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- HTML 4 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- HTML5 -->
<meta charset="utf-8"/>
</head>
<body>

<?php
// esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
} 

$logado = $_SESSION['login'];

if ($logado=="") {
header('location:index.php');
ini_set('default_charset','UTF-8');
} else {

$hoje = date('d/m/Y H:m:s');

include("navbar.html"); ?>

 <form action="grava_produto.php" method="post" enctype="multipart/form-data">
<div ng-app="myApp">
  <div ng-controller="produtosCrtl" class="container-fluid"> 
  <div class="panel-group">
 
    <div class="panel panel-primary">
      <div class="panel-heading">Cadastro de Produtos</div>
      <div class="panel-body">
	  
	    <div class="col-md-12">  		
	 	  Nome do produto: <input  name="nm_produto" id="nm_produto"  class="form-control"  type="text"  value="<?php print("$nm_produto"); ?>"  placeholder="Entre com nome do produto" />
  	    </div>
		  <div class="col-md-6">  		
	 	  Categoria:   
		  
		  
  	    </div>
		  <div class="col-md-6">  		
	 	 Valor do produto: <input  name="vl_produto" id="vl_produto"  class="form-control"  type="text"  value="<?php print("$vl_produto"); ?>"  placeholder="Entre com valor do produto" />
		 </div>
		<div class="col-md-12">  		
	 	  Descrição do produto: 
	 	    <textarea name="descr_produto" class="form-control" id="descr_produto" placeholder="Entre com a descricao produto"><?php print("$nm_produto"); ?></textarea>
  	    </div>
	<div class="col-md-12">  
	    <div class="col-md-6">  		
	 	Imagem do produto:
  	   <input type="file" class="form-control" name="foto" />
        </div>
<div class="col-md-6"> 
</div>
</div>

<div class="container-fluid">

<div class="col-md-6"> 
<br>
<hr>
<input type="submit" class="btn_sucess" value="Enviar" accesskey="a" style="padding-top: 0px;" />
<br>
<br>

</div>
</div>
	  
	  </div>
    </div>

   </div>
 </div>
</div>

</form>
<?php } ?>

</body>

  <script src="../js/angular.min.js"></script>
  <script src="http://code.jquery.com/jquery.min.js"></script>
  <script src="../js/angular-locale_pt-br.js"></script>
  <script src="../app/produtos.js"></script>
  <script src="../js/ui-bootstrap-tpls-0.10.0.min.js"></script>


</html>
