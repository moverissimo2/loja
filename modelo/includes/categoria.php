<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
	 	  Nome da categoria: <input  name="nm_categoria" id="nm_categoria"  class="form-control"  type="text"  value="<?php print("$nm_categoria"); ?>"  placeholder="Entre com nome da categoria" />
  	    </div>
		 	
<div class="col-md-6"> 
</div>
</div>
<br>
<hr>
<div class="container-fluid">
<div class="col-md-6"> 
<input type="submit" value="Enviar" >
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
