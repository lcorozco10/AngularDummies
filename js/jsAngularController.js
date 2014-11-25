/**
 *
 */


angular
	.module('myApp', ["miModulo"])
	// controller here
	.controller('FirstCtrl', method1)
	.controller('FirstCtr2', method2)
	.controller('FirstCtr3', method3)
	.controller('controladoh', method4);




//Metodos de los cotroladores {logica de Negocio}
function method1($scope, $miFactoria) {
	var booleano = false;
	//var myEl = angular.element( document.querySelector( '#sp' ) ).addClass('MyClass');
	$scope.data = {message: $miFactoria.saludo(),val:'mostrar'};


	this.data = {message: $miFactoria.saludo(),val:'mostrar'};
	this.ocultar = function()
    {
		if(booleano)
			this.data = {message: $miFactoria.saludo(),val:'ocultar'};
		else
			this.data = {message: $miFactoria.saludo(),val:'mostrar'};
		booleano = !booleano;
		console.log(booleano);
    }

};

function method2($scope, $miFactoria2) {
	//console.log($scope.$parent.nombre);
    $scope.data = {message: $miFactoria2.saludo()};
};

function method3($scope, $miFactoria, $miFactoria2) {
    $scope.data = {message: $miFactoria.saludo()+' & '+$miFactoria2.saludo()};

};
function method4($scope) {
	$scope.hijo.data1 = {texto:' Controllador Hijo'};

	$scope.hijo.cambio = function (){console.log($scope.hijo.activo);}

    //optener variavles desde el cotrolador padre
    //console.log($scope.$parent.ctrl.data.message);
};


