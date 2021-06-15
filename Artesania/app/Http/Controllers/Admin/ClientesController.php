<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use auth;
class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        
        if(Auth::user()->level!="admin"){
            return redirect("/admin");
        }
        $datos=\DB::table('clients')->select('clients.*', 'users.id as idUser', 'users.email','users.name' )
        ->orderBy('clients.id','DESC')
        ->join('users','clients.id_user','=','users.id')->get();
        dd($datos);
        
        return view('admin.Clientes');
    }
    }


