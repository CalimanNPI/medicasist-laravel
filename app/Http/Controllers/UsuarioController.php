<?php

namespace App\Http\Controllers;

use App\Models\medico;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|unique:users|max:50',
            'email' => 'required|unique:users|max:255',
            'tel_1' => 'numeric',
            'nombre' => 'required|max:255',
            'apellidoPaterno' => 'required|max:255',
            'apellidoMaterno' => 'required|max:255',
            'cargo_ocupado' => 'required|max:255',
            'tipo_usu' => 'required|max:255',
            'cedula_No' => 'max:255',
            'especialidad' => 'max:255',
            'lugar_especializacion' => 'max:255',
            'cedula_path' => 'image|mimes:jpeg,png|max:3000',
            'descripcion' => 'image|mimes:jpeg,png|max:3000',
        ]);



        $user = User::create(
            $request->only(
                'name',
                'email',
                'tel_1',
                'nombre',
                'apellidoPaterno',
                'apellidoMaterno',
                'cargo_ocupado',
                'tipo_usu',

            )
                + ['password' =>  bcrypt($request->input('password'))]
        );


        if ($request->input('tipo_usu') == "1") {

            medico::create(
                $request->only(
                    'cedula_No',
                    'especialidad',
                    'lugar_especializacion',
                )
                    + ['user_id' => $user->id]
                    + ['cedula_path' => $request->file('cedula_path')->store('cedulas')]
                    + ['descripcion' => $request->file('descripcion')->store('firmas')]
            );
        }




        /**if ($request->hasFile('profile_photo_path')) {
            $image = time() . '_' . $request->file('profile_photo_path')->getClientOriginalName();
            $request->file('profile_photo_path')->storeAs('/admin/img/', $image);
            $user->update(['profile_photo_path' => $image]);
        }*/

        return redirect()->route('users.index')->with('succses', 'Usuario creado correctamente' . $request->input('lugar_especializacion')); //back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //$user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //$user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:255',
            'tel_1' => 'max:20',
            'nombre' => 'required|max:255',
            'apellidoPaterno' => 'required|max:255',
            'apellidoMaterno' => 'required|max:255',
            'cargo_ocupado' => 'required|max:255',
            'tipo_usu' => 'required|max:255',
        ]);

        //$user = User::findOrFail($id);
        $data = $request->only(
            'name',
            'email',
            'tel_1',
            'nombre',
            'apellidoPaterno',
            'apellidoMaterno',
            'cargo_ocupado',
            'tipo_usu'
        );
        $password = $request->input('password');
        if ($password)
            $data['password'] = bcrypt($request->password);
        /**if(trim($request->password)==''){
            $data = $request->except('password');
        }else{
            $data = $request->all();
            $data['password']=bcrypt($request->password);
        }*/
        $user->update($data);

        /**if ($request->hasFile('profile_photo_path')) {
            $image = time() . '_' . $request->file('profile_photo_path')->getClientOriginalName();
            $request->file('profile_photo_path')->storeAs('/admin/img/', $image);
            $user->update(['profile_photo_path' => $image]);
        }*/


        return redirect()->route('users.index')->with('succses', 'Usuario actualizado correctamente');
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
