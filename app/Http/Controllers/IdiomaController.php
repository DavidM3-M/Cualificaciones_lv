<?php

namespace App\Http\Controllers;

use App\Models\Idioma;
use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    public function index()
    {
        return Idioma::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_documento' => 'required|exists:documentos,id_documento',
            'idioma' => 'required|string|max:20',
            'certificado_de_idioma' => 'required',
            'nivel_de_idioma' => 'nullable|file',
        ]);

        return Idioma::create($request->all());
    }

    public function show($id)
    {
        return Idioma::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $idioma = Idioma::findOrFail($id);
        $idioma->update($request->all());
        return $idioma;
    }

    public function destroy($id)
    {
        return Idioma::destroy($id);
    }
}
