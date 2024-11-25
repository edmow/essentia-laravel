@extends('layouts.app')

@section('content')
<h1>Editar Cliente</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('clientes.update', $cliente->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $cliente->nome) }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $cliente->email) }}" required>
    </div>

    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" name="telefone" id="telefone" class="form-control" value="{{ old('telefone', $cliente->telefone) }}" required>
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        @if ($cliente->foto)
            <p>Foto Atual:</p>
            <img src="{{ asset('storage/' . $cliente->foto) }}" alt="Foto" width="100">
        @endif
        <input type="file" name="foto" id="foto" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar Cliente</button>
</form>
@endsection