@extends('layouts.app')

@section('title', 'Confirmar CEP')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Confirmar Dados do CEP</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('ceps.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" id="cep" name="cep" class="form-control" value="{{ $dados['cep'] }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="logradouro" class="form-label">Logradouro</label>
                    <input type="text" id="logradouro" name="logradouro" class="form-control" value="{{ $dados['logradouro'] }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" id="bairro" name="bairro" class="form-control" value="{{ $dados['bairro'] }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" id="cidade" name="cidade" class="form-control" value="{{ $dados['localidade'] }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" id="estado" name="estado" class="form-control" value="{{ $dados['uf'] }}" readonly>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('ceps.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-success">Confirmar e Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
