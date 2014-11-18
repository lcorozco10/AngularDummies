<?php
require_once 'Class1.php';
class mainClass {
    function __construct() {
        echo("Hola Mundo3");

    }
}
$obj = new Class1();
$var = $obj->getdato();
echo $var;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
<table>
	<tbody>
		<tr>
			<td><a href="#">Columna 1</a></td>
			<td><a href="#">Columna 2</a></td>
			<td><a href="#">Columna 3</a></td>
		</tr>
		<tr>
			<td><a href="#">Columna 1</a></td>
			<td><a href="#">Columna 2</a></td>
			<td><a href="#">Columna 3</a></td>
		</tr>
		<tr>
			<td><a href="#">Columna 1</a></td>
			<td><a href="#">Columna 2</a></td>
			<td><a href="#">Columna 3</a></td>
		</tr>
		<tr>
			<td><a href="#">Columna 1</a></td>
			<td><a href="#">Columna 2</a></td>
			<td><a href="#">Columna 3</a></td>
		</tr>
		<tr>
			<td><a href="#">Columna 1</a></td>
			<td><a href="#">Columna 2</a></td>
			<td><a href="#">Columna 3</a></td>
		</tr>
	</tbody>
</table>
</body>
</html>