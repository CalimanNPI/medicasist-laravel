<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Models\medicamento;
use App\Models\medico;
use App\Models\Persona;
use App\Models\receta;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use DateTime;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DomPDF\Options;
use PhpParser\Node\Expr\New_;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Persona $persona)
    {
        return view('pacientes.info', compact('persona'));
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
            'peso' => 'required|max:50',
            'estatura' => 'required|max:50',
            'temperatura' => 'required|max:50',
            'presion' => 'required|max:50',
            'alergia' => 'max:50',
            'enfermedades' => 'max:100',
            'observaciones' => 'max:250',
        ]);

        //$pacientes = Persona::findOrFail($paciente_id);
        $data = $request->only(
            'peso',
            'presion',
            'estatura',
            'temperatura',
            'presion',
            'alergia',
            'enfermedades',
            'observaciones',
        );

        $persona->update($data);

        return redirect()->route('personas.index')->with('succses', 'Se registro la información correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $now = Carbon::now();
        $id = Auth::id();

        $medico = DB::table('medicos')
            ->join('users', 'medicos.user_id', '=', 'users.id')
            ->select(
                'medicos.*',
            )->where('medicos.user_id', $id)
            ->get();

        $idmedico = (int) $medico[0]->medico_id;
        $citas = DB::table('citas')
            ->join('medicos', 'citas.medico_id', '=', 'medicos.medico_id')
            ->select(
                'citas.*',
            )->where('citas.medico_id', $idmedico)
            //->where('citas.fecha_programada',">=", $now->format('Y-m-d'))
            //->where('citas.hora_programada', ">=", $now->format('H:i:s'))
            ->get();


        return view('citas.misCitas', ['citas' => $citas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(cita $cita)
    {
        $user = Persona::findOrFail($cita->paciente_id);
        $medico = DB::table('medicos')
            ->join('users', 'medicos.user_id', '=', 'users.id')
            ->select(
                'users.nombre',
                'users.apellidoPaterno',
                'users.apellidoMaterno',
            )->where('medico_id', $cita->medico_id)
            ->get();
        return view('citas.createReceta', ['persona' => $user, 'medico' => $medico, 'cita' => $cita]);
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
        $now = Carbon::now();
        $request->validate([
            'diagnostico' => 'required|max:50',
            'observaciones' => 'required|max:255',
        ]);

        $resetita = receta::create(
            $request->only(
                'diagnostico',
                'observaciones',
            )
                + ['fecha_expedido' =>  $now]
                + ['fecha_vencimiento' =>  $now->add(8, 'day')]
                + ['cita_id' =>  $cita->cita_id]
        );

        medicamento::create(
            $request->only(
                'medicamento',
                'indicaciones',
            )
                + ['receta_folio' => $resetita->folio]
        );

        return redirect()->route('consulta.show')->with('succses', 'Se registro la información correctamente');
        //return view('pdf', ['persona' => $user, 'medico' => $medico, 'cita' => $cita, 'receta' => $receta, 'medicamentos' => $medicamentos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(cita $cita)
    {
    }

    public function pdfReceta(cita $cita)
    {

        /* $pdf = app('dompdf.wrapper');
        $pdf->loadHTML('<h1>Styde.net</h1>');

        return $pdf->download('mi-archivo.pdf');

        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        $pdf = new Dompdf();*/

        $user = Persona::findOrFail($cita->paciente_id);

        $medico = DB::table('medicos')
            ->join('users', 'medicos.user_id', '=', 'users.id')
            ->select(
                'medicos.*',
                'users.nombre',
                'users.apellidoPaterno',
                'users.apellidoMaterno',
            )->where('medico_id', $cita->medico_id)
            ->get();

        $receta = DB::table('recetas')
            ->where('cita_id', $cita->cita_id)
            ->get();

        $medicamentos = DB::table('medicamentos')
            ->where('receta_folio', $receta[0]->folio)
            ->get();


        $nacimiento = new DateTime($user->fecha_naci);
        $ahora = new DateTime(date("Y-m-d"));
        $diferencia = $ahora->diff($nacimiento);
        $edad = $diferencia->format("%y");

        $firma = '/storage/'.$medico[0]->descripcion;
        $logo = '/admin/img/logo.png';

        return PDF::loadView('vista-pdf', ['firma'=> $firma, 'logo'=> $logo,'persona' => $user, 'medico' => $medico, 'cita' => $cita, 'receta' => $receta, 'medicamentos' => $medicamentos, 'edad'=> $edad])
            ->setPaper('LETTER', 'landscape')
            ->stream('archivo.pdf');
            
    }
}
