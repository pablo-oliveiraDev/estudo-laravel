@extends('layouts.main')

@section('content')

    <div class='cadastro-container'>
        <form action="{{route('usuarios.store')}}" method="POST">
            <!-- @csrf -->
            <label class='cadastro-label'>
                Nome:<input type="text" name="nome" id='nome'><br>
            </label>

            <label class='cadastro-label'>
                Sobrenome:<input type="text" name="sobrenome" id='sobrenome'><br>
            </label>

            <label class='cadastro-label'>
                Email:<input type="text" name="email" id='email'><br>
            </label>

            <label class='cadastro-label'>
                CPF:<input type="text" name="cpf" id='cpf'><br>
            </label>

            <label class='cadastro-label'>
                Senha:<input type="text" name="senha" id='senha'><br>
            </label>

            <button type="submit">GRAVAR</button>
            <a type='button' href="{{URL('/')}}">
                <button type="button">home</button>
            </a>
        </form>

    </div>
    @endsection

