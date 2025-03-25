<?php

namespace App\Http\Controllers;

use App\Models\Experiencia;
use Illuminate\Http\Request;

class ExperienciaController extends Controller
{
    public function index()
    {
        return Experiencia::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_documento' => 'required|exists:documentos,id_documento',
            'tipo_de_experiencia' => 'required',
            'institucion_exp' => 'required|string|max:100',
            'cargo' => 'required|string|max:50',
            'certificado_exp' => 'nullable|file',
        ]);

        return Experiencia::create($request->all());
    }

    public function show($id)
    {
        return Experiencia::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $experiencia = Experiencia::findOrFail($id);
        $experiencia->update($request->all());
        return $experiencia;
    }

    public function destroy($id)
    {
        return Experiencia::destroy($id);
    }
}
