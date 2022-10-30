<?php

namespace App\Http\Controllers;

use App\Models\usuarios as Usuarios;
use App\Http\Resources\usuarios as UsuariosResource;
use Illuminate\Database\Eloquent\Collection;
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
        // $usuarios = Usuarios::paginate(10);
        // dd($usuarios->toArray());
        // return view('site.home',compact('usuarios'));

           $usuarios = Usuarios::all();

           return view('site.home',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view(view:'usuarios.cadastro');
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
      

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = Usuarios::findOrFail($id);
        return $usuarios;
    }
    /**
     * Display the specified resource.
     *
     * @param  string  $nome
     * @return \Illuminate\Http\Response
     */
    public function search(string $nome)
    {
        $usuarios = Usuarios::where('nome','like', '%'.$nome.'%')->get();
        return $usuarios;
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

        $request->validate([
            'nome' => 'required|max:191',
            'sobrenome' => 'required|max:191',
            'email' => 'required|max:191',
            'cpf' => 'required|max:191',
            'senha' => 'required|max:191'
        ]);

        $usuarios = Usuarios::findOrFail($id);
        $usuarios->nome = $request->nome;
        $usuarios->sobrenome = $request->sobrenome;
        $usuarios->email = $request->email;
        $usuarios->cpf = $request->cpf;
        $usuarios->senha = $request->senha;
        $usuarios->update();
        return $usuarios;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = Usuarios::findOrFail($id);
        $usuarios->delete();
    }
}
