<?php

namespace dservices\Http\Controllers\general;
use Illuminate\Http\Request;

use dservices\Http\Requests;
use dservices\Http\Controllers\Controller;
use dservices\Model\estados;

class estadosController extends Controller
{
    public function getEstados(Request $request, $id)
    {
        if ($request->ajax()){
            $estados=estados::estados($id);
            return response()->json($estados);
        }
    }
}
