<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CepController extends Controller
{
    public function store(Request $request)
{
    $request->validate(['cep' => 'required']);

    $response = Http::get("https://viacep.com.br/ws/{$request->cep}/json/");
    $data = $response->json();

    $cep = Cep::create([
        'cep' => $data['cep'],
        'logradouro' => $data['logradouro'],
        'bairro' => $data['bairro'],
        'cidade' => $data['localidade'],
        'estado' => $data['uf'],
    ]);

    return redirect()->back()->with('success', 'CEP cadastrado!');
}

public function index()
{
    $ceps = Cep::all();
    return view('ceps.index', compact('ceps'));
}
}
