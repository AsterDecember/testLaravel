(function(){

	angular.module('prueba')
		.controller('deleteController',deleteController);
		function deleteController($scope,$http,$window){
			$scope.delete= function(id){
				$http({
					method:'delete',
					url:'/user/'+id
				}).then(function(result){
					//console.log(result);
						$window.location.href = '/user';
				},function(error){
					console.log(error);
				});

				
			};
		}

})();
