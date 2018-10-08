var app = angular.module('myApp', ['ui.bootstrap']);


 app.controller('produtosCrtl', function ($scope, $http, $timeout) {

  
   			$http.get('/modelo/ajax/get_categoria.php',{
				params: {
				funcao: 'listaCategoria'
		 		}
			}).success(function(index) {
				$scope.categoriaList = index;
			});	
	
 $scope.pegarSelecionado = function(dados){
  
             			   
		var indiceCategoria = dados; 
		var options ="";
		
		$.getJSON('/modelo/ajax/get_categorias.php?funcao=listaCategorias&idCategoria='+indiceCategoria, function (json){
				if (json.length > 0){ 
						 $.each(json, function(i, obj){
							options += ' '+obj.id_categoria+'-'+obj.titulo_categoria+'<hr>';
						});
				       document.getElementById('categorias').innerHTML  = options;		
				} else {
						document.getElementById('categorias').innerHTML  = "Este produto ainda n&atilde;o possui categoria cadastrada<br>"; 
	            }
				
		});	
				
				
		
		
  
  }


	 
	
});
                                     


    

                                     




