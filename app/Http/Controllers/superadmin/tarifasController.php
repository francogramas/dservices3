<?php

namespace dservices\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use dservices\Model\tarifas;

class tarifasController extends Controller
{
    public function index()
    {
        //
    }


    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $tarifas=tarifas::find($id);
        return view('superadmin.tarifasEditView')
        ->with('tarifas',$tarifas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarifas=tarifas::find($id);
        $input=$request->all();
        $tarifas ->fill($input)->save();
        return redirect()->route('configuracion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
