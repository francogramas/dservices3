<?php

namespace dservices\Http\Controllers\usuarios;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use dservices\Model\contratistas;
use dservices\Model\servicioscontratistas;
use dservices\Model\solicitudes;
use dservices\Model\configuracion;
use dservices\Model\tarifas;
use dservices\Model\membresia;
//use dservices\Notifications\solicitudesNotificaction;
use Session;
use Auth;
 

class solicitudesController extends Controller
{
    public function index()
    {
        $Tbasica=tarifas::find(1);
        $Tmembresia=tarifas::find(2);

        $configuracion=configuracion::first();
        return view('usuarios.solicitudesView')
        ->with('configuracion',$configuracion)
        ->with('Tbasica',$Tbasica)
        ->with('Tmembresia',$Tmembresia);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $membresia=membresia::where('users_id',Auth::user()->id);
        $valor=servicioscontratistas::where('id',$request{'servicioscontratistas_id'})->first();
        $Tbasica=tarifas::find(1);
        $Tmembresia=tarifas::find(2);

        if($membresia){
            $request{'valor'}=$valor->tarifaparticular-($valor->tarifaparticular*$Tmembresia->porcentaje/100);  
            $request{'tarifas_id'}=2;
        }
        else{
            $request{'valor'}=$valor->tarifaparticular-($valor->tarifaparticular*$Tbasica->porcentaje/100);
            $request{'tarifas_id'}=1;            
        }


        $request{'users_id'}=Auth::user()->id;
        solicitudes::create($request->all());
        //Auth::user()->notify(new solicitudesNotificaction());
        return redirect('/solicitudestabla');
    }

    public function show($id)
    {
        $Tbasica=tarifas::find(1);
        $Tmembresia=tarifas::find(2);

        $servicioscontratistas=servicioscontratistas::select('servicioscontratistas.*','contratistas.nombre as contratista')
        ->join('contratistas','servicioscontratistas.contratistas_id','contratistas.id')
        ->where('servicioscontratistas.id',$id)  
        ->first();

        return view('usuarios.solicitudesView')
        ->with('servicioscontratistas',$servicioscontratistas)
        ->with('Tbasica',$Tbasica)
        ->with('Tmembresia',$Tmembresia);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function detalle($id){
        $solicitudes=solicitudes::select('solicitudes.*','servicioscontratistas.nombre','servicioscontratistas.tarifaparticular','contratistas.nombre as contratista','contratistas.telefono','contratistas.correo','users.name as usuario','contratistas.tiposervicios_id','users.phone')        
        ->join('servicioscontratistas','solicitudes.servicioscontratistas_id','servicioscontratistas.id')
        ->join('contratistas','servicioscontratistas.contratistas_id','contratistas.id')
        ->join('users','solicitudes.users_id','users.id')
        ->where('solicitudes.id',$id)  
        ->first();
        Session(['tiposervicios_id'=>$solicitudes->tiposervicios_id]);
        return view('admin.solicitudesDetalleView')
        ->with('solicitudes',$solicitudes);   
    }

    public function mostrarTabla(){
        $solicitudes=solicitudes::select('solicitudes.*','servicioscontratistas.nombre as servicio','contratistas.nombre as contratista', 'estadosolicitudes.nombre as estado','ciudades.name as ciudad')
        ->join('servicioscontratistas','solicitudes.servicioscontratistas_id','servicioscontratistas.id')
        ->join('estadosolicitudes','solicitudes.estadosolicitudes_id','estadosolicitudes.id')
        ->join('contratistas','servicioscontratistas.contratistas_id','contratistas.id')
        ->join('sedes','contratistas.sedes_id','sedes.id')
        ->join('ciudades','sedes.ciudades_id','ciudades.id')
        ->whereIn('solicitudes.estadosolicitudes_id',['1','2','6'])
        ->where('solicitudes.users_id',Auth::user()->id)
        ->get();

        return view('usuarios.solicitudesResumenView')
        ->with('solicitudes',$solicitudes);
    }
}
