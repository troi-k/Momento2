<?php

    $host = 'localhost';//servidor
    $username = 'root'; //usuario base de datod
    $password = ''; //contraseña bd
    $dbName = 'citasmedicas';  //nombre bd
    $conn = new mysqli($host,$username,$password,$dbName);
    if($conn->connect_error){
        die($conn->connect_error);
    }
    //echo "connection successfuly";
?>







