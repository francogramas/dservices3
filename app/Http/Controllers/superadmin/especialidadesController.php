<?php

namespace dservices\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use dservices\Model\especialidades;

class especialidadesController extends Controller
{
    public function index(){
    	$especialidades=especialidades::orderBy('nombre')->paginate(20);
    	return view('superadmin.especialidadesView')
    	->with('especialidades',$especialidades);
    }

    public function show($id){
    	$especialidades=especialidades::find($id);
    	return view('superadmin.especialidadesEditView')
    	->with('especialidades',$especialidades);	
    }

    public function destroy($id){
        $especialidades=especialidades::findOrFail($id);
        $especialidades->delete();
        return redirect()->route('especialidades.index');
    }

   public function store(Request $request)
    {
        especialidades::create($request->all());
        return redirect()->route('especialidades.index');
    }

    public function create()
    {
        $especialidades=especialidades::orderBy('nombre')->paginate(20);
    	return view('superadmin.especialidadesView')
    	->with('especialidades',$especialidades);

    }
    public function update(Request $request, $id){
    	$especialidades=especialidades::find($id);
        $input=$request->all();
        $especialidades ->fill($input)->save();
        return redirect()->route('especialidades.index');
    }
}