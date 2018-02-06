<?php

namespace dservices\Http\Controllers\admin;

use Illuminate\Http\Request;

use dservices\Http\Requests;
use dservices\Http\Controllers\Controller;
use dservices\User;
use dservices\Model\sedesusers;
use dservices\Model\sedes;
use Auth;
use Session;

class direccionadorController extends Controller
{
 public function index(){
 	$rol=User::find(Auth::id());
 	if ($rol{'role_id'}=='1'){
 		return redirect()->route('admsolicitudes.index');
 	}
 	elseif ($rol{'role_id'}=='3'){
 		return redirect()->route('configuracion.index');
 	}
 	elseif ($rol{'role_id'}=='4'){
 		return redirect()->route('usuario.index');
 	}
 	elseif($rol{'role_id'}=='2'){
 		if ($rol{'tipodocumento_id'}<'1'){
			return redirect()->route('confirmardatos.index'); 			
 		}
 		$sede=sedes::count();
		$sedes=sedes::first();		
		if ($sede>1){
			return redirect()->route('sedesu.index');
		}
		else{
			return redirect()->route('sedesu.show',$sedes->id);			
		}
 	}
 } 
}