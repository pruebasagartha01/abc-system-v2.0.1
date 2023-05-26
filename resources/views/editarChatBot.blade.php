@extends('layouts.app')

@section('content')
<div><br>
<h2 class="text-100 text-center">Editar ChatBot:</h2>

<div class="card-body">
    
                    <form method="POST" id="formularioRegisCurso" action="RegistroChat.php">
                        @csrf

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
