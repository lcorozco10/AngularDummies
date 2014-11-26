/**
 *
 */
//Crear modulos de dependencias para que trabaje con la logica de la vista
//angular.module('myApp')
angular.module("miModulo", [])
	.factory("$miFactoria", function()
			{
			    return {
			        saludo: function()
			        {
			            return "Hola desde el modulo 1";
			        }
			    };
			}
	)
	.factory("$miFactoria2", function()
		{
		    return {
		        saludo: function()
		        {
		            return "Hola desde el modulo 2";
		        }
		    };
		}
	);

angular.module("serviceHttp", [])
	.factory("$getAll", function($http){
		return {
	        getdata: function(respuesta)
	        {
	        	return $http.get("datasource/alumnos.json").success(respuesta);
	        }
	    };
	}
);