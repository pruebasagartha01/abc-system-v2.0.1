
<?php

include("conexion.php");
$con=conectar();
$dato_userid = Auth::user()->id;
$user_id = $dato_userid;
$fecha_ini = date("Y-m-d");
$fecha_fin = date("Y-m-d",strtotime($fecha_ini."+ 1 month"));

$insertar = "INSERT INTO subscripcions (user_id, fecha_ini, fecha_fin) VALUES(
    '$user_id', 
    '$fecha_ini',
    '$fecha_fin')";

$query = mysqli_query($con, $insertar);


if ($query) {
    header('location: pagoExitoso'); 
    exit();
    


    }
    else {

    }

?>



