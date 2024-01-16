<?php

namespace App\Http\Controllers;

use App\Models\Marcaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarcajeController extends Controller
{
    public function showForm()
    {
        return view('marcaje.form');
    }

    public function displayData()
    {
        $marcajes = Marcaje::all();
        return view('marcaje.display', compact('marcajes'));
    }


    public function importData(Request $request)
    {
        $request->validate([
            'archivo' => 'required|mimes:txt', // Ajusta los requisitos según tus necesidades
        ]);

        $archivo = $request->file('archivo');

        // Lee el contenido del archivo de texto
        $contenido = Storage::get($archivo->path());

        // Divide el contenido por líneas
        $lineas = explode("\n", $contenido);

        $data = [];

        foreach ($lineas as $linea) {
            // Divide cada línea por espacios
            $campos = explode(" ", $linea);

            // Verifica si la línea tiene al menos dos campos (código y marcación)
            if (count($campos) >= 2) {
                $codigo = (int) $campos[0];
                $marcacion = date('Y-m-d H:i:s', strtotime($campos[1])); // Ajusta el formato según tus necesidades

                // Verifica duplicados antes de agregar a los datos
                $existente = Marcaje::where('codigo', $codigo)->where('marcacion', $marcacion)->exists();

                if (!$existente) {
                    $data[] = [
                        'codigo' => $codigo,
                        'marcacion' => $marcacion,
                    ];
                }
            }
        }

        // Inserta los datos en la base de datos
        Marcaje::insert($data);

        $count = count($data);

        return redirect()->route('marcaje.form')->with('success', "Se insertaron $count registros correctamente.");
    }

}
