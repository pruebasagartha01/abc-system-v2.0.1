<?php

include("conexion.php");
$con=conectar();

$saludo = $_POST['saludo'];
$menu = $_POST['menu'];


$insertar = "INSERT INTO newchat (Saludo, Menu) VALUES(
    '$saludo', 
    '$menu')";

$query = mysqli_query($con, $insertar);


if ($query) {
    header('location: modificarchat'); 
    exit();
    


    }
    else {

    }

?>