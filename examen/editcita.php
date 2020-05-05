<?php
     if(isset($_GET['id'])){
        include_once('db_conection.php');
        $id= $_GET['id'];
    $sql = "SELECT * FROM citas WHERE id ={$id}";
    $result = $conn->query($sql);
    if($result-> num_rows>0){
        $row = $result->fetch_assoc();
       // print_r($row);
    }
        
    }
?>



<body>
    

<?php include_once('header.php'); ?>
<h1>Formulario Para Editar  Citas Medicas</h1>
<br>
<form action="updatecita.php?id=<?php  echo $row ['id']?>" method="POST" class="form-register" onsubmit="return validar();">
    <h2 class="form_titulo">INGRESA TUS DATOS</h2>
    <div class="contenedor-inputs">
        <input type="text" value="<?php echo $row['nombre'] ?>"id="nombre" name="nombre" placeholder="Nombre" class="input-48" required>
        <input type="text" value="<?php echo $row['apellidos'] ?>" id="apellidos" name="apellidos" placeholder="Apellidos" class="input-48" required>
        <input type="text" value="<?php echo $row['cedula'] ?>"id="cedula" name="cedula" placeholder="Cedula" class="input-48" required>
        <input type="text" value="<?php echo $row['fechanacimiento'] ?>"id="fechanacimiento" name="fechanacimiento" placeholder="Fecha De Nacimiento" class="input-48" required>
        <input type="text" value="<?php echo $row['telefonocelular'] ?>"id="telefonocelular" name="telefonocelular" placeholder="Telefono Celular" class="input-48"required >
        <input type="text" value="<?php echo $row['barrio'] ?>"id="barrio" name="barrio" placeholder="Barrio" class="input-48"required >
        <input type="text" value="<?php echo $row['ciudadresidencia'] ?>"id="ciudadresidencia" name="ciudadresidencia" placeholder="Ciudad De Residencia" class="input-100"required >

        
        <input type="submit" value="Modificar Cita" class="btn-enviar">
    </div>
</form>


        
<?php include_once('header.php'); ?>



