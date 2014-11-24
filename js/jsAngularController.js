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
	//angular.element('#sp').addClass('MyClass');
	this.data = {message: $miFactoria.saludo(),val:'ocultar'};
	this.ocultar = function()
    {
		if(booleano)
			this.data = {message: $miFactoria.saludo(),val:'ocultar'};
		else
			this.data = {message: $miFactoria.saludo(),val:'mostrar'};


		//angular.element().addClass('MyClass');
		//$scope("#sp").addClass("MyClass");
		booleano = !booleano;
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
	$scope.hijo.data1 = {texto:' Controllador Hijo '};

    //optener variavles desde el cotrolador padre
    //console.log($scope.$parent.ctrl.data.message);
};


