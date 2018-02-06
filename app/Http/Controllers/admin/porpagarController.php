<?php

namespace dservices\Http\Controllers\admin;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use dservices\Model\contratistas;
use dservices\Model\servicioscontratistas;
use dservices\Model\solicitudes;
use dservices\Model\estadosolicitudes;
use dservices\Model\sedesusers;
use dservices\User;
use Auth;

class porpagarController extends Controller
{
    public function index(){
    	$sedesusers=sedesusers::where('users_id',Auth::id())->first();        
        $solicitudes=solicitudes::select('solicitudes.*','users.name','servicioscontratistas.nombre as servicio','contratistas.nombre as contratista', 'estadosolicitudes.nombre as estado','ciudades.name as ciudad')
        ->join('users','solicitudes.users_id','users.id')
        ->join('servicioscontratistas','solicitudes.servicioscontratistas_id','servicioscontratistas.id')
        ->join('estadosolicitudes','solicitudes.estadosolicitudes_id','estadosolicitudes.id')
        ->join('contratistas','servicioscontratistas.contratistas_id','contratistas.id')
        ->join('sedes','contratistas.sedes_id','sedes.id')
        ->join('ciudades','sedes.ciudades_id','ciudades.id')
        ->where('solicitudes.estadosolicitudes_id',6)
        ->where('contratistas.sedes_id',$sedesusers->sedes_id)        
        ->get();
        
        return view('admin.porpagarView')
        ->with('solicitudes',$solicitudes);
    }
    
}
