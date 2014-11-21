<!doctype html>
<html lang="en" data-ng-app='myApp' >
	<head>
		<meta charset="UTF-8" />
		<link type="text/css" rel="stylesheet" href="css/css.css"/>
		<title>JS Angular Examples</title>
	</head>
	<body>

		<div data-ng-init="datarg=[1,2,3,4];">
			<h1>Hola {{nombre}} Desarrollador {{start}} </h1>
			<form >
				C&oacute;mo te llamas? <input type="text" data-ng-model="nombre" data-ng-init="nombre='Luis Orozco';">
				<input type="button" value="hola" data-ng-click="nombre='hola'" />
			</form>
			<p data-ng-repeat="elemento in datarg" data-ng-init="paso=$index;">
				Elemento con id {{paso}}: <span>{{nombre}}</span>
			</p>
		</div>

		<div>
    		<div data-ng-controller="FirstCtrl as ctrl">

        		<h3> {{ctrl.data.message}}</h3>
				<button data-ng-click = "ctrl.ocultar();">bandera</button>
        		<div class="{{ctrl.data.message}} {{ctrl.data.val}}" ><b>Tag</b></div>

        		<div data-ng-controller = "controladoh as hijo">
        			<b>{{hijo.data1.texto | json}}</b>
        		</div>

    		</div>
    		<div data-ng-controller="FirstCtr2">

        		<h3> {{data.message}}</h3>

        		<div class="{{data.message}}"></div>
    		</div>
    		<div data-ng-controller="FirstCtr3">

        		<h3> {{data.message}}</h3>
        		<div class="{{data.message}}"></div>
    		</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>
		<script src="js/jsAngularController.js"></script>
		<script src="js/DependModulos.js"></script>
	</body>
</html>