@extends('layouts.app')

@section('content')
<div><br>
<h2 class="text-100 text-center">Mostrar Usuarios:</h2>

<div class="card-body">

<div>
            <form  role="search" action="{{route('admin.editarUsuario')}}" method="GET">
            <div >


            <input type="radio" id="css" name="columna" value="clientsId" checked="check">
            <label for="html" class="col-md-1 ">ID</label>

            <input type="radio" id="css" name="columna" value="clientsName">
            <label for="css" class="col-md-1">Nombre</label>

            <input type="radio" id="javascript" name="columna" value="clientsEmail">
            <label for="javascript">Email</label>
            </div>
<div class="col-md-6" >
                <input class="form-control" type="search" placeholder="Buscar" aria-label="Search" name="busqueda" required >
                
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>


        </div>
        <br><br>
        <table class="">
            <thead>
            <td class="col-md-1 ">id</td>
              <td class="col-md-3 ">Nombre</td>
              <td class="col-md-3 ">Email</td>
              <td class="col-md-1 ">Rol</td>
              <td class="col-md-2 ">Cuenta creada</td>
              <td class="col-md-2 ">Ultima modificacion</td>
              <td class="col-md-2 ">Estado</td>
              <td class="col-md-2 ">Editar</td>
              <td class="col-md-2 ">Subs</td>
            </thead>
            <tbody class="table">
            <?php If ($columnasFind == "")
                { ?>

                  @foreach ($clientsId as $item)
                  <tr>
           <td>{{$item->id}}</td>
             <td>{{$item->name}}</td>
             <td>{{$item->email}}</td>
             <td>{{$item->rol}}</td>
             <td>{{$item->created_at}}</td>
             <td>{{$item->updated_at}}</td>
             <td>
             @if ($item->estado)
                  <span style="color: green"><b>Activo</span>
                  @else
                  <span style="color: red"><b>Inactivo</span>
                  @endif


             </td>
             <td>
             <form action="{{ route('admin.actualizarUsuario', $item->id) }}" method="GET">
                 <button class="btn btn-warning btn-sm">
                   <span class="fas fa-user-edit">Editar</span>
                 </button>
               </form>
             </td>
             <td>
             <form action="{{ route('admin.editarUsuario', $item->id) }}" method="GET">
                 <button class="btn btn-warning btn-sm">
                 <input type="radio" id="css" name="columnasus" value="idSus" checked="check" hidden>
                 <input type="search" id="javascript" name="versus" value="{{ $item->id }}" hidden>
                   <span class="fas fa-user-edit">Ver</span>
                 </button>
               </form>
             </td>
              
           </tr>
           @endforeach

               <?php }
             elseif ($columnasFind == "clientsId")
                { ?>

                  @foreach ($clientsId as $item)
                  <tr>
           <td>{{$item->id}}</td>
             <td>{{$item->name}}</td>
             <td>{{$item->email}}</td>
             <td>{{$item->rol}}</td>
             <td>{{$item->created_at}}</td>
             <td>{{$item->updated_at}}</td>
             <td>
             @if ($item->estado)
                  <span style="color: green"><b>Activo</span>
                  @else
                  <span style="color: red"><b>Inactivo</span>
                  @endif


             </td>
             <td>
             <form action="{{ route('admin.actualizarUsuario', $item->id) }}" method="GET">
                 <button class="btn btn-warning btn-sm">
                   <span class="fas fa-user-edit">Editar</span>
                 </button>
               </form>



             </td>
              
           </tr>
           @endforeach



               <?php }
               elseif  ($columnasFind == "clientsName")
               { ?>

                @foreach ($clientsName as $item)
                <tr>
           <td>{{$item->id}}</td>
             <td>{{$item->name}}</td>
             <td>{{$item->email}}</td>
             <td>{{$item->rol}}</td>
             <td>{{$item->created_at}}</td>
             <td>{{$item->updated_at}}</td>
             <td>
             @if ($item->estado)
                  <span style="color: green"><b>Activo</span>
                  @else
                  <span style="color: red"><b>Inactivo</span>
                  @endif

             </td>
             <td>
             <form action="{{ route('admin.actualizarUsuario', $item->id) }}" method="GET">
                 <button class="btn btn-warning btn-sm">
                   <span class="fas fa-user-edit">Editar</span>
                 </button>
               </form>



             </td>
              
           </tr>
           @endforeach



             <?php }
              elseif  ($columnasFind == "clientsEmail")
              { ?>

               @foreach ($clientsEmail as $item)
               <tr>
           <td>{{$item->id}}</td>
             <td>{{$item->name}}</td>
             <td>{{$item->email}}</td>
             <td>{{$item->rol}}</td>
             <td>{{$item->created_at}}</td>
             <td>{{$item->updated_at}}</td>
             <td>
             @if ($item->estado)
                  <span style="color: green"><b>Activo</span>
                  @else
                  <span style="color: red"><b>Inactivo</span>
                  @endif


             </td>
             <td>
             <form action="{{ route('admin.actualizarUsuario', $item->id) }}" method="GET">
                 <button class="btn btn-warning btn-sm">
                   <span class="fas fa-user-edit">Editar</span>
                 </button>
               </form>



             </td>
              
           </tr>
           @endforeach


            <?php }
?>
            

            </tbody>

        </table>

        <div class="row mb-0">

      </div>
</div>

                  
                        @csrf

                </div>
               
                <div > 

               

                </div> 
                <br><br>
                <?php 
             if ($columnasus == "idSus" )
                { ?>
                <h2 class="text-100 text-center">Subscripciones:</h2>
            
               
        <br><br>
        <table class="offset-md-2">
            <thead>
            <td class="col-md-1 ">id</td>
              <td class="col-md-2 ">User_id</td>
              <td class="col-md-2 ">Fecha_Ini</td>
              <td class="col-md-2 ">Fecha_Fin</td>
              <td class="col-md-2 ">Estado</td>
              <td class="col-md-2 ">Editar</td>

            </thead>
            <tbody class="table">
           
            

               @foreach ($clientSubs as $item1)
           <tr>
           <td>{{$item1->id}}</td>
             <td>{{$item1->user_id}}</td>
             <td>{{$item1->fecha_ini}}</td>
             <td>{{$item1->fecha_fin}}</td>
             
             <td>                                            
                   @if ($item1->estado = 1)
                   <span style="color: green"><b>Activo</span>
                       @else
                         <span style="color: red"><b>Inactivo</span>
                       @endif
                       </td>

                     
             <td>
               <form action="{{ route('admin.actualizarSubscripcion', $item1->id) }}" method="GET">
                 <button class="btn btn-warning btn-sm">
                   <span class="fas fa-user-edit">Editar</span>
                 </button>
               </form>

             </td>
     
              
           </tr>
           @endforeach

           
             
            </tbody>

        </table>

        <div class="row mb-0">
        <?php }
?>

 <div class="col-md-6 offset-md-5">
 <br><br>
      		<a href="{{ route('admin.index') }}">
             	<button type="submit" class="btn btn-info">
                   {{ __('Regresar') }}</a></button>
      </div>
</div>
<br><br>
                </div>    
                       
                </div>
                </div>




                
@endsection
