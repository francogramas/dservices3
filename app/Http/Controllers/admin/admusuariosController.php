<?php

namespace dservices\Http\Controllers\admin;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use dservices\tipodocumento;
use dservices\User;



class admusuariosController extends Controller
{
    public function index(){
        $tipodocumento=tipodocumento::all()->sortBy('tipo')->pluck('tipo','id'); 
        $usuarios=User::where('role_id',2)->orderBy('updated_at','desc')->take(20)->get();       

    	return view('admin.admusuariosView')
    	->with('tipodocumento',$tipodocumento)
    	->with('usuarios',$usuarios);
    }
    public function store(Request $request){
    	$request{'password'}=bcrypt($request['document']);
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'documento' => 'required|max:255|min:5',
            'fechanacimiento' => 'date|required|max:255|min:5',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            ]);
        User::create($request->all());
        return redirect()->route('admusuarios.index');

    }
    public function update(Request $request, $id){
    	$User=User::find($id);
    	$input=$request->all();
        $User ->fill($input)->save();
    	return redirect()->route('admusuarios.index');
    }
    public function show($id){
    	$tipodocumento=tipodocumento::all()->sortBy('tipo')->pluck('tipo','id');        
    	$usuarios=User::find($id);
    	return view('admin.admusuariosEditView')
    	->with('tipodocumento',$tipodocumento)
    	->with('usuario',$usuarios);
    }

    public function autocompletar(Request $request){
		$term = $request->input('term');
        $sedes_id = $request->input('sedes_id');
        $results = array();
        
        $queries=User::where('name','LIKE','%'.$term.'%')
        ->orWhere('documento','LIKE','%'.$term.'%')
        ->where('role_id','2')
        ->take(20)
        ->get();
        
        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => $query->documento.' || '.$query->name];
        }
        return Response()->json($results);
    }
}
