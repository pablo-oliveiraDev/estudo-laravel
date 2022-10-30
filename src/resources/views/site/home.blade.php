@extends('layouts.main')

@section('titulo', 'primeiro-projeto')



@section('content')
    <main>
        <div class='home-container'>
            <table>

                {{-- <div> {{ $user->paginate(10) }}</div> --}}

                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>SOBRENOME</th>
                        <th>EMAIL</th>
                        <th>CPF</th>
                        <th>SENHA</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $user)
                        <tr>

                            <td>{{ $user->nome }}</td>
                            <td>{{ $user->sobrenome }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->cpf }}</td>
                            <td>{{ $user->senha }}</td>
                            <td>
                                <a href="/usuarios/{{$user->id}}"><button>Editar</button></a>
                                <form action="/api/usuarios/{{$user->id}}" method="POST">
                                    @method('DELETE')
                                    <button type="submit"> delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
        </div>
        </tbody>
        </table>

    </main>
@endsection
