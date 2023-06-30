<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perro;

class PerrosController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perros = Perro::all();

        return view('perros.index', compact('perros'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perros.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'race' => 'required',
            'name' => 'required',
            'size' => 'nullable',
            'hair_color' => 'nullable',
            'img_url' => 'nullable',
        ]);

        Perro::create($request->all());

        return redirect()->route('perros.index')->with('success', 'Perro creado correctamente');
    }

    /**
     * Display the specified resource.
     * @param  \App\Perro  $perro
     * @return \Illuminate\Http\Response
     */
    public function show(Perro $perro)
    {
        return view('perros.show', compact('perro'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\Perro  $perro
     * @return \Illuminate\Http\Response
     */
    public function edit(Perro $perro)
    {
        return view('perros.edit', compact('perro'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \App\Perro  $perro
     * @return \Illuminate\Http\Response
     */
    public function update(Perro $perro)
    {
        $request->validate([
            'race' => 'required',
            'name' => 'required',
            'size' => 'nullable',
            'hair_color' => 'nullable',
            'img_url' => 'nullable',
        ]);

        Perro::update($request->all());

        return redirect()->route('perros.index')->with('success', 'Perro actualizado correctamente');

    }

}
