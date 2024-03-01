<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Red;
use Illuminate\Http\Request;
use OpenAdmin\Admin\Layout\Content;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Content $content)
    {
        return $content
            ->title('Personas')
            ->description('Lista de personas de almacenadas')
            ->view('personas.list', [
                'personas' => Persona::orderByDesc('created_at')->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Content $content)
    {
        return $content
            ->title('Persona')
            ->description('Crear Persona')
            ->view('personas.create', [
                'redes' => Red::orderByDesc('name')->get(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:25'],
            'last_name' => ['required', 'min:3', 'max:25'],
            'red_id' => ['required'],
        ]);

        $name = request('name');
        $lastName = request('last_name');
        $red_id = request('red_id');

        Persona::create([
            'name' => $name,
            'last_name' => $lastName,
            'red_id' => $red_id
        ]);

        return to_route('admin.personas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona, Content $content)
    {
        return $content
            ->title('Persona')
            ->description('Editar Persona')
            ->view('personas.edit', [
                'persona' => $persona
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:25'],
            'last_name' => ['required', 'min:3', 'max:25']
        ]);

        $persona->update($validated);

        return to_route('admin.personas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
