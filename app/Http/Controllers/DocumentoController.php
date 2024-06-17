<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{


    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'fecha' => 'required|date',
            'nro_carta' => 'required|string|max:255',
            'procedencia' => 'required|string|max:255',
            'detalle' => 'nullable|string',
            'nombre_archivo' => 'required|string|max:255',
            'repositorio' => 'required|file|mimes:jpg,jpeg,png,pdf'
        ]);

        // Subir el archivo y obtener la ruta
$path = $request->file('repositorio')->store('documentos');

// Crear el documento en la base de datos
$documento = Documento::create([
    'fecha' => $request->fecha,
    'nro_carta' => $request->nro_carta,
    'procedencia' => $request->procedencia,
    'detalle' => $request->detalle,
    'nombre_archivo' => $request->nombre_archivo,
    'repositorio' => $path
]);

// Logear el documento creado
Log::info('Documento creado:', $documento->toArray());

// Redireccionar a la página de la tabla con un mensaje de éxito
return back()->with('success', 'Documento creado exitosamente.');

    }

    // Mostrar la tabla de documentos
    public function index()
    {
        $documentos = Documento::all();
        return view('layouts.tabla', compact('documentos'));
    }

    public function showAdmission()
    {
        $documentos = Documento::all();
        return view('welcome', compact('documentos'));
    }
}
