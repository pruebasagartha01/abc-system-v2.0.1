@extends('layouts.app')

@section('content')
<div><br>
<h2 class="text-100 text-center">Modificar Subscripcion:</h2>

<div class="card-body">
   
      <p class="card-text">
      <div class="table-responsive">  
      <form action="{{ route('admin.updated', $subscripcion->id) }}" method="POST">
      @csrf
      @method("PUT")
      
        <label for="">User ID:</label>
        <input type="text" name="user_id" class="form-control" required value="{{$subscripcion->user_id}}"><br>
        <label for="">fecha inicial:</label>
        <input type="date" name="fec_ini" class="form-control" required value="{{$subscripcion->fecha_ini}}"><br>
        <label for="">fecha final:</label>
        <input type="text" name="fec_fin" class="form-control" required value="{{$subscripcion->fecha_fin}}"><br>
        <label for="">Estado:</label>
        <input type="text" name="estado" class="form-control" required value="{{$subscripcion->Estado}}"><br>
        
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