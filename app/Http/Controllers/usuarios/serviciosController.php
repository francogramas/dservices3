<?php

namespace dservices\Http\Controllers\usuarios;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use dservices\Model\tiposervicios;
use dservices\Model\servicioscontratistas;
use dservices\Model\contratistas;
use Session;

class serviciosController extends Controller
{
    public function index(){    	
    	return view('usuarios.serviciosView');
    }

    public function show($id){
        
        Session(['tiposervicios_id'=>$id]);

    	$servicioscontratistas=servicioscontratistas::select('servicioscontratistas.*','contratistas.nombre as contratista')
    	->join('contratistas','servicioscontratistas.contratistas_id','contratistas.id')
    	->where('contratistas.sedes_id',Session('sedes_id'))
        ->where('contratistas.tiposervicios_id',$id)
    	->get();
    	
        return view('usuarios.serviciosView')
    	->with('servicioscontratistas',$servicioscontratistas);    	
    }

    public function autocompletar(Request $request){
                
        $term = $request->input('term');
        $results = array();
        
        $queries=servicioscontratistas::select('servicioscontratistas.id','servicioscontratistas.nombre','servicioscontratistas.descripcion','servicioscontratistas.tarifaparticular','contratistas.nombre as contratista')
        ->join('contratistas','servicioscontratistas.contratistas_id','contratistas.id')
        ->where('contratistas.sedes_id',Session('sedes_id'))    
        ->where('contratistas.tiposervicios_id',Session('tiposervicios_id'))            
    	->Where(function($query) use($term)
			{
			$query->where('servicioscontratistas.nombre','LIKE','%'.$term.'%')
			->orWhere('servicioscontratistas.descripcion','LIKE','%'.$term.'%');
		})
    	->take(20)
        ->get();
        
       /* foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => "<a href='#'>'".$query->nombre."</a>" ];
        }
        return $queries;*/

        return view('usuarios.serviciosTablaView')
        ->with('servicioscontratistas',$queries);
    }

    public function autocompletarLista(Request $request){
        $term = $request->input('term');
        $results = array();
        
        $queries=servicioscontratistas::select('servicioscontratistas.id','servicioscontratistas.nombre','servicioscontratistas.descripcion','servicioscontratistas.tarifaparticular','contratistas.nombre as contratista')
        ->join('contratistas','servicioscontratistas.contratistas_id','contratistas.id')
        ->where('contratistas.sedes_id',Session('sedes_id'))    
        ->where('contratistas.tiposervicios_id',Session('tiposervicios_id'))            
        ->Where(function($query) use($term)
            {
            $query->where('servicioscontratistas.nombre','LIKE','%'.$term.'%')
            ->orWhere('servicioscontratistas.descripcion','LIKE','%'.$term.'%');
        })
        ->take(20)
        ->get();
        
       foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => $query->descripcion];
        }
        return $results;
    }
}