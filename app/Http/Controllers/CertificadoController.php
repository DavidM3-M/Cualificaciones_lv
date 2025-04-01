<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Certificado;

class CertificadoController extends Controller
{
    /**
     * Genera un PDF de un certificado específico.
     *
     * @param int $id El ID del certificado a generar.
     * @return \Illuminate\Http\Response
     */
    public function generarCertificado(Request $request)
    {
        // 1. Validar los datos del formulario
        $request->validate([
            'nombre_estudiante' => 'required|string',
            'curso' => 'required|string',
            'fecha_finalizacion' => 'required|date',
        ]);

        // 2. Crear el nuevo certificado en la base de datos
        $certificado = Certificado::create($request->all());

        // 3. Generar el PDF usando la vista Blade
        $pdf = Pdf::loadView('pdf.certificado', compact('certificado'));

        // 4. Descargar el PDF con un nombre específico
        return $pdf->download('certificado_' . $certificado->id . '.pdf');
    }
    public function generarPdf($id)
    {
        // 1. Obtener el certificado desde la base de datos
        $certificado = Certificado::findOrFail($id);

        // 2. Verificar si el certificado existe
        if (!$certificado) {
            abort(404, 'Certificado no encontrado'); // O manejarlo de otra manera
        }

        // 3. Generar el PDF usando la vista Blade
        $pdf = PDF::loadView('pdf.certificado', compact('certificado'));

        // 4. Descargar el PDF con un nombre específico
        return $pdf->download('certificado_' . $certificado->id . '.pdf');

        // O mostrar el PDF en el navegador:
        // return $pdf->stream('certificado_' . $certificado->id . '.pdf');
    }

    /**
     * Genera un PDF con todos los certificados (opcional).
     *
     * @return \Illuminate\Http\Response
     */
    public function generarTodosPdf()
    {
        // 1. Obtener todos los certificados desde la base de datos
        $certificados = Certificado::all();

        // 2. Verificar si hay certificados
        if ($certificados->isEmpty()) {
            abort(404, 'No hay certificados disponibles'); // O manejarlo de otra manera
        }

        // 3. Generar el PDF usando la vista Blade
        $pdf = PDF::loadView('pdf.certificados_lista', compact('certificados')); // Asegúrate de crear esta vista

        // 4. Descargar el PDF con un nombre específico
        return $pdf->download('certificados_lista.pdf');

        // O mostrar el PDF en el navegador:
        // return $pdf->stream('certificados_lista.pdf');
    }

    // Otros métodos del controlador...
}