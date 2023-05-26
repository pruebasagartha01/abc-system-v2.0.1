@extends('layouts.app')

@section('content')
<div><br>
<h2 class="text-100 text-center">Mi Perfil:</h2>

<div class="card-body">
    
                    <form method="POST" id="formularioRegisCurso" action="RegistroChat.php">
                        @csrf

                        <div class="row " >
                    <div class="col-md-5 form-group ">
                        <label for="saludo" >Tu Nombre es: {{ Auth::user()->name }}</label>

                    </div> 
                    <div class="col-md-6 form-group">
                        <label for="saludo" >Tu Correo es: {{ Auth::user()->email }}</label>
                    </div>
                    
                    <div class="col-md-5 form-group">
                        <label for="saludo" >Tu cuenta fue creada: {{ Auth::user()->created_at }}</label>

                    </div> 
                    <div class="col-md-6 form-group">
                        <label for="saludo" >Tu cuenta fue modificada: {{ Auth::user()->updated_at }}</label>

                    </div> 
                   
                </div>
                <br>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modificar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>




                
@endsection
