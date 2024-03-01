<?php

namespace App\Http\Controllers;

use App\Models\Red;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenAdmin\Admin\Layout\Content;

class RedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Content $content)
    {
        return $content
            ->title('Redes')
            ->description('Lista de Redes')
            ->view('redes.list', [
                'redes' => Red::orderByDesc('created_at')->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Content $content)
    {
        return $content
            ->title('Red')
            ->description('Crear Red')
            ->view('redes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:25'],
            'lider' => ['required', 'min:3', 'max:25'],
            'color' => ['required', 'min:3', 'max:25']
        ]);

        $name = request('name');
        $lider = request('lider');
        $color = request('color');

        Red::create([
            'name' => $name,
            'lider' => $lider,
            'color' => $color
        ]);

        return to_route('admin.redes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Red $red)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Red $red)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Red $red)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Red $red)
    {
        //
    }
}
