<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformacionContacto;

class InformacionContactoController extends Controller
{
    public function index()
    {
        return response()->json(InformacionContacto::all(), 200);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pais_info' => 'required|string|max:50',
            'departamento_info' => 'required|string|max:50',
            'ciudad_info' => 'required|string|max:50',
            'direccion_info' => 'required|string|max:50',
            'barrio_info' => 'nullable|string|max:50',
            'telefono_fijo' => 'nullable|string|max:50',
            'telefono_celular' => 'required|string|max:50',
            'correo_electronico' => 'required|string|email|max:50',
        ]);

        $contacto = InformacionContacto::create($data);
        return response()->json($contacto, 201);
    }

    public function show($id)
    {
        $contacto = InformacionContacto::find($id);
        if (!$contacto) {
            return response()->json(['message' => 'Información de contacto no encontrada'], 404);
        }
        return response()->json($contacto, 200);
    }

    public function update(Request $request, $id)
    {
        $contacto = InformacionContacto::find($id);
        if (!$contacto) {
            return response()->json(['message' => 'Información de contacto no encontrada'], 404);
        }

        $data = $request->validate([
            'pais_info' => 'sometimes|string|max:50',
            'departamento_info' => 'sometimes|string|max:50',
            'ciudad_info' => 'sometimes|string|max:50',
            'direccion_info' => 'sometimes|string|max:50',
            'barrio_info' => 'nullable|string|max:50',
            'telefono_fijo' => 'nullable|string|max:50',
            'telefono_celular' => 'sometimes|string|max:50',
            'correo_electronico' => 'sometimes|string|email|max:50',
        ]);

        $contacto->update($data);
        return response()->json($contacto, 200);
    }

    public function destroy($id)
    {
        $contacto = InformacionContacto::find($id);
        if (!$contacto) {
            return response()->json(['message' => 'Información de contacto no encontrada'], 404);
        }

        $contacto->delete();
        return response()->json(['message' => 'Información de contacto eliminada correctamente'], 200);
    }
}