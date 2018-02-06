<?php

namespace dservices\Http\Controllers\usuarios;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use dservices\Model\sedes;
use dservices\Model\ciudades;
use dservices\Model\tiposervicios;
use dservices\Model\contratistas;
use Session;
use dservices\User;
use Auth;



class sedesController extends Controller
{
    public function index(){

        $user=User::find(Auth::id());
        if ($user){
            if ($user{'tipodocumento_id'}<'1'){
                return redirect()->route('confirmardatos.index');           
            }
        }        
    	
    	$sedes=sedes::select('sedes.*','ciudades.name')
		->join('ciudades','sedes.ciudades_id','ciudades.id')
		->get();

    	return view('usuarios.sedesView')
    	->with('sedes',$sedes);
    }

    public function show($id){

        Session(['sedes_id'=>$id]);
        $tiposervicios=contratistas::select('tiposervicios.nombre','tiposervicios.id')
        ->join('tiposervicios','contratistas.tiposervicios_id','tiposervicios.id')
        ->where('contratistas.sedes_id',$id)
        ->groupBy('tiposervicios.id','tiposervicios.nombre')
        ->get();
        
    	return view('welcome')
    	->with('tiposervicios',$tiposervicios);
    }
}
