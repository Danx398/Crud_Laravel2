<?php

namespace App\Http\Controllers;

use App\Models\animal;
use Illuminate\Http\Request;

class animals extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Inicio' ;
        $animales = animal::all();
        return view('welcome',compact('titulo','animales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Agregar nuevo Animal';
        return view('agregar',compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animales = new animal();
        $animales->nombre = $request-> nombre;
        $animales->Habilidad = $request-> habilidad;
        $animales->Localizacion = $request-> localizacion;
        $animales->Peligro = $request->peligro;
        $animales->save();
        return redirect()->route('animales.index');
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
        $titulo = 'Editar animal';
        $item = animal::find($id);
        return view('editar',compact('titulo','item'));
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
        $animales = animal::find($id);
        $animales->nombre = $request-> nombre;
        $animales->Habilidad = $request-> habilidad;
        $animales->Localizacion = $request-> localizacion;
        $animales->Peligro = $request->peligro;
        $animales->save();
        return redirect()->route('animales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animales = animal::find($id);
        $animales->delete();
        return redirect()->route('animales.index');
    }
}
