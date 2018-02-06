<?php

namespace dservices\Http\Controllers\usuarios;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use Session;

class busqueda extends Controller
{
    public function index(){
        Mapper::map(9.3000183,-75.3852644);

    	return view('usuarios.buscarServicios');
    }
}
