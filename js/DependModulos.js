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
	.factory("$getAll", function($http,$q){
		return {
	        getdata: function(respuesta)
	        {
	        	return $http.get("datasource/alumnos.json").success(respuesta);
	        }
	    };

		 /*var request = $http({
             method: "post",
             url: "datasource/alumnos.json",
             params: {
                 action: "add"
             },
             data: {
            	 nombre: name
             }
         });

		 var x = ( request.then( handleSuccess, handleError ));
		 //console.info(x.data);
		 return x;
		 function handleError( response ) {

             // The API response from the server should be returned in a
             // nomralized format. However, if the request was not handled by the
             // server (or what not handles properly - ex. server error), then we
             // may have to normalize it on our end, as best we can.
             if (
                 ! angular.isObject( response.data ) ||
                 ! response.data.message
                 ) {

                 return( $q.reject( "An unknown error occurred." ) );

             }

             // Otherwise, use expected error message.
             return( $q.reject( response.data.message ) );

         }


         // I transform the successful response, unwrapping the application data
         // from the API response payload.
         function handleSuccess( response ) {
        		 return response.data;
            // return( response.data );
         }*/


	}
);