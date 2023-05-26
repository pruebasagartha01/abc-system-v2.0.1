<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\subscripcion;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('panelAdmin');
    }
    public function index1(Request $request)
    {
        $busqueda = $request->busqueda;
        $versus = $request->versus;
        $columnas = $request->columna;
        $columnasus = $request->columnasus;
        $clientName = User::where('Name','LIKE','%'.$busqueda.'%')
            ->latest('id')
            ->paginate(10);
            $clientId = User::where("id",'LIKE','%'.$busqueda.'%')
            ->latest('id')
            ->paginate(10);
            $clientEmail = User::where("email",'LIKE','%'.$busqueda.'%')
            ->latest('id')
            ->paginate(10);
            $clientSubs = subscripcion::where('user_id','LIKE',$versus)
            ->latest('id')
            ->paginate(10);

           


        $datos =  User::all();
        return view('editarUsuario', compact('datos'))
        ->with('clientsName', $clientName)
        ->with('clientsId', $clientId)
        ->with('clientsEmail', $clientEmail)
        ->with('columnasFind', $columnas)
        ->with('columnasus', $columnasus)
        ->with('clientSubs', $clientSubs);


    }

   

    public function index2()
    {
        return view('editarChatBot');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('actualizarUsuario', compact('user'));
    }
    
    public function update(request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->rol = $request->post('rol');
        $user->save();

        return redirect()->route("home")->with("success", "Agregado con exito!");
    }

    public function subscripcion($id)
    {
        
        $subscripcion =  subscripcion::find($id);
        return view('actualizarSubscripcion', compact('subscripcion'));
    }

    public function updated(request $request, $id)
    {
        $subscripcion = subscripcion::find($id);
        $subscripcion->fecha_ini = $request->post('fecha_ini');
        $subscripcion->fecha_fin = $request->post('fecha_fin');
        $subscripcion->estado = $request->post('Estado');
        $subscripcion->save();

        return redirect()->route("home")->with("success", "Agregado con exito!");
    }




}
