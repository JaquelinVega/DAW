<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use auth;
use PDF;
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
       
        
        return view('admin.Clientes')->with('datos',$datos);
    }
    public function generar(){
        $datos=\DB::table('clients')->select('clients.*', 'users.id as idUser', 'users.email','users.name' )
        ->orderBy('clients.id','DESC')
        ->join('users','clients.id_user','=','users.id')->get();

        $fecha=date('Y,m,d');
        $todo= compact('datos','fecha');
        $pdf = PDF::loadView('reportes.clientes', $todo);
       // return $pdf->download('reporte.pdf');
       return $pdf->download('reporte_'.date('Y_m_d_h_m_s').'.pdf');
    }
}


