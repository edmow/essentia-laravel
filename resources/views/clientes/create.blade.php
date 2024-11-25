@extends('layouts.app')

@section('content')
<h1>Cadastrar Cliente</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" name="telefone" id="telefone" class="form-control" value="{{ old('telefone') }}" required>
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto (opcional)</label>
        <input type="file" name="foto" id="foto" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
@endsection
