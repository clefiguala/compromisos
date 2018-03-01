//***************CONTROL DE CHECKBOX***********************************
$(document).ready(function() {
$("input:checkbox:unchecked").each(   
    function() {
		var cadena1 = $(this).attr("id");
        var rw_tx = cadena1.split("_")[1];
		$("#rw_"+rw_tx).hide();	
    }
);
});
//*****************************************************************
//********************* TAB DOCENCIA *******************************
/**********************checkbox mejoramiento**********************************/
$('#ch_mejora1').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_mejora1').show("swing");
		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_mejora1').hide("linear");
    }
});

$( '#ch_mejora2' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_mejora2').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_mejora2').hide("linear");
    }
});

$( '#ch_mejora3' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_mejora3').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_mejora3').hide("linear");
    }
});
$( '#ch_mejora4' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_mejora4').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_mejora4').hide("linear");
    }
});
/**********************fin checkbox mejoramiento**********************************/

/**********************checkbox otros productos*********************************/
$( '#ch_otrosp1' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_otrosp1').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_otrosp1').hide("linear");
    }
});
$( '#ch_otrosp2' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_otrosp2').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_otrosp2').hide("linear");
    }
});
$( '#ch_otrosp3' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_otrosp3').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_otrosp3').hide("linear");
    }
});
$( '#ch_otrosp4' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_otrosp4').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_otrosp4').hide("linear");
    }
});
$( '#ch_otrosp5' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_otrosp5').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_otrosp5').hide("linear");
    }
});
$( '#ch_otrosp6' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_otrosp6').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_otrosp6').hide("linear");
    }
});


//*****************************************************************
//********************* TAB PRODUCCION INTELECTUAL *******************************
$('#ch_produccion1').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_produccion1').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_produccion1').hide("linear");
    }
});
$('#ch_produccion2').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_produccion2').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_produccion2').hide("linear");
    }
});
$('#ch_produccion3').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_produccion3').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_produccion3').hide("linear");
    }
});
$('#ch_produccion4').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_produccion4').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_produccion4').hide("linear");
    }
});
$('#ch_produccion5').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_produccion5').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_produccion5').hide("linear");
    }
});
//*****************************************************************
//********************* TAB EXTENSION Y VINCULO *******************************

/**********************checkbox Docencia*********************************/
$('#ch_docencia1').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_docencia1').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_docencia1').hide("linear");
    }
});
$('#ch_docencia2').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_docencia2').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_docencia2').hide("linear");
    }
});
$('#ch_docencia3').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_docencia3').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_docencia3').hide("linear");
    }
});
/**********************checkbox Investigacion*********************************/
$('#ch_investigacion1').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_investigacion1').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_investigacion1').hide("linear");
    }
});
$('#ch_investigacion2').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_investigacion2').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_investigacion2').hide("linear");
    }
});
$('#ch_investigacion3').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_investigacion3').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_investigacion3').hide("linear");
    }
});
$('#ch_investigacion4').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_investigacion4').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_investigacion4').hide("linear");
    }
});
$('#ch_investigacion5').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_investigacion5').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_investigacion5').hide("linear");
    }
});
$('#ch_investigacion6').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_investigacion6').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_investigacion6').hide("linear");
    }
});
/**********************checkbox extension*********************************/
$('#ch_extension1').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_extension1').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_extension1').hide("linear");
    }
});
$('#ch_extension2').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_extension2').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_extension2').hide("linear");
    }
});
$('#ch_extension3').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_extension3').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_extension3').hide("linear");
    }
});
$('#ch_extension4').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_extension4').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_extension4').hide("linear");
    }
});
$('#ch_extension5').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_extension5').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_extension5').hide("linear");
    }
});
$('#ch_extension6').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_extension6').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_extension6').hide("linear");
    }
});
$('#ch_extension7').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_extension7').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_extension7').hide("linear");
    }
});

//*****************************************************************
//********************* TAB GESTION *******************************
$('#ch_gestion1').on('click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_gestion1').show("swing");		
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_gestion1').hide("linear");
    }
});

$( '#ch_gestion2' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_gestion2').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_gestion2').hide("linear");
    }
});

$( '#ch_gestion3' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_gestion3').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_gestion3').hide("linear");
    }
});
$( '#ch_gestion4' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_gestion4').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_gestion4').hide("linear");
    }
});

$( '#ch_gestion5' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_gestion5').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_gestion5').hide("linear");
    }
});

$( '#ch_gestion6' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $('#rw_gestion6').show("swing");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#rw_gestion6').hide("linear");
    }
});