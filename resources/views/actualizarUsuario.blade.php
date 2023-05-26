@extends('layouts.app')

@section('content')
<div><br>
<h2 class="text-100 text-center">Modificar Usuario:</h2>

<div class="card-body">
   
      <p class="card-text">
      <div class="table-responsive">  
      <form action="{{ route('admin.update', $user->id) }}" method="POST">
      @csrf
      @method("PUT")
        <label for="">Nombre</label>
        <input type="text" name="name" class="form-control" required value="{{$user->name}}">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" required value="{{$user->email}}">
        <label for="">Rol</label>
        <input type="text" name="rol" class="form-control" required value="{{$user->rol}}">
        <br>
        <a href="{{ route('admin.editarUsuario') }}">

      </p>
      




                </div> <br>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modificar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
          




                
@endsection
