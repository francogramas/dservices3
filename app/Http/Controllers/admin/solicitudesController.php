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
use dservices\Mail\asignacionCitaMail;
use Mail;

use Auth;
use Session;

class solicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sedesusers=sedesusers::where('users_id',Auth::id())->first();

        $solicitudes=solicitudes::select('solicitudes.*','users.name','servicioscontratistas.nombre as servicio','contratistas.nombre as contratista', 'estadosolicitudes.nombre as estado','ciudades.name as ciudad')
        ->join('users','solicitudes.users_id','users.id')
        ->join('servicioscontratistas','solicitudes.servicioscontratistas_id','servicioscontratistas.id')
        ->join('estadosolicitudes','solicitudes.estadosolicitudes_id','estadosolicitudes.id')
        ->join('contratistas','servicioscontratistas.contratistas_id','contratistas.id')
        ->join('sedes','contratistas.sedes_id','sedes.id')
        ->join('ciudades','sedes.ciudades_id','ciudades.id')
        ->whereIn('solicitudes.estadosolicitudes_id',['1','2'])
        ->where('contratistas.sedes_id',$sedesusers->sedes_id)
        ->get();
        
        return view('admin/solicitudesView')
        ->with('solicitudes',$solicitudes);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $solicitudes=solicitudes::FindOrFail($id);
        $solicitudes->fill($request->all())->save();

        $solicitud=solicitudes::select('solicitudes.*','users.name','users.email','servicioscontratistas.nombre as servicio','contratistas.nombre as contratista')->join('users','solicitudes.users_id','users.id')->join('servicioscontratistas','solicitudes.servicioscontratistas_id','servicioscontratistas.id')->join('contratistas','servicioscontratistas.contratistas_id','contratistas.id')->where('solicitudes.id',10)->first();

        Mail::to($solicitud->mail)->queue(new asignacionCitaMail($solicitud));        
        
        return response()->json(['succes'=>'true']);

    }

    public function destroy($id)
    {
        //
    }

    public function mostarSolicitudes(){
        
        $solicitudes=solicitudes::select('solicitudes.*','users.name','servicioscontratistas.nombre as servicio','contratistas.nombre as contratista', 'estadosolicitudes.nombre as estado','ciudades.name as ciudad')
        ->join('users','solicitudes.users_id','users.id')
        ->join('servicioscontratistas','solicitudes.servicioscontratistas_id','servicioscontratistas.id')
        ->join('estadosolicitudes','solicitudes.estadosolicitudes_id','estadosolicitudes.id')
        ->join('contratistas','servicioscontratistas.contratistas_id','contratistas.id')
        ->join('sedes','contratistas.sedes_id','sedes.id')
        ->join('ciudades','sedes.ciudades_id','ciudades.id')
        ->whereIn('solicitudes.estadosolicitudes_id',['1','2'])
        ->get();
         return view('admin/solicitudesTablaView')
        ->with('solicitudes',$solicitudes);        
    }

    public function pendientes($sedes_id){
        $pendientes=solicitudes::join('servicioscontratistas','solicitudes.servicioscontratistas_id','servicioscontratistas.id')
        ->join('contratistas','servicioscontratistas.contratistas_id','contratistas.id')
        ->whereIn('estadosolicitudes_id',[1,2])
        ->where('contratistas.sedes_id',$sedes_id)
        ->count();

        $porpagar=solicitudes::join('servicioscontratistas','solicitudes.servicioscontratistas_id','servicioscontratistas.id')
        ->join('contratistas','servicioscontratistas.contratistas_id','contratistas.id')
        ->where('estadosolicitudes_id',6)
        ->where('contratistas.sedes_id',$sedes_id)
        ->count();

        return response()->json(['pendientes'=>$pendientes,'porpagar'=>$porpagar]);
    }
}
