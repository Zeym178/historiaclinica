<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validar los datos recibidos del formulario
    $request->validate([
        'dni' => 'required|string|min:8|max:8',
        'paterno' => 'required|string|min:1|max:50',
        'materno' => 'required|string|min:1|max:50',
        'nombres' => 'required|string|min:1|max:50'
    ]);

    // Crear una nueva instancia de Persona con los datos validados y guardarla en la base de datos
    Persona::create($request->all());

    // Redireccionar a la ruta 'personas.index' después de almacenar la nueva persona
    return redirect()->route('personas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.edit',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'dni'=>'required|string|min:8|max:8',
            'paterno'=>'required|string|min:1|max:50',
            'materno'=>'required|string|min:1|max:50',
            'nombres'=>'required|string|min:1|max:50'
            ]);
            $persona = Persona::findOrFail($id);
            $persona->update($request->all());
            return redirect()->route('personas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('personas.index');
    }

}
