<?php

namespace dservices\Http\Controllers\Auth;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use dservices\tipodocumento;
use dservices\User;
use Auth;
use Session;



class confirmarDatosController extends Controller
{
    public function index()
    {   
        $user=User::find(Auth::id());
        $tipodocumento=tipodocumento::all()->sortBy('tipo')->pluck('tipo','id');
        return View('auth.confirmarDatosView')
        ->with('tipodocumento',$tipodocumento)
        ->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $user=User::FindOrFail($id);
        $input=$request->all();
        $user ->fill($input)->save();
        Session::flash('save','El registro fué actualizado correctamente');
        return redirect()->route('sedesu.index');
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
