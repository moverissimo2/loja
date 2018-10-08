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


app.controller('pedidosCrtl', function ($scope, $http, $timeout) {
//var colaborador = document.getElementById("usuario").value;
$http.get('../ajax/get_pedidos.php',{
   params: {
				  funcao : "listaPedidos"
	        }
	     })
       .success(function(index){
			$scope.list = index;
			$scope.currentPage = 1; //current page
			$scope.entryLimit = 15; //max no of items to display in a page
			$scope.filteredItems = $scope.list.length; 
			$scope.totalItems = $scope.list.length;
	
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
 
 


  
//--fim da rotina de exclusao de feedback
});
                                     




