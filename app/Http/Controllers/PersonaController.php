<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{

    public function index()
    {
        $personas = Persona::all();
        return view('pacientes.index', compact('personas'));
    }


    public function create()
    {
        return view('pacientes.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellidoPaterno' => 'required|max:50',
            'apellidoMaterno' => 'required|max:50',
            'email' => 'required|unique:personas|max:50',
            'tel_1' => 'required|numeric',
            'tel_2' => 'numeric',
            'fecha_naci' => 'required|date',
        ]);


            $persona = Persona::create(
                $request->only(
                    'nombre',
                    'apellidoPaterno',
                    'apellidoMaterno',
                    'email',
                    'tel_1',
                    'tel_2',
                    'fecha_naci',
                )
            );
            return redirect()->route('personas.index')->with('succses', 'Paciente creado correctamente');
    }


    public function show(Persona $persona)
    {
        //$persona = Persona::findOrFail($paciente_id);
        return view('pacientes.show', compact('persona'));
    }

    public function edit(Persona $persona)
    {
        //$paciente = Persona::findOrFail($paciente_id);
        return view('pacientes.edit', compact('persona'));
    }

    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellidoPaterno' => 'required|max:50',
            'apellidoMaterno' => 'required|max:50',
            'email' => 'required|max:50',
            'tel_1' => 'required|numeric',
            'tel_2' => 'numeric',
            'fecha_naci' => 'required|date',
            'alergia' => 'max:50',
            'enfermedades' => 'max:100',
            'estado_civil' => 'max:50',
            'ocupacion' => 'max:50',
            'nombre_responsable' => 'max:50',
            'parentesco' => 'max:50',
            'direccion' => 'max:50',
            'observaciones' => 'max:200',
        ]);

        //$pacientes = Persona::findOrFail($paciente_id);
        $data = $request->only(
            'nombre',
            'apellidoPaterno',
            'apellidoMaterno',
            'email',
            'tel_1',
            'tel_2',
            'fecha_naci',
            'peso',
            'presion',
            'estatura',
            'temperatura',
            'presion',
            'alergia',
            'enfermedades',
            'estado_civil',
            'ocupacion',
            'nombre_responsable',
            'parentesco',
            'direccion',
            'observaciones',
        );

        $persona->update($data);

        return redirect()->route('personas.index')->with('succses', 'Paciente actualizado correctamente');
    }

    public function destroy($id)
    {
        //
    }
}
