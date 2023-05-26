@extends('layouts.app')

@section('content')


<div >
    <div class="row justify-content-center">
        <div >
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Bienvenido 
                    {{ Auth::user()->name }}
                    <br><br>
                    {{ __('Iniciaste sesion en ABCsystem!')  }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


