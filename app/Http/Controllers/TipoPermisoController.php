<?php

namespace App\Http\Controllers;

use App\Models\TipoPermiso;
use Illuminate\Http\Request;

/**
 * Class TipoPermisoController
 * @package App\Http\Controllers
 */
class TipoPermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoPermisos = TipoPermiso::paginate();

        return view('tipo-permiso.index', compact('tipoPermisos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoPermisos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoPermiso = new TipoPermiso();
        return view('tipo-permiso.create', compact('tipoPermiso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoPermiso::$rules);

        $tipoPermiso = TipoPermiso::create($request->all());

        return redirect()->route('tipo-permisos.index')
            ->with('success', 'TipoPermiso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoPermiso = TipoPermiso::find($id);

        return view('tipo-permiso.show', compact('tipoPermiso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoPermiso = TipoPermiso::find($id);

        return view('tipo-permiso.edit', compact('tipoPermiso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoPermiso $tipoPermiso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPermiso $tipoPermiso)
    {
        request()->validate(TipoPermiso::$rules);

        $tipoPermiso->update($request->all());

        return redirect()->route('tipo-permisos.index')
            ->with('success', 'TipoPermiso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoPermiso = TipoPermiso::find($id)->delete();

        return redirect()->route('tipo-permisos.index')
            ->with('success', 'TipoPermiso deleted successfully');
    }
}
