<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index()
    {
        return Documento::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha_actualizacion_doc' => 'required|date',
        ]);

        return Documento::create($request->all());
    }

    public function show($id)
    {
        return Documento::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $documento = Documento::findOrFail($id);
        $documento->update($request->all());
        return $documento;
    }

    public function destroy($id)
    {
        return Documento::destroy($id);
    }
}
