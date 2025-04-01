<?php

namespace App\Http\Controllers;

use App\Models\Idioma;
use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    public function subirCertificado(Request $request)
    {
        $request->validate([
            'idioma' => 'required|string|max:255',
            'certificado_de_idioma' => 'required|file|mimes:pdf,jpg,png|max:2048', // Ajusta los tipos y tamaño según sea necesario
        ]);

        // Subir el archivo
        $path = $request->file('certificado_de_idioma')->store('certificados', 'public');

        // Crear el registro en la base de datos
        Idioma::create([
            'idioma' => $request->input('idioma'),
            'certificado_de_idioma' => $path,
        ]);

        return redirect()->route('idiomas.index')->with('success', 'Idioma creado con éxito.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'idioma' => 'required|string|max:255',
            'certificado_de_idioma' => 'required|file|mimes:pdf,jpg,png|max:2048', // Ajusta los tipos y tamaño según sea necesario
        ]);

        // Subir el archivo
        $path = $request->file('certificado_de_idioma')->store('certificados', 'public');

        // Crear el registro en la base de datos
        Idioma::create([
            'idioma' => $request->input('idioma'),
            'certificado_de_idioma' => $path,
        ]);

        return redirect()->route('idiomas.index')->with('success', 'Idioma creado con éxito.');
    }

    public function create()
    {
        return view('archivo'); // Asegúrate de que el nombre de la vista sea correcto
    }

    public function index()
    {
        // Obtén todos los registros de la tabla 'idiomas'
        $idiomas = Idioma::all();

        // Retorna una vista con los datos
        return view('idiomas.index', compact('idiomas'));
    }
}
