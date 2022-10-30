@extends('layouts.main')

@section('content')
    <div class='user-container'>

        <form action="/api/usuarios/{{ $usuarios->id }}" method="POST">

            @method('PUT')
            <label class='user-label'>
                Nome:<input type="text" name="nome" value='{{ $usuarios->nome }}' id='nome'><br>
            </label>

            <label class='user-label'>
                Sobrenome:<input type="text" name="sobrenome" value='{{ $usuarios->sobrenome }}' id='sobrenome'><br>
            </label>

            <label class='user-label'>
                Email:<input type="text" name="email" value='{{ $usuarios->email }}' id='email'><br>
            </label>

            <label class='user-label'>
                CPF:<input type="text" name="cpf" value='{{ $usuarios->cpf }}' id='cpf'><br>
            </label>

            <label class='user-label'>
                Senha:<input type="text" name="senha"value='{{ $usuarios->senha }}' id='senha'><br>
            </label>

            <button type="submit">GRAVAR</button>
            <a type='button' href="{{ URL('/') }}">
                <button type="button">home</button>
            </a>
        </form>

    </div>
@endsection
