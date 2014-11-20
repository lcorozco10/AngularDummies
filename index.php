<?php
/**
 * Info de la clase mainClass
 */
require_once 'Class1.php';
class mainClass {
    function __construct() {
        echo("Hola Mundo3");

    }
}
//Comentario
/* $obj = new Class1('Ejemplo');
$var = $obj->getdato();
echo $var; */
?>

<!doctype html>
<html lang="en" ng-app>
<head>
	<meta charset="UTF-8" />
	<title>JS Angular Examples</title>
</head>
	<body>
		<div>
			<label>Name:</label>
	     	<input type="text" ng-model="yourName" placeholder="Enter a name here">
	     	<hr>
	      	<h1>Hello {{yourName}}!</h1>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>
		<script src="js/jsAngularController.js"></script>
	</body>
</html>