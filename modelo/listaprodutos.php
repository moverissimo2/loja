<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Sistema de Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/conteudo.css" rel="stylesheet">
    <style type="text/css">
    ul>li, a{
	cursor: pointer;
	}
	.pagination li
{
	float:left;
	text-align:right;
}

    </style>
  
</head>
<script language="JavaScript">
</script>
<body>
<?php 
$hoje = date('d/m/Y H:m:s');



?>
<div class="col-md-12">
<div class="conteudoprincipal">
<?php include("menu.php"); ?>
<div ng-app="myApp" ng-app>
  <div ng-controller="produtosCrtl">
                <div class="col-md-3">
                <input type="text" ng-model="search.$" ng-change="filter()" placeholder="Busca inteligente" class="form-control" />
             		</div>
   
   <div class="col-md-12" id="alerta">  
      </div>
      <div id="campos2" class="col-md-12">
           <table class="table table-striped table-bordered" id="myTable" name="myTable" ng-table="tableParams">
            <thead>
            	<th colspan="5" align="center"><center>
            	  <h4>Modelos Cadastrados</h4>
            	</center></th>
         	</thead>  
       		<tbody  id ="source_feedback">
                <tr>
                 <td align="center"><strong>Produto</strong></td>
                 <td align="center"><strong>Valor</strong></td>
                 <td align="center"><strong>Categoria</strong></td>
                 <td align="center"><strong>Editar</strong></td>
                 <td align="center"><strong>Novo Registro </strong></td>
               </tr>
               <tr>
                 <td><input ng-model="search.nm_produto" ng-change="filter()" class="largura_nome"></td>
                  <td><input ng-model="search.vl_produto" ng-change="filter()" class="largura_sgi"></td>
                 <td><input ng-model="search.categoria" ng-change="filter()" class="largura_sgi"></td>
                 <td></td>
                 <td></td>
                </tr>          
       	        <div class="col-md-7" ng-show="filteredItems > 0">
            <tr ng-repeat="data in filtered = (list | filter:search:strict | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo: entryLimit" id="linha_{{data.id_produto}}">
            <td id="lmodelo_{{data.id_produto}}">{{data.nm_produto}}</td>
            <td id="lmodelo_{{data.id_produto}}">{{data.vl_produto | currency}}</td>
            <td id="lmodelo_{{data.id_produto}}">{{data.categoria}}</td>
            <td>
            <center><a href="editaModelo.php?id={{data.id_produto}}">editar</a></center>
            </td>
            <td>
            </td>
                    
           </tr> 
               </div> 
           <tr>    
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                     <center> <a href="insereModeloProposta.php">adicionar</a></center>
                </td>
            </tr>
            
            </tbody> 
        </table>
         <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
     </div>
 </div>
</div>
</div>
 
</div>
   
  <script src="js/angular.min.js"></script>
  <script src="http://code.jquery.com/jquery.min.js"></script>
  <script src="js/angular-locale_pt-br.js"></script>
  <script src="app/listaProdutos.js"></script>
   <script src="js/ui-bootstrap-tpls-0.10.0.min.js"></script>
</p>
</body>
</html>






