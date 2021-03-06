<!doctype html>
<html lang="en">
<head>
<title>Blog Administration</title>
<!--css-->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
 
<!--js-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 
<!--angular-->
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular-route.js"></script>

<!--angular controllers-->
<script src="/core/assets/js/controllers/loginController.js"></script>
<script src="/core/assets/js/services/authService.js"></script>
<script src="/core/assets/js/app.js"></script>
</head>
<body ng-app="blogApp">
 <div id="wrapper">
 <div class="container" id="view" ng-view>
 
 </div>
 </div>
</body>