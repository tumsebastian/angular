var app = angular.module('MyApp', []);
app.controller("MainApp", function($scope)
{
	$scope.data = {
		label : "My Button",
		class : "btn-danger"
	}
})