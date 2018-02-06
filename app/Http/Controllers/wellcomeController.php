<?php

namespace dservices\Http\Controllers;

use Illuminate\Http\Request;
use dservices\Model\sedes;

class wellcomeController extends Controller
{
    public function index(){
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
