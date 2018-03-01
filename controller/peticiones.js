$(document).ready(function()
{
	$("#GuardarCompromiso").click(function () 
	{

		// obtener los check
		// el valor que puede venir es on o undefined


		// TAB DOCENCIA : Mejoramiento indicadores de docencia
		
		var mejora_1 = $('#ch_mejora1:checked').val();
		var mejora_2 = $('#ch_mejora2:checked').val();
		var mejora_3 = $('#ch_mejora3:checked').val();
		var mejora_4 = $('#ch_mejora4:checked').val();

		// TAB DOCENCIA : otros productos

		var otrosp_1 = $('#ch_otrosp1:checked').val();
		var otrosp_2 = $('#ch_otrosp2:checked').val();
		var otrosp_3 = $('#ch_otrosp3:checked').val();
		var otrosp_4 = $('#ch_otrosp4:checked').val();
		var otrosp_5 = $('#ch_otrosp5:checked').val();
		var otrosp_6 = $('#ch_otrosp6:checked').val();

		//TAB PRODUCCION INTELECTUAL 
		var produccion_1 = $('#ch_produccion1:checked').val();
		var produccion_2 = $('#ch_produccion2:checked').val();
		var produccion_3 = $('#ch_produccion3:checked').val();
		var produccion_4 = $('#ch_produccion4:checked').val();
		var produccion_5 = $('#ch_produccion5:checked').val();


		//TAB EXTENSION Y VINCULO : docencia

		var docencia_1 = $('#ch_docencia1:checked').val();
		var docencia_2 = $('#ch_docencia2:checked').val();
		var docencia_3 = $('#ch_docencia3:checked').val();

		//TAB EXTENSION Y VINCULO : investigacion

		var investigacion_1 = $('#ch_investigacion1:checked').val();
		var investigacion_2 = $('#ch_investigacion2:checked').val();
		var investigacion_3 = $('#ch_investigacion3:checked').val();
		var investigacion_4 = $('#ch_investigacion4:checked').val();
		var investigacion_5 = $('#ch_investigacion5:checked').val();
		var investigacion_6 = $('#ch_investigacion6:checked').val();		

		//TAB EXTENSION Y VINCULO : extension

		var extension_1 = $('#ch_extension1:checked').val();
		var extension_2 = $('#ch_extension2:checked').val();
		var extension_3 = $('#ch_extension3:checked').val();
		var extension_4 = $('#ch_extension4:checked').val();
		var extension_5 = $('#ch_extension5:checked').val();
		var extension_6 = $('#ch_extension6:checked').val();
		var extension_7 = $('#ch_extension7:checked').val();
		
		//TAB GESTION

		var gestion_1 = $('#ch_gestion1:checked').val();
		var gestion_2 = $('#ch_gestion2:checked').val();
		var gestion_3 = $('#ch_gestion3:checked').val();
		var gestion_4 = $('#ch_gestion4:checked').val();
		var gestion_5 = $('#ch_gestion5:checked').val();
		var gestion_6 = $('#ch_gestion6:checked').val();

		//se recorre cada sub nivel para consultar si vienen on los check.
		var mejora = 4;
		var otrosp = 6;
		var produccion = 5;
		var docencia = 3;
		var investigacion = 6;
		var extension = 7;
		var gestion = 6;

		var datos_check_on = []; 		
		
		recorrer(mejora,'mejora');
		recorrer(otrosp,'otrosp');
		recorrer(produccion,'produccion');
		recorrer(docencia,'docencia');
		recorrer(investigacion,'investigacion');
		recorrer(extension,'extension');
		recorrer(gestion,'gestion');

		function recorrer(largo,nombre)
		{
			for (var i = 1; i <= largo; i++) 
			{
				var str1 = nombre+'_';
				var valor = i;
				var res = str1.concat(valor);
				
				if(eval(res) == 'on')
				{
					datos_check_on.push(res);
				}
			}	

		}
	
		alert(datos_check_on);
			

	});
});