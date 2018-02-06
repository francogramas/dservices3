<?php

namespace dservices\Http\Controllers\usuarios;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use dservices\Model\membresia;
use dservices\Model\configuracion;
use dservices\User;
use Carbon\Carbon;
use Auth;

class membresiaController extends Controller
{
    public function index(){
    	$configuracion=configuracion::first();
    	$membresia=membresia::where('users_id',Auth::id())->first();
    	if ($membresia){

    	}
    	else{
    		membresia::create(['users_id'=>Auth::id(), 'validez'=>Carbon::now()->addYear(), 'valor'=>$configuracion->valor_tarifa]);
    		$membresia=membresia::where('users_id',Auth::id())->first();
    	}


    	$Usuario=User::find(Auth::id());
    	return view('usuarios.membresiaView')
    	->with('Usuario',$Usuario)
    	->with('membresia',$membresia);

    }
    public function show($id){

    }
    public function store(Request $request){

    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id){

    }
}
