<?php



include 'db_conection.php';


$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$cedula = $_POST["cedula"];
$fechanacimiento = $_POST["fechanacimiento"];
$barrio = $_POST["barrio"];
$telefonocelular = $_POST["telefonocelular"];
$ciudadresidencia = $_POST["ciudadresidencia"];

   
    $sql =  "INSERT INTO citas (nombre, apellidos, cedula, fechanacimiento, barrio, telefonocelular, ciudadresidencia) VALUES ('$nombre' , '$apellidos' , '$cedula' , '$fechanacimiento' , '$barrio' , '$telefonocelular', '$ciudadresidencia')";


    $result = $conn->query($sql);
    header("location: index.php");

  