@extends('layouts.app')

@section('content')
<h1>Lista de Clientes</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($clientes->isEmpty())
    <p>Nenhum cliente cadastrado.</p>
@else
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>
                        @if ($cliente->foto)
                            <img src="{{ asset('storage/' . $cliente->foto) }}" alt="Foto" width="50">
                        @else
                            <span>Sem foto</span>
                        @endif
                    </td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

<a href="{{ route('clientes.create') }}" class="btn btn-success">Cadastrar Novo Cliente</a>
@endsection
