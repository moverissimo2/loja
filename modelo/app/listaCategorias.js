var app = angular.module('myApp', ['ui.bootstrap']);
//var colaborador = document.getElementById("usuario").value;

app.run(function(paginationConfig){
 	 paginationConfig.firstText ='Inicio';
     paginationConfig.previousText ='Anterior';
     paginationConfig.nextText = 'Próximo';
     paginationConfig.lastText = 'Fim';
});

app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});


app.controller('categoriaCrtl', function ($scope, $http, $timeout) {
//var colaborador = document.getElementById("usuario").value;
$http.get('../ajax/get_categoria.php',{
   params: {
				  funcao : "listaCategoria"
	        }
	     })
      .success(function(data){
			$scope.list = data;
			$scope.currentPage = 1; //current page
			$scope.entryLimit = 15; //max no of items to display in a page
			$scope.filteredItems = $scope.list.length; 
			$scope.totalItems = $scope.list.length;
      
      //$scope.dataFormatada = $filter('data.data_emissao')(data, 'dd/MM/yyyy');
      
	           			
    });
	    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
        };
	
        $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
        };

        $scope.filter = function() {
        $timeout(function() { 
        $scope.filteredItems = $scope.filtered.length;
        }, 10);

              
     
 };
    
   
    


});
                                     




