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
              "success" => "http://127.0.0.1:8000/pagoExitoso",
              "failure" => "http://127.0.0.1:8000/pagoFallido"
);


$preference->auto_return = "approved";
$preference->binary_mode = true;  

$preference->save();
?>

<div>

            <div class="">
              <div >
                <div class="card-body p-4 p-xl-6">
                  <h2 class="text-100 text-center">Modifica tu ChatBot:</h2>
                  
                    <div class="col-12 d-grid">
                      <button class="btn btn-primary rounded-pill" type="submit">Enviar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cho-container"></div>
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
label: 'Pagar',
}
});
</script>
        
        
     
     
@endsection
