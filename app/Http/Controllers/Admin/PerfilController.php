<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\User;
Use\Perfil;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        $caminhos = [
            ['url'=>'/admin', 'titulo' =>'Administrador'],
            ['url'=>'', 'titulo' =>'Perfil de Usuários'],
        ];
        return view('admin.usuarios.index_perfil', compact('usuarios', 'caminhos'));
    }


    public function perfil($id)
    {
        $usuario = User::find($id);
        $perfil = Perfil::all();
        $caminhos = [
            ['url'=>'/admin', 'titulo' =>'Administrador'],
            ['url'=> route('usuarios.index'), 'titulo' =>'Perfil de Usuários'],
        ];
        return view('admin.usuarios.index_perfil', compact('usuario', 'perfil', 'caminhos'));
    }
    public function perfilStore(Request $request, $id)
    {

    }
    public function perfilDestroy($id, $perfil_id)
    {

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
