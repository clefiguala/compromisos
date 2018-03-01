function validacion(){
    numero=document.getElementById("rut").value;
    valida=parseInt(numero);   
	
    if(document.getElementById('rut').value==''){
       alert('Por favor ingrese un RUT'); //<!-- mensaje de alerta para que complete si o si el campo  -->
        document.getElementById('rut').focus(); //<!-- posicionamos el puntero en el campo nick -->
        return false;
    }
    else if(document.getElementById('pass').value==''){
        alert('La contraseña no puede quedar vacia'); //<!-- mensaje de alerta para que complete si o si el campo  -->
        document.getElementById('rut').focus(); //<!-- posicionamos el puntero en el campo nick -->
        return false;
    }         
  // <!-- La funcion isNAN evalua un argumento para determinar si este no es un numero  -->      
    else if(isNaN(valida)){
                    
        alert("el campo Rut es incorrecto.");
        document.getElementById("rut").focus(); 
        return false;
    }
	else{
	return true;
	}
	
}


