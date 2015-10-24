var app = angular.module('blogApp',[
'ngRoute',
//Login
'LoginCtrl',
//AuthService
'AuthSrvc'
]);

app.run(function(){
 
});

 //This will handle all of our routing
app.config(function($routeProvider, $locationProvider){
 
	$routeProvider.when('/',{
	templateUrl:'/core/assets/js/templates/login.html',
	controller:'LoginController'
	});
 
});