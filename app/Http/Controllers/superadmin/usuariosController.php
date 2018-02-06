<?php

namespace dservices\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use dservices\User;
use dservices\Model\sedesusers;
use dservices\Model\sedes;

class usuariosController extends Controller
{
    public function index(){
    	$sedes=sedes::select('sedes.id','ciudades.name as ciudad')
        ->join('ciudades','sedes.ciudades_id','ciudades.id')
        ->pluck('ciudad','id');
        
        $users=User::select('users.id','users.name','sedes.id as sedes_id','ciudades.name as ciudad')
        ->join('sedesusers','users.id','sedesusers.users_id')
        ->join('sedes','sedesusers.sedes_id','sedes.id')
        ->join('ciudades','sedes.ciudades_id','ciudades.id')
        ->where('role_id','1')
        ->get();

    	return view('superadmin.usuariosView')
    	->with('sedes',$sedes)
    	->with('users',$users);
    }
    
    public function store(Request $request){
    	$this->validate($request, [
            'email' => 'required|email|max:255|unique:users',
            'name' => 'required|max:255',
            'sedes_id'=>'required|not_in:0',
            'password' => 'required|min:6|confirmed',
            ]);

    	$request['password'] = bcrypt($request['password']);
    	User::create($request->all());
    	
    	$user=User::where('email',$request['email'])->first();
    	$request['users_id']=$user->id;

    	sedesusers::create($request->all());
        return redirect()->route('usuarios.index');
    }

    public function update(Request $request, $id){
    	$user=User::FindOrFail($id);
        $user->fill($request->all())->save();
        return redirect()->route('usuarios.index');

    }

    public function edit($id){
    	$sedes=sedes::select('sedes.id','ciudades.name as ciudad')
        ->join('ciudades','sedes.ciudades_id','ciudades.id')
        ->pluck('ciudad','id');

    	$user=User::find($id);
    	
    	return view('superadmin.usuariosEditView')
    	->with('sedes',$sedes)
    	->with('user',$user);
    }
}
