@extends('layouts.app')

@section('content')
<div><br>
<h2 class="text-100 text-center">Crea tu ChatBot:</h2>
<div class="card-body">
                    <form method="POST" id="formularioRegisCurso" action="RegistroChat.php">
                        @csrf

                        <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="saludo" class="form-label text-uppercase">Nombre de Empresa</label>
                        <input type="text" class="form-control" id="saludo" name="saludo" aria-describedby="saludo">
                        <div id="saludoHelp" class="form-text">Ingrese el Nombre de su curso.</div>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="menu" class="form-label text-uppercase">Menu 1</label>
                        <input type="text" class="form-control" id="menu" name="menu" aria-describedby="menu">
                        <div id="menuHelp" class="form-text">Ingrese el Nombre Corto del curso.</div>
                    </div>
                </div>

                <select>
  <option value="opcion1">Boton</option>
  <option value="opcion2">Lista</option>
  <option value="opcion3">Texto</option>
</select>


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
