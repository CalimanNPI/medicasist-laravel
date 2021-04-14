<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Models\medico;
use App\Models\Persona;
use App\Models\receta;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now();
        $citas = DB::table('citas')
        //->where('citas.fecha_programada',">=", $now->format('Y-m-d'))
        //->where('citas.hora_programada', ">=", $now->format('H:i:s'))
            ->get();
        //$results = DB::select('select * from citas where fecha_programada >= ? ', [$dt->format('Y-m-d')]);
        return view('citas.indexCita', ['citas' => $citas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Persona $persona)
    {

        $medicos = DB::table('medicos')
            ->join('users', 'medicos.user_id', '=', 'users.id')
            ->select(
                'medicos.*',
                'users.nombre',
                'users.apellidoPaterno',
                'users.apellidoMaterno'
            )
            ->get();

        return view('citas.createCita', ['persona' => $persona, 'medicos' => $medicos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Persona $persona)
    {
        $request->validate([
            'motivo' => 'required|max:50',
            'medico_id' => 'required|max:255',
            'fecha_programada' => 'required|date',
            'hora_programada' => 'required',
            'planta' => 'required|max:255',
            'num_cama' => 'required|max:255',
            'observaciones' => 'max:255',
        ]);


        $cita = cita::create(
            $request->only(
                'motivo',
                'medico_id',
                'fecha_programada',
                'hora_programada',
                'planta',
                'num_cama',
                'observaciones',
            )
                + ['paciente_id' => $persona->paciente_id]
        );
        /**$citaExiste = DB::table('citas')->where('fecha_programada', $request->input('fecha_programada'))->value('email');
        if ($citaExiste) {
            return redirect()->route('users.index')->with('succses', 'Usuario actualizado correctamente');
        }*/
        return redirect()->route('citas.index')->with('succses', 'Cita creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(cita $cita)
    {
        //$persona = DB::select('select * from personas where paciente_id = :paciente_id', ['paciente_id' => $cita->paciente_id]);
        $user = Persona::findOrFail($cita->paciente_id);
        $medico = DB::table('medicos')
            ->join('users', 'medicos.user_id', '=', 'users.id')
            ->select(
                'users.nombre',
                'users.apellidoPaterno',
                'users.apellidoMaterno',
            )->where('medico_id', $cita->medico_id)
            ->get();
        return view('citas.showCita', ['persona' => $user, 'medico' => $medico, 'cita' => $cita]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cita $cita)
    {
         //back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
