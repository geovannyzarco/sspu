<?php

namespace App\Http\Controllers;

use App\Models\EstadoPermiso;
use Illuminate\Http\Request;

/**
 * Class EstadoPermisoController
 * @package App\Http\Controllers
 */
class EstadoPermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadoPermisos = EstadoPermiso::paginate();

        return view('estado-permiso.index', compact('estadoPermisos'))
            ->with('i', (request()->input('page', 1) - 1) * $estadoPermisos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadoPermiso = new EstadoPermiso();
        return view('estado-permiso.create', compact('estadoPermiso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EstadoPermiso::$rules);

        $estadoPermiso = EstadoPermiso::create($request->all());

        return redirect()->route('estado-permisos.index')
            ->with('success', 'EstadoPermiso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadoPermiso = EstadoPermiso::find($id);

        return view('estado-permiso.show', compact('estadoPermiso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadoPermiso = EstadoPermiso::find($id);

        return view('estado-permiso.edit', compact('estadoPermiso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EstadoPermiso $estadoPermiso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstadoPermiso $estadoPermiso)
    {
        request()->validate(EstadoPermiso::$rules);

        $estadoPermiso->update($request->all());

        return redirect()->route('estado-permisos.index')
            ->with('success', 'EstadoPermiso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadoPermiso = EstadoPermiso::find($id)->delete();

        return redirect()->route('estado-permisos.index')
            ->with('success', 'EstadoPermiso deleted successfully');
    }
}
