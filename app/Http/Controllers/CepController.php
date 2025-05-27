<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Cep;

class CepController extends Controller
{
    public function buscar(Request $request)
    {
        $request->validate(['cep' => 'required']);

        $response = Http::get("https://viacep.com.br/ws/{$request->cep}/json/");
        $data = $response->json();

        if (isset($data['erro']) && $data['erro']) {
            return redirect()->back()->with('error', 'CEP inválido!');
        }

        return view('ceps.confirmar', ['dados' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'cep' => 'required',
            'logradouro' => 'nullable',
            'bairro' => 'nullable',
            'cidade' => 'required',
            'estado' => 'required',
        ]);

        Cep::create([
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
        ]);

        return redirect()->route('ceps.index')->with('success', 'CEP cadastrado com sucesso!');
    }


    public function index()
    {
        $ceps = Cep::all();
        return view('ceps.index', compact('ceps'));
    }

    public function listar()
{
    $ceps = Cep::all();
    return view('ceps.listar', compact('ceps'));
}

}
