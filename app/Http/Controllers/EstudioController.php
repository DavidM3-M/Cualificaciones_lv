<?php

namespace App\Http\Controllers;

use App\Models\Estudio;
use Illuminate\Http\Request;

class EstudioController extends Controller
{
    public function index()
    {
        return response()->json(Estudio::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_documento' => 'required|exists:documentos,id_documento',
            'tipo_de_estudio' => 'required',
            'institucion_estudio' => 'required|string|max:50',
            'certificado_est' => 'nullable|file',
        ]);

        return Estudio::create($request->all());
    }

    public function show($id)
    {
        return Estudio::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $estudio = Estudio::findOrFail($id);
        $estudio->update($request->all());
        return $estudio;
    }

    public function destroy($id)
    {
        return Estudio::destroy($id);
    }
}
