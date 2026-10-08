<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){
        $libros = Libro::all();
        return response()->json($libros, 200);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'nullable|string|max:255',
            'anio_publicacion' => 'nullable|integer',
        ]);

        $libro = Libro::create($validated);
        return response()->json($libro, 201);
    }

    public function show(string $id){
        $libro = Libro::findOrFail($id);
        return response()->json($libro, 200);
    }

    public function update(Request $request, string $id){
        $libro = Libro::findOrFail($id);

        $validated = $request->validate([
            'titulo' => 'string|max:255',          
            'autor' => 'string|max:255',            
            'genero' => 'nullable|string|max:255',  
            'anio_publicacion' => 'nullable|integer',
        ]);

        $libro->update($validated);
        return response()->json($libro, 200);
    }

    public function destroy(string $id){
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return response()->json(null, 204);
    }
}