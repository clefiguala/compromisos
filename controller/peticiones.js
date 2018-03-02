$(document).ready(function()
{
	$("#GuardarCompromiso").click(function () 
	{

		// obtener los check
		// el valor que puede venir es on o undefined


		// TAB DOCENCIA : Mejoramiento indicadores de docencia
		
		var mejora1 = $('#ch_mejora1:checked').val();
		var mejora2 = $('#ch_mejora2:checked').val();
		var mejora3 = $('#ch_mejora3:checked').val();
		var mejora4 = $('#ch_mejora4:checked').val();

		// TAB DOCENCIA : otros productos

		var otrosp1 = $('#ch_otrosp1:checked').val();
		var otrosp2 = $('#ch_otrosp2:checked').val();
		var otrosp3 = $('#ch_otrosp3:checked').val();
		var otrosp4 = $('#ch_otrosp4:checked').val();
		var otrosp5 = $('#ch_otrosp5:checked').val();
		var otrosp6 = $('#ch_otrosp6:checked').val();

		//TAB PRODUCCION INTELECTUAL 
		var produccion1 = $('#ch_produccion1:checked').val();
		var produccion2 = $('#ch_produccion2:checked').val();
		var produccion3 = $('#ch_produccion3:checked').val();
		var produccion4 = $('#ch_produccion4:checked').val();
		var produccion5 = $('#ch_produccion5:checked').val();


		//TAB EXTENSION Y VINCULO : docencia

		var docencia1 = $('#ch_docencia1:checked').val();
		var docencia2 = $('#ch_docencia2:checked').val();
		var docencia3 = $('#ch_docencia3:checked').val();

		//TAB EXTENSION Y VINCULO : investigacion

		var investigacion1 = $('#ch_investigacion1:checked').val();
		var investigacion2 = $('#ch_investigacion2:checked').val();
		var investigacion3 = $('#ch_investigacion3:checked').val();
		var investigacion4 = $('#ch_investigacion4:checked').val();
		var investigacion5 = $('#ch_investigacion5:checked').val();
		var investigacion6 = $('#ch_investigacion6:checked').val();		

		//TAB EXTENSION Y VINCULO : extension

		var extension1 = $('#ch_extension1:checked').val();
		var extension2 = $('#ch_extension2:checked').val();
		var extension3 = $('#ch_extension3:checked').val();
		var extension4 = $('#ch_extension4:checked').val();
		var extension5 = $('#ch_extension5:checked').val();
		var extension6 = $('#ch_extension6:checked').val();
		var extension7 = $('#ch_extension7:checked').val();
		
		//TAB GESTION

		var gestion1 = $('#ch_gestion1:checked').val();
		var gestion2 = $('#ch_gestion2:checked').val();
		var gestion3 = $('#ch_gestion3:checked').val();
		var gestion4 = $('#ch_gestion4:checked').val();
		var gestion5 = $('#ch_gestion5:checked').val();
		var gestion6 = $('#ch_gestion6:checked').val();

		//se recorre cada sub nivel para consultar si vienen on los check.
		var mejora = 4;
		var otrosp = 6;
		var produccion = 5;
		var docencia = 3;
		var investigacion = 6;
		var extension = 7;
		var gestion = 6;

		var area;
		var sub_1;
		var sub_2;
		
		//aca se guardaran los datos que fueron checkeados.
		var datos_check_on = [];
		
		var data = [];
		var lista_compromisos = ['mejora','otrosp','produccion','docencia','investigacion','extension','gestion'];
		//recorro las distintas variables y verifico que check fue seleccionado

		lista_compromisos.forEach( function(valor, indice, array)
		{			
			recorrer(eval(valor),valor);
		});
		//obtengo el rut del docente
		var rut = $('#inputrut').val();
		//año actual 
		var fecha = new Date();
		var anho = fecha.getFullYear();
	

		var objeto_enviar = {rut : rut, anho : anho, datos : {}};

		//recorro el array con los check seleccionado por el usuario.
		datos_check_on.forEach( function(valor, indice, array)
		{			
			var numero = 'nm_'+valor;			
			var descripcion = 'txt_'+valor;
			//obtengo la cantidad del check seleccionado
			var cantidad = $('#' + numero).val();
			//obtengo la descripcion del check selecciondo
			var descrip = $('#' + descripcion).val();
			//se le asigna al check el valor S para ser guardado en la base de datos 
			var check = 'S';

			var regex = /(\d+)/g;
			
			var subarea_1 = valor.replace(/\d/g,"");			
			var subarea_2 = valor.match(regex);
			
			//obtenemos el area 	      (tare_codigo)
			//obtenemos el area nivel uno (tnvu_codigo)
			//obtenemos el area nivel dos (tnvd_codigo)
			datos_areas(subarea_1,subarea_2);

			//alert('area ' +area + 'sub nivel uno '+ sub_1 +' sub nivel dos ' + sub_2);

			data[indice] = {
				area 		: area, 
				nivel_uno   : sub_1, 
				nivel_dos   : sub_2[0], 
				cantidad    : cantidad,
				descripcion : descrip,

			};
		});

		objeto_enviar.datos= data;
		console.log(objeto_enviar);

		/* enviadar datos por ajax */

		

		/* funciones */

		function datos_areas(subarea_1,subarea_2)
		{
			
			lista_compromisos.forEach( function(valor, indice, array)
			{
				
				if(subarea_1 == valor)
				{
					//seccion docente
					if( subarea_1 == 'mejora')
					{
						area = 1;
						sub_1 = 2;
						sub_2 = subarea_2;
					}
					if( subarea_1 == 'otrosp')
					{
						area = 1;
						sub_1 = 3;
						sub_2 = subarea_2;
					}
					// produccion intelectual
					if(subarea_1 == 'produccion')
					{
						area = 2;
						sub_1 = 1;
						sub_2 = subarea_2;
					}					
					//extension y vinculo
					if(subarea_1 == 'docencia')
					{
						area = 3;
						sub_1 = 1;
						sub_2 = subarea_2;
					}
					if(subarea_1 == 'investigacion')
					{
						area = 3;
						sub_1 = 2;
						sub_2 = subarea_2;
					}
					if(subarea_1 == 'extension')
					{
						area = 3;
						sub_1 = 3;
						sub_2 = subarea_2;
					}
					//Gestion
					if(subarea_1 == 'gestion')
					{
						area = 4;
						sub_1 = 1;
						sub_2 = subarea_2;
					}	
				}
			});
			
		}		

		function recorrer(largo,nombre)
		{
			for (var i = 1; i <= largo; i++) 
			{
				var str1 = nombre;
				var valor = i;
				var res = str1.concat(valor);
				
				if(eval(res) == 'on')
				{
					datos_check_on.push(res);
				}
			}	

		}	
			

	});
});