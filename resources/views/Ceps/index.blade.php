@extends('layouts.app')

@section('title', 'Buscar CEP')

@section('content')
    <h1 class="mb-4">Buscar CEP</h1>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('ceps.buscar') }}" class="mb-4">
        @csrf
        <div class="input-group">
            <input type="text" name="cep" class="form-control" placeholder="Digite o CEP" required>
            <button class="btn btn-primary" type="submit">Buscar</button>
        </div>
    </form>

    <a href="{{ route('ceps.listar') }}" class="btn btn-secondary">Ver CEPs Cadastrados</a>
@endsection
