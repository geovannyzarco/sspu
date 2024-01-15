<?php

namespace App\Http\Controllers;

use App\Models\Compesado;
use Illuminate\Http\Request;

/**
 * Class CompesadoController
 * @package App\Http\Controllers
 */
class CompesadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compesados = Compesado::paginate();

        return view('compesado.index', compact('compesados'))
            ->with('i', (request()->input('page', 1) - 1) * $compesados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compesado = new Compesado();
        return view('compesado.create', compact('compesado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Compesado::$rules);

        $compesado = Compesado::create($request->all());

        return redirect()->route('compesados.index')
            ->with('success', 'Compesado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compesado = Compesado::find($id);

        return view('compesado.show', compact('compesado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compesado = Compesado::find($id);

        return view('compesado.edit', compact('compesado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Compesado $compesado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compesado $compesado)
    {
        request()->validate(Compesado::$rules);

        $compesado->update($request->all());

        return redirect()->route('compesados.index')
            ->with('success', 'Compesado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $compesado = Compesado::find($id)->delete();

        return redirect()->route('compesados.index')
            ->with('success', 'Compesado deleted successfully');
    }
}
