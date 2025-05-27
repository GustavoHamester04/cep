@extends('layouts.app')

@section('title', 'CEPs Cadastrados')

@section('content')
    <h1 class="mb-4">Lista de CEPs Cadastrados</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>CEP</th>
                <th>Logradouro</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ceps as $cep)
                <tr>
                    <td>{{ $cep->cep }}</td>
                    <td>{{ $cep->logradouro }}</td>
                    <td>{{ $cep->bairro }}</td>
                    <td>{{ $cep->cidade }}</td>
                    <td>{{ $cep->estado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('ceps.index') }}" class="btn btn-primary mt-3">Voltar</a>
@endsection
