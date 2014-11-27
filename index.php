<!doctype html>
<html lang="en" data-ng-app='myApp'  >
	<head>
		<meta charset="UTF-8" />
		<link type="text/css" rel="stylesheet" href="css/css.css"/>
		<title>JS Angular Examples</title>
	</head>
	<body>



		<div data-ng-controller = "ControllerMain as main">
			<h3>Hola {{nombre | uppercase}} Desarrollador {{"WEB" | lowercase}} </h3>
			<form >
				<label>
				    <input type="text" data-ng-model="nombre" >
                </label>
				<input type="button" value="change" data-ng-click="nombre='***********'" />
			</form>

            <hr>

			<div>
			     <table border="1">
			     	<thead>
    			     	<tr>
    			     		<th>Nombre</th>
    			     		<th>Apellido</th>
    			     		<th>Edad</th>
    			     		<th>Cursos</th>
    			     	</tr>
    			     </thead>
			     	<tbody >
			     		<tr  data-ng-repeat="elemento in datarg | filter:nombre" data-ng-init="paso=$index;">
			     			<td>{{datarg[paso].nombre}}</td>
			     			<td>{{datarg[paso].apellido}}</td>
			     			<td>{{datarg[paso].edad}}</td>
			     			<td>
                                <select >
                                <option data-ng-repeat="curso in datarg[paso].materias" value="{{curso.id}}">{{curso.nombre}}</option>
                                </select>
                            </td>
			     		</tr>
			     	</tbody>
			     </table>
			</div>
		</div>

		<hr>

		<div>
    		<div data-ng-controller="Controller1 as padre">

        		<h3> {{padre.data.message}}</h3>
				<button data-ng-click = "padre.data.ocultar();"  id="btn">Show/Hiden</button>
        		<div class="{{padre.data.message}} {{padre.data.val}}" ><b> <code>{{ {"name":"Luis","age":"23"}  | json}}</code></b></div>
				<span id="sp"></span>

        		<div data-ng-controller = "Controller1-2 as hijo">
        			<h4><b>{{hijo.data.texto}}</b></h4>
        			<input type="checkbox" data-ng-model="hijo.data.activo" data-ng-click="hijo.data.cambio();" />
        			<input type="checkbox"  data-ng-checked="master" />
        		</div>

    		</div>

    		<hr>

    		<div data-ng-controller="Controller2">

        		<h3> {{data.message}}</h3>

        		<div class="{{data.message}}"></div>
    		</div>

    		<hr>

    		<div data-ng-controller="Controller3">

        		<h3> {{data.message}}</h3>
        		<div class="{{data.message}}"></div>


    		</div>
    		<div>
                {{ ctrlobj.data }}
            </div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>
		<script src="js/jsAngularController.js"></script>
		<script src="js/DependModulos.js"></script>

	</body>
</html>