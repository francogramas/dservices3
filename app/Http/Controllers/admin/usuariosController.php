<?php

namespace dservices\Http\Controllers\admin;

use Illuminate\Http\Request;
use dservices\Http\Controllers\Controller;
use dservices\tipodocumento;
use User;


class usuariosController extends Controller
{

    public function index()
    {
        $tipodocumento=tipodocumento::all()->sortBy('tipo')->pluck('tipo','id');        
        return view('admin.usuariosNewView')
        ->with('tipodocumento',$tipodocumento);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request{'password'}=bcrypt($request['document']);
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'documento' => 'required|max:255|min:5',
            'fechanacimiento' => 'date|required|max:255|min:5',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            ]);
        User::create($request->all());
        return redirect()->route('usuarios1.index');        
    }

    public function show($id)
    {
        return view('admin.usuariosEditView');        
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
