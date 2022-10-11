<?php

namespace App\Http\Controllers;

use App\Models\usuarios as Usuarios;
use App\Http\Resources\usuarios as UsuariosResource;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;



class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuarios::paginate(10);
        return UsuariosResource::collection($usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = Usuarios::create([
            'nome' => $request->get('nome'),
            'sobrenome' => $request->get('sobrenome'),
            'email' => $request->get('email'),
            'cpf' => $request->get('cpf'),
            'senha' => $request->get('senha')
        ]);
        return $usuarios;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = Usuarios::get()->where('usuarioid', $id);
        return UsuariosResource::collection($usuarios);
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
    public function update(Request $request, int $id)
    {
        $usuarios = Usuarios::findOrFail($id);       
        $usuarios->nome = $request->get('nome');
        $usuarios->sobrenome = $request->get('sobrenome');
        $usuarios->email = $request->get('email');
        $usuarios->cpf = $request->get('cpf');
        $usuarios->senha = $request->get('senha');
        if ($usuarios->save()) {
            return new UsuariosResource($usuarios);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = Usuarios::findOrFail( $id);
        $usuarios->delete();
    }
}
