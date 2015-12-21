var app = angular.module('MyApp', []);
app.directive('walterwhite', function()
{
	return{
		restrict: 'E',
		transclude: true,
		template: '<h2>Hello Directive, I am back</h2>',
		link: function(scope, element, attrs)
		{
			console.log(scope)
		}
	};
})