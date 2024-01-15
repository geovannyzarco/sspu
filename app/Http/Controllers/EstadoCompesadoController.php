<?php

namespace App\Http\Controllers;

use App\Models\EstadoCompesado;
use Illuminate\Http\Request;

/**
 * Class EstadoCompesadoController
 * @package App\Http\Controllers
 */
class EstadoCompesadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadoCompesados = EstadoCompesado::paginate();

        return view('estado-compesado.index', compact('estadoCompesados'))
            ->with('i', (request()->input('page', 1) - 1) * $estadoCompesados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadoCompesado = new EstadoCompesado();
        return view('estado-compesado.create', compact('estadoCompesado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EstadoCompesado::$rules);

        $estadoCompesado = EstadoCompesado::create($request->all());

        return redirect()->route('estado-compesados.index')
            ->with('success', 'EstadoCompesado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadoCompesado = EstadoCompesado::find($id);

        return view('estado-compesado.show', compact('estadoCompesado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadoCompesado = EstadoCompesado::find($id);

        return view('estado-compesado.edit', compact('estadoCompesado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EstadoCompesado $estadoCompesado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstadoCompesado $estadoCompesado)
    {
        request()->validate(EstadoCompesado::$rules);

        $estadoCompesado->update($request->all());

        return redirect()->route('estado-compesados.index')
            ->with('success', 'EstadoCompesado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadoCompesado = EstadoCompesado::find($id)->delete();

        return redirect()->route('estado-compesados.index')
            ->with('success', 'EstadoCompesado deleted successfully');
    }
}
