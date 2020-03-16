<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviciosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.servicios.index');
    }
    public function create()
    {
        //vista editor
        return view('admin.servicios.create');
    }
    public function show(Servicios $servicio)
    {
        return view('admin.servicios.index');
    }
    public function store(Request $request)
    {
        //validacion de campos
        $data = request()->validate([
            'name' => 'required|max:255',
            'edad' => 'required|max:255',
            'sexo' => 'required|max:255',
            'sub' => 'required|max:255',

        ]);
        return redirect('servicios');
    }
    public function edit()
    {
      return view('admin.servicios.edit');
    }
    public function editar(){
      return view('admin.servicios.edit');
    }
}
