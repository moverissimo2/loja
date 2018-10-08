<!DOCTYPE html>
<html lang="en">
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
<div class="container-fluid">
  <div class="panel-group">
   <?php include("navbar.html"); ?>
    <div class="panel panel-primary">
      <div class="panel-heading">Cadastro de categoria</div>
      <div class="panel-body">
	    <div class="col-md-12">  	
		<form action="grava_categoria.php" method="post" enctype="multipart/form-data">	
	 	  Nome da categoria*: <input  name="titulo_categoria" id="titulo_categoria"  class="form-control"  type="text"  value="<?php print("$nm_categoria"); ?>"  placeholder="Entre com nome da categoria" />
  	    </div>
		<div class="col-md-12"> 
			<div class="col-md-6">  		
			  Status da categoria*: 
				  
					<select name="ativo" class="form-control" >
					  <option value="1" selected>Ativo</option>
					  <option value="0">Inativo</option>
					  </select>
				 
			
			</div>
			<div class="col-md-6"> 
			
			</div>
	</div>
		
</div>
<br>
<hr>
<div class="container-fluid">
<div class="col-md-6"> 
<input type="submit" value="Enviar" >
  </form>
<br>
<br>
</div>
</div>
	  
	  </div>
    </div>

   

    
    
  </div>
</div>

</body>
</html>
