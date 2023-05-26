@extends('layouts.app')

@section('content')
<div><br>
<h2 class="text-100 text-center">Crea tu ChatBot:</h2>
<div class="card-body">
                    <form method="POST" id="formularioRegisCurso" action="RegistroChat.php">
                        @csrf

                        <a> Su pago fue denegado.</a>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
@endsection
