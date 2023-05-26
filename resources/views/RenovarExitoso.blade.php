@extends('layouts.app')

@section('content')
<div><br>
<h2 class="text-100 text-center">Aprovado</h2>
<div class="card-body">
                    <form method="GET" id="formularioRegisCurso" action="{{route('misSubscripciones')}}">
                        @csrf

                        <h4 class="text-100">Sr(a): {{ Auth::user()->name }} su pago fue exitoso</h4>

                        <br>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
<?php

$payment = $_GET['payment_id'];
$status = $_GET['status'];
$payment_type = $_GET['payment_type'];
$order_id = $_GET['merchant_order_id'];

echo '<span class="text-100">N° Pago:  </span>'.$payment.'<br>';
echo '<span class="text-100">Estado:  </span>'.$status.'<br>';
echo '<span class="text-100">Tipo:  </span>'.$payment_type.'<br>';
echo '<span class="text-100">N° Orden:  </span>'.$order_id.'<br>';


if ($status == 'approved'){

    
    include("conexion.php");
    $con=conectar();
    $dato_userid = Auth::user()->id;
    $user_id = $dato_userid;
    $fecha_ini = date("Y-m-d");
    $fecha_fin = date("Y-m-d",strtotime($fecha_ini."+ 1 month"));
    
    
    $insertar1 = "INSERT INTO pagos (id, user_id, tipo, estado	) VALUES(
        '$payment',
        '$user_id', 
        '$payment_type',
        '$status')";
    
    $query1 = mysqli_query($con, $insertar1);

    $newfecha_fin = date("Y-m-d",strtotime($fecha_ini."+ 1 month"));
    $newfecha_fin2 = date("Y-m-d",strtotime($subscripcion->fecha_fin."+ 1 month"));

    if ($subscripcion->fecha_ini >= $subscripcion->fecha_fin) {

        $insertar = "UPDATE subscripcions SET fecha_fin='$newfecha_fin', Estado='1' WHERE id='$subscripcion->id'";
    
        $query = mysqli_query($con, $insertar);

    
    }
    elseif($subscripcion->fecha_ini <= $subscripcion->fecha_fin) {

        $insertar = "UPDATE subscripcions SET fecha_fin='$newfecha_fin2', Estado='1' WHERE id='$subscripcion->id'";
    
        $query = mysqli_query($con, $insertar);

      
    }
    
    header('location: ./../misSubscripciones'); 
        exit();
        
    }
    else{
    
    }
?>
                            </div>
                        </div>
                        <br>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Mis suscripciones') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
@endsection
