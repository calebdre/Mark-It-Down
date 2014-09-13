var app = angular.module('app', ['ngSanitize', 'ngRoute']);

app.config(function ($routeProvider, $locationProvider) {
	var templateBase = 'js/templates/';
	
	$routeProvider
		.when('/note', {
			templateUrl:"/js/templates/noteTemplate.html",
			controller:"NotesController"
		})

		.when('/notes', {
			templateUrl: "/js/templates/notesManagerTemplate.html",
			controller: "NotesManagerController"
		})

		.otherwise({ redirectTo: '/note' });

	$locationProvider.html5Mode(true);
});

app.config(['$httpProvider', function($httpProvider) {
    //initialize get if not there
    if (!$httpProvider.defaults.headers.get) {
        $httpProvider.defaults.headers.get = {};    
    }
    //disable IE ajax request caching
    $httpProvider.defaults.headers.get['If-Modified-Since'] = '0';
}]);