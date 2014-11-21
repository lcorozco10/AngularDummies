<!doctype html>
<html lang="en" data-ng-app >
<head>
	<meta charset="UTF-8"  data-ng-init="datarg=[1,2,3,4]";/>
	<link type="text/css" rel="stylesheet" href="css/css.css"/>
	<title>JS Angular Examples</title>
</head>
	<body>
		<h1>Hola {{nombre}} Desarrollador</h1>
		<form>
			C&oacute;mo te llamas? <input type="text" data-ng-model="nombre" data-ng-init="nombre='Luis Orozco';">
			<input type="button" value="hola" data-ng-click="nombre='hola'" />
		</form>
		<p data-ng-repeat="elemento in datarg" data-ng-init="paso=$index;">
			Elemento con id {{paso}}: <span>{{nombre}}</span>
		</p>


		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>
		<script type="text/javascript" src="js/jsAngularController.js"></script>
	</body>
</html>