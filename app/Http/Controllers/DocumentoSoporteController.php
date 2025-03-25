<?php

namespace App\Http\Controllers;

use App\Models\DocumentoSoporte;
use Illuminate\Http\Request;

class DocumentoSoporteController extends Controller
{
    public function index()
    {
        return DocumentoSoporte::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_documento' => 'required|exists:documentos,id_documento',
            'documento_identidad' => 'nullable|file',
            'tarjeta_servicio_militar' => 'nullable|file',
        ]);

        return DocumentoSoporte::create($request->all());
    }

    public function show($id)
    {
        return DocumentoSoporte::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $docSoporte = DocumentoSoporte::findOrFail($id);
        $docSoporte->update($request->all());
        return $docSoporte;
    }

    public function destroy($id)
    {
        return DocumentoSoporte::destroy($id);
    }
}
