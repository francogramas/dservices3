<?php

namespace dservices\Http\Controllers\general;
use Illuminate\Http\Request;

use dservices\Http\Requests;
use dservices\Http\Controllers\Controller;
use dservices\Model\ciudades;

class ciudadesController extends Controller
{
      public function getCiudades (Request $request, $id)
    {
        if ($request->ajax()){
            $ciudades=ciudades::ciudades($id);
            return response()->json($ciudades);
        }
    }
}
