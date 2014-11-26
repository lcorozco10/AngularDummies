/**********************************************************
 *Name: Luis Orozco
 *Date: 25/11/2014:11:26AM
 *Descripción: Aprendiendo AngularJS
 *
 *En objeto Angular inicializa el framework
 *Para pder utilizar todas las directivas AngularJS
 *********************************************************/


angular
	.module('myApp', ["miModulo","serviceHttp"]) //Inyectar dependencias [miModulo] para utilizarlas en mis controladores

		// Declaracion de Controladores
		.controller('ControllerMain', mainMethod)
		.controller('Controller1', method1)
		.controller('Controller2', method2)
		.controller('Controller3', method3)
		.controller('Controller1-2', method4);



/**********************************************************
 *Metodos de los cotroladores {logica de la vista}
 *********************************************************/

//Metodo que recibe como parametro una dependencia $miFactoria
function method1($http,$scope, $miFactoria) {
	booleano = true;
	//var myEl = angular.element( document.querySelector( '#sp' ) ).addClass('MyClass'); //obtener un selector con jQuerylite de AngularJS

	this.data = {
			message: $miFactoria.saludo(),
			val:'mostrar',
			ocultar :ocultar
		};

	function ocultar()
    {

		if(booleano)
			this.val = 'ocultar';
		else
			this.val = 'mostrar';

		booleano = !booleano;
    };

};

//Metodo que recibe como parametro una dependencia $miFactoria2
function method2($scope, $miFactoria2) {
	//console.log($scope.$parent.nombre); //Tener acceso a los ng-model del documento padre
    $scope.data = {message: $miFactoria2.saludo()};
};

//Metodo que recibe como parametro dos dependencia $miFactoria y $miFactoria2
function method3($scope, $miFactoria, $miFactoria2) {
    $scope.data = {message: $miFactoria.saludo()+' & '+$miFactoria2.saludo()};

};

//Metodo anidado de Controller1->Controller1-2
method4.$inject = ['$http','$scope']; //inyectando dependencias a un metodo
function method4(http,scope) {
	scope.hijo.data = {
			texto:' Controllador Hijo',
			cambio : function (){
				console.log(scope.hijo.data.activo);
			}
	};

	//console.log(dev1.saludo());
    //optener ng-model de el cotrolador padre
    console.info('Medodo del Ctrl Padre invocado desde el Ctrl Hijo: '+scope.$parent.padre.data.message);
};


function mainMethod ($scope,$getAll) {

	$scope.nombre = '';
	$getAll.getdata(
			function(respuesta) {
				$scope.datarg = respuesta;
	});
}

