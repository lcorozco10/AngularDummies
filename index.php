<!doctype html>
<html lang="en" data-ng-app='myApp'  >
	<head>
		<meta charset="UTF-8" />
		<link type="text/css" rel="stylesheet" href="css/css.css"/>
		<title>JS Angular Examples</title>
	</head>
	<body>

		<div data-ng-init="datarg=[1,2,3,4];">
		    <code>{{ {"name":"Luis","age":"23"}  | json}}</code>
			<h1 data-ng-class="nombre" ng-bind>Hola {{nombre | uppercase}} Desarrollador {{start | lowercase}} </h1>
			<form >
				C&oacute;mo te llamas? <input type="text" data-ng-model="nombre" data-ng-init="nombre='Luis Orozco';">
				<input type="button" value="hola" data-ng-click="nombre='hola'" />
			</form>
			<p data-ng-repeat="elemento in datarg" data-ng-init="paso=$index;">
				Elemento con id {{paso}}: <span>{{nombre}}</span>
			</p>
		</div>

		<div>
    		<div data-ng-controller="Controller1 as padre">

        		<h3> {{padre.data.message}}</h3>
				<button data-ng-click = "padre.data.ocultar();"  id="btn">bandera</button>
        		<div class="{{padre.data.message}} {{padre.data.val}}" ><b>Tag</b></div>
				<span id="sp"></span>

        		<div data-ng-controller = "Controller1-2 as hijo">
        			<b>{{hijo.data.texto}}</b>
        			<input type="checkbox" data-ng-model="hijo.data.activo" data-ng-click="hijo.data.cambio();" />
        			<input type="checkbox"  data-ng-checked="master" />
        		</div>

    		</div>
    		<div data-ng-controller="Controller2">

        		<h3> {{data.message}}</h3>

        		<div class="{{data.message}}"></div>
    		</div>
    		<div data-ng-controller="Controller3">

        		<h3> {{data.message}}</h3>
        		<div class="{{data.message}}"></div>


    		</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>
		<script src="js/jsAngularController.js"></script>
		<script src="js/DependModulos.js"></script>

	</body>
</html>