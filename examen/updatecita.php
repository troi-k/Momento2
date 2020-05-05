<?php
    if(isset($_GET['id'])){
    include_once('db_conection.php');
    $id= $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $fechanacimiento = $_POST['fechanacimiento'];
    $telefonocelular = $_POST['telefonocelular'];
    $barrio = $_POST['barrio'];
    $ciudadresidencia = $_POST['ciudadresidencia'];

    $sql = "UPDATE  citas SET nombre='{$nombre}', apellidos='{$apellidos}' , cedula='{$cedula}' , fechanacimiento='{$fechanacimiento}' , telefonocelular='{$telefonocelular}' , barrio='{$barrio}' , ciudadresidencia='{$ciudadresidencia}' 

    
    WHERE id= {$id}";
    $result = $conn->query($sql);


    $resultado = mysqli_query($conn, $sql);
if (!$resultado) {
    echo 'Error al registrarse';
}
else{
    //echo 'Usuario registrado exitosamente';
    


echo "<script type=\"text/javascript\">alert(\"Usuario registrado exitosamente\");</script>"; 
}



    
}

header("location: index.php");


?>




