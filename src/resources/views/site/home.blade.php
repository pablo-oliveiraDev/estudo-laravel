@extends('layouts.main')

@section('titulo', 'primeiro-projeto')



@section('content')
    <main>
        <a href="{{ URL('cadastro') }}">
            <button type="button">Cadastrar</button>

        </a>

        <div class='container' style="color:#fff">
            @foreach ($usuarios as $user)
                <p>{{ $user }}</p>
            @endforeach
        </div>
    </main>
@endsection
