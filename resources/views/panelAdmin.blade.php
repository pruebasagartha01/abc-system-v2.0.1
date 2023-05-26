@extends('layouts.app')

@section('content')
<div><br>
<h2 class="text-100 text-center">Panel Administrador:</h2>

<div class="card-body">
    
                   
                        @csrf

                        <div class="row text-center" >
                        <div class="col-md-6 form-group ">
                        <form action="{{ route('admin.editarUsuario')}}">
                                <button type="submit" class="btn btn-primary" action="{{ route('admin.editarUsuario')}}">
                                    {{ __('Modificar Usuarios') }}
                                </button>
                            </div>
                            </form>
                            
                            <div class="col-md-5 form-group ">
                            <form action="editarChatBot">
                                <button type="submit" class="btn btn-primary" action="editarChatBot">
                                    {{ __('Modificar ChatBot') }}
                                </button>
                            </div>
                            </div>
                        <br>
                        
                </div>
                <br>


                       
                    

                </div>
                </div>
@endsection
