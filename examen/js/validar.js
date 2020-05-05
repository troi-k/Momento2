function validar() {
    var nombre, apellidos, cedula, fechanacimiento, barrio, telefonocelular, ciudadresidencia;
    nombre = document.getElementById("nombre") .value;
    apellidos = document.getElementById("apellidos") .value;
    cedula = document.getElementById("cedula") .value
    fechanacimiento = document.getElementById("fechanacimiento") .value;
    barrio = document.getElementById("barrio") .value;
    telefonocelular = document.getElementById("telefonocelular") .value;
    ciudadresidencia = document.getElementById("ciudadresidencia") .value;





    if (nombre=== "" || apellidos=== "" || cedula==="" || fechanacimiento==="" || barrio==="" || telefonocelular==="" || ciudadresidencia===""){
        alert ("Todos los campos son obligatorios");
        return false;
    }
    else if (nombre.length >20){
        alert ("el nombre es muy largo");
        return false;
    }

    else if (apellidos.length >30){
        alert ("el apellido es muy largo");
        return false;
    }

   
   

    else if (telefonocelular.length >10){
       

        alert ("el telefono solo puede contener 10 numeros como maximo");
        return false;
    }
    else if (isNaN(telefonocelular)){
        alert ("el telefono ingresado no es un numero");
        return false;
    }
    else if (isNaN(cedula)){
        alert ("la cedula  ingresada no es un numero");
        return false;
    }
   
    
}