<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PersonaController extends Controller
{
    /**
     * Muestra una lista de personas.
     */
    public function index()
    {
        return response()->json(Persona::all(), Response::HTTP_OK);
    }

    /**
     * Almacena una nueva persona en la base de datos.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipo_de_identificacion' => 'required|string|max:20',
            'identificacion' => 'required|string|max:50|unique:personas',
            'primer_nombre' => 'required|string|max:50',
            'segundo_nombre' => 'nullable|string|max:50',
            'primer_apellido' => 'required|string|max:50',
            'segundo_apellido' => 'nullable|string|max:50',
            'genero' => 'required|in:Masculino,Femenino,Otro',
            'estado_civil' => 'required|in:Soltero,Casado,Divorciado,Viudo',
            'categoria_libreta_militar' => 'nullable|in:Primera,Segunda',
            'numero_libreta_militar' => 'nullable|string|max:20',
            'numero_distrito_militar' => 'nullable|string|max:20',
        ]);

        $persona = Persona::create($validatedData);

        return response()->json($persona, Response::HTTP_CREATED);
    }

    /**
     * Muestra los detalles de una persona específica.
     */
    public function show($id)
    {
        $persona = Persona::findOrFail($id);
        return response()->json($persona, Response::HTTP_OK);
    }

    /**
     * Actualiza la información de una persona existente.
     */
    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        
        $validatedData = $request->validate([
            'tipo_de_identificacion' => 'sometimes|string|max:20',
            'identificacion' => 'sometimes|string|max:50|unique:personas,identificacion,'.$id.',id_Persona',
            'primer_nombre' => 'sometimes|string|max:50',
            'segundo_nombre' => 'sometimes|nullable|string|max:50',
            'primer_apellido' => 'sometimes|string|max:50',
            'segundo_apellido' => 'sometimes|nullable|string|max:50',
            'genero' => 'sometimes|in:Masculino,Femenino,Otro',
            'estado_civil' => 'sometimes|in:Soltero,Casado,Divorciado,Viudo',
            'categoria_libreta_militar' => 'sometimes|nullable|in:Primera,Segunda',
            'numero_libreta_militar' => 'sometimes|nullable|string|max:20',
            'numero_distrito_militar' => 'sometimes|nullable|string|max:20',
        ]);

        $persona->update($validatedData);

        return response()->json($persona, Response::HTTP_OK);
    }

    /**
     * Elimina una persona de la base de datos.
     */
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();

        return response()->json(['message' => 'Persona eliminada correctamente'], Response::HTTP_NO_CONTENT);
    }
}

