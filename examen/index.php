<?php include_once('header.php'); ?>




 
<body>
    


<h1>Formulario Para ReGistro de Citas Medicas</h1>
<br>
<form action="registrar.php" method="POST" class="form-register" onsubmit="return validar();">
    <h2 class="form_titulo">INGRESA TUS DATOS</h2>
    <div class="contenedor-inputs">
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input-48" required>
        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" class="input-48" required>
        <input type="text" id="cedula" name="cedula" placeholder="Cedula" class="input-48" required>
        <input type="text" id="fechanacimiento" name="fechanacimiento" placeholder="Fecha De Nacimiento" class="input-48" required>
        <input type="text" id="telefonocelular" name="telefonocelular" placeholder="Telefono Celular" class="input-48"required >
        <input type="text" id="barrio" name="barrio" placeholder="Barrio" class="input-48"required >
        <input type="text" id="ciudadresidencia" name="ciudadresidencia" placeholder="Ciudad De Residencia" class="input-100"required >

     <br><br>
  
        <input type="submit" value="Agendar Cita" class="btn-enviar">
    </div>
</form>


        


</body>
</html>





