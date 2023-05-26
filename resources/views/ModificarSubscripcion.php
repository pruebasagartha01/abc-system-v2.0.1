
<?php

include("conexion.php");
$con=conectar();
$dato_userid = Auth::user()->id;
$user_id = $dato_userid;


$insertar = "UPDATE subscripcions SET Estado = 1 WHERE user_id = '$user_id'";

$query = mysqli_query($con, $insertar);




$insertar1 =  "UPDATE Subscripcion SET Estado = 0 WHERE user_id = '$user_id'";

if ($query) {
    header('location: pagoExitoso'); 
    exit();
    


    }
    else {

    }

?>



