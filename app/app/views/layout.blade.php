<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<meta charset="UTF-8">
	<title>Markdown Notes</title>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

	@yield('styles')

	<style>
		.left-side{
			float: left;
			width:38%;
		}
		.right-side{
			float:left;
			width:49%;
		}
		.util-options-container{
			position: absolute;
			bottom:10px;
			right:5%;

		}
		.util-options-container .util-option{
			float:left;
			opacity:.4;
			width:40px;
			padding:10px;
			margin-left: 20px;
			font-size:1.1em;
			color:#aaa;
			text-align: center;
			cursor: pointer;
		}

		.util-option a{
			color:#aaa;
		}
	</style>
</head>
<body>
	
	@yield('content')

	<script src="/vendor/jquery/dist/jquery.min.js"></script>
	<script src="/vendor/angular/angular.min.js"></script>
	<script src="/vendor/angular-route/angular-route.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular-sanitize.min.js"></script>
	<script src="/js/app.js"></script>
	<script src="/js/directives.js"></script>
	<script src="/js/services.js"></script>
	<script src="/js/controllers.js"></script>
	
	@yield('scripts')
</body>
</html>