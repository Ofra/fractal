
var miApp = angular.module('DashBoard',['ngRoute', 'a']);

miApp.config(['$routeProvider',function($routeProvider){
	$routeProvider.when('/Backoffice',{
		templateUrl:'views/back.html'
	}).
	when('/Add_team',{
		templateUrl:'views/team.html'
	}).
	when('/Team',{
		templateUrl:'views/team_main.php',
		controller: 'ListaController'
	}).
	when('/Users',{
		templateUrl:'views/users.php',
		controller: 'ListaController'
	}).
	when('/Add_users',{
		templateUrl:'views/add_user.php',
	}).
	otherwise({
		redirectTo: '/Backoffice'
	});
}]); 