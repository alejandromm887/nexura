<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Area;
use App\Models\Roles;
use App\Models\Empleado;

class empleadoController extends Controller
{
    public function index()
    {
    
        $areas = Area::all();
        $empleados = Empleado::all();
        return view ('empleados.index')->with(compact('empleados', $empleados))->with(compact('areas', $areas));
    }

    public function create()
    {
        $areas = Area::all();
        $roles = Roles::all();
        return view('empleados.create', compact('areas','roles'));
        return view('empleados.edit', compact('areas','roles'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Empleado::create($input);
        return redirect('empleados')->with('Empleado_agregado', 'Empleado agregado!');  
    }

    public function show($id)
    {
        $areas = Area::all();
        $empleados = Empleado::find($id);
        return view('empleados.show')->with(compact('empleados', $empleados))->with(compact('areas', $areas));
    }

    public function edit($id)
    {
        $empleado = Empleado::find($id);
        return view('empleados.edit')->with('empleados', $empleado);
    }

    public function update(Request $request, $id)
    {
        $empleados = Empleado::find($id);
        $input = $request->all();
        $empleados->update($input);
        return redirect('empleados')->with('Empleado_actualizado', 'Empleado actualizado!');  
    }
    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect('empleados')->with('Empleado_eliminado', 'Empleado eliminado!');  
    }

}
