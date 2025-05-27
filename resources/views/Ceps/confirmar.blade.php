@extends('layouts.app')

@section('title', 'Confirmar CEP')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Confirmar Dados do CEP</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('ceps.store') }}">
            @csrf
            <div class="mb-3">
                <label>CEP</label>
                <input type="text" name="cep" class="form-control" value="{{ $dados['cep'] }}" readonly>
            </div>
            <div class="mb-3">
                <label>Logradouro</label>
                <input type="text" name="logradouro" class="form-control" value="{{ $dados['logradouro'] }}" readonly>
            </div>
            <div class="mb-3">
                <label>Bairro</label>
                <input type="text" name="bairro" class="form-control" value="{{ $dados['bairro'] }}" readonly>
            </div>
            <div class="mb-3">
                <label>Cidade</label>
                <input type="text" name="cidade" class="form-control" value="{{ $dados['localidade'] }}" readonly>
            </div>
            <div class="mb-3">
                <label>Estado</label>
                <input type="text" name="estado" class="form-control" value="{{ $dados['uf'] }}" readonly>
            </div>
            <button type="submit" class="btn btn-success">Confirmar e Salvar</button>
            <a href="{{ route('ceps.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
