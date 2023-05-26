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
              "success" => "http://127.0.0.1:8000/subscripcion",
              "failure" => "http://127.0.0.1:8000/pagoFallido"
);
$preference->auto_return = "approved";
$preference->binary_mode = true;  

$preference->save();
?>

<div><br>
<h2 class="text-100 text-center">Mis Suscripciones:</h2>



<div class="card-body">
    
                    
                        @csrf

                        <label >Usuario: &nbsp;</label>{{ Auth::user()->name }}
   
                        <br>

                <table style="width:100%">
                    <tr>
                  
                 
                        <th class="col-md-3 ">Fecha inicio</th>
                        <th class="col-md-3">Fecha termino</th>
                        <th class="col-md-2">Estado</th>
                        
                      
        
                    </tr>
                 
                    @foreach ($clientSubs as $item)
                    <tr>
                    
                    <td>{{$item->fecha_ini}}</td>
                        <td>{{$item->fecha_fin}}</td>
                        <td>
                        <?php If ($item->Estado == '1')
{
?>
                                <span style="color: green"><b>Pagado</span>
                                <?php } 
                            else if ($item->Estado == '2')
                            { ?>
                                <span style="color: yellow"><b>Pendiente</span>

                            <?php } 
                            else {
                            ?>
                                <span style="color: red"><b>No Pagado</span>
                            <?php } ?>
                            
                        </td>

                        <td >
                        <form action="{{ route('renovarSubscripcion', $item->id) }}" method="GET">
                 <button class="btn btn-warning btn-sm">
                   <span class="fas fa-user-edit">Renovar</span>
                 </button>
               </form>
                        </td>
                    

                    </tr>
                  @endforeach
                </table>
                </div>
                <br>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-secondary">
                                    <a href="home">Regresar</a>
                                </button>
                            </div>
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
label: 'Pagar',
}
});
</script>




                
@endsection