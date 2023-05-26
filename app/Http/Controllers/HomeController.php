<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\subscripcion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('home');
    }
       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index1()
    {
        return view('nuevochat');
    }

    public function index2()
    {
        return view('modificarchat');
    }

    public function index3()
    {
        return view('miPerfil');
    }

    public function index4()
    {
        return view('pagoExitoso');
    }

    public function index5()
    {
        return view('pagoFallido');
    }

    public function index6()
    {
        return view('subscripcion');
    }
    public function index7()
    {
        $dato_userid = Auth::user()->id;
        $user_id = $dato_userid;
        $clientSubs = subscripcion::where('user_id','LIKE',$user_id)
        
        ->paginate(10);
        return view('misSubscripciones')
        ->with('clientSubs', $clientSubs);;
    }
    public function index8($id)
    {
        
            $subscripcion = subscripcion::find($id);
            return view('renovarSubscripcion', compact('subscripcion'));
       
    }
    public function index9($id)
    {
        
            $subscripcion = subscripcion::find($id);
            return view('renovarExitoso', compact('subscripcion'));
       
    }
    public function newsub()
    {
        $fecha_ini = date("Y-m-d");
        $fecha_fin = date("Y-m-d",strtotime($fecha_ini."+ 1 month"));
        return subscripcion::create([
            'user_id' => Auth::user()->id,
            'fecha_ini' => $fecha_ini,
            'fecha_fin' => $fecha_fin,
            'Estado' => '1',
        ])->view('misSubscripciones');
           
       
    }
}
