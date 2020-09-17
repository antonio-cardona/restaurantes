<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class RestaurantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $restaurantes = Restaurante::all();

        return view('restaurantes.lista', ['restaurantes' => $restaurantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('restaurantes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'string|max:100',
            'descripcion' => 'string|max:200',
            'direccion' => 'string|max:100',
            'url' => 'string|max:100',
            'ciudad_id' => 'integer',
        ]);

        $restaurante = new Restaurante();
        $restaurante->nombre = $request->input('nombre');
        $restaurante->descripcion = $request->input('descripcion');
        $restaurante->url = $request->input('url');
        $restaurante->direccion = $request->input('direccion');
        $restaurante->ciudad_id = $request->input('ciudad_id');
        $restaurante->url_imagen = 'url_tempo';
        $restaurante->save();

        return view('restaurantes.lista');
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
        //
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
