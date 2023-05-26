@extends('layouts.app')

@section('content')

<?php
// SDK de Mercado Pago
require base_path('vendor/autoload.php');
// Agrega credenciales
$public_token = 'TEST-5019845118886647-051118-719524aa010527b4bbe515977130e3c7-441345460';
MercadoPago\SDK::setAccessToken($public_token);

$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 700;
$preference->items = array($item);

$preference->back_urls = array(
              "success" => "http://127.0.0.1:8000/renovarExitoso/".$subscripcion->id,
              "failure" => "http://127.0.0.1:8000/pagoFallido"
);
$preference->auto_return = "approved";
$preference->binary_mode = true;  

$preference->save();
?>


<div><br>
<h2 class="text-100 text-center">Renovar Suscripcion:</h2>

<?php
if ( Auth::user()->id == $subscripcion->user_id)
{
?>

<div class="card-body">
   
      <p class="card-text">
      <div class="table-responsive">  
      
      @csrf
      
      
       
        <label for="">fecha inicial:</label>
        <input type="date" name="fec_ini" class="form-control" required value="{{$subscripcion->fecha_ini}}" readonly><br>
        <label for="">fecha final:</label>
        <input type="text" name="fec_fin" class="form-control" required value="{{$subscripcion->fecha_fin}}" readonly><br>
        <label for="">Estado:</label>
        <input type="text" name="estado" class="form-control" required value="{{$subscripcion->Estado}}" readonly><br>
        
        <br>
        

      </p>
                </div> 

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
                            <div class="cho-container"></div>
                                </button>
                            </div>
                        </div>
                    
                </div>
          
                
        <script src="https://sdk.mercadopago.com/js/v2"></script>
        
        <script>
          
          var public_key = 'TEST-936aced5-23e0-453a-b259-defa7acf00da'
const mp = new MercadoPago(public_key, {
locale: 'es-CL'
});

mp.checkout({
preference: {
id: '<?php echo $preference->id; ?>'
},
render: {
container: '.cho-container',
label: 'Renovar',
}
});
</script>

<?php 
}

else
{ ?>
<br>
 <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
                            <div> <a>Esta suscripcion no existe</a></div>
                                </button>
                            </div>
                        </div>

<?php
}
?>
   <br>             
@endsection