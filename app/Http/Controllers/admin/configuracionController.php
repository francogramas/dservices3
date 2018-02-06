<?php

namespace dservices\Http\Controllers\admin;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use dservices\Model\configuracion;
use dservices\Model\tarifas;


class configuracionController extends Controller
{
    public function index()
    {
        $configuracion=configuracion::first();
        $tarifas=tarifas::all();
        if($configuracion){
            return redirect()->route('configuracion.show',$configuracion->id);
        }
        else{
            return View('superadmin.config');
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        configuracion::create($request->all());
        return redirect()->route('configuracion.index');
    }

    public function show($id)
    {
        $configuracion=configuracion::find($id);
        $tarifas=tarifas::all();

        return view('superadmin.configEdit')
        ->with('tarifas',$tarifas)
        ->with('configuracion',$configuracion);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $configuracion=configuracion::find($id);
       // return $configuracion;
        
        $input=$request->all();
        $configuracion ->fill($input)->save();

        return redirect()->route('configuracion.index');
    }

    public function destroy($id)
    {
        //
    }
}
