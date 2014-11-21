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
function method1( $miFactoria) {
	var booleano = false;
	this.data = {message: $miFactoria.saludo(),val:'ocultar'};
	this.ocultar = function()
    {
		if(booleano)
			this.data = {message: $miFactoria.saludo(),val:'ocultar'};
		else
			this.data = {message: $miFactoria.saludo(),val:'mostrar'};
		console.log(this.texto);
		console.log(booleano);
		booleano = !booleano;
    }
};

function method2($scope, $miFactoria2) {
    $scope.data = {message: $miFactoria2.saludo()};
};

function method3($scope, $miFactoria, $miFactoria2) {
    $scope.data = {message: $miFactoria.saludo()+' & '+$miFactoria2.saludo()};
};
function method4() {
    this.data1 = {texto:' Controllador Hijo '};

};


