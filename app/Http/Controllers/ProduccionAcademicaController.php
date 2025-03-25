<?php
namespace App\Http\Controllers;

use App\Models\ProduccionAcademica;
use Illuminate\Http\Request;

class ProduccionAcademicaController extends Controller
{
    public function index()
    {
        return ProduccionAcademica::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_documento' => 'required|exists:documentos,id_documento',
            'titulo_de_produccion' => 'required|string|max:50',
            'tipo_de_produccion' => 'required',
            'archivo_de_produccion' => 'nullable|file',
        ]);

        return ProduccionAcademica::create($request->all());
    }

    public function show($id)
    {
        return ProduccionAcademica::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $produccion = ProduccionAcademica::findOrFail($id);
        $produccion->update($request->all());
        return $produccion;
    }

    public function destroy($id)
    {
        return ProduccionAcademica::destroy($id);
    }
}
