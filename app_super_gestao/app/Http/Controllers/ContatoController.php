<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function index(Request $request)
    {
        $motivo_contatos = MotivoContato::all();

        /** Usando o metodo SAVE
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        $contato->save();
         */

        /* Usando o metodo create 
        $contato = new SiteContato();
        $contato->create($request->all());
        */

        return view('site.contato', ['titulo' => 'Contato (Teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required|min:5|max:50|unique:site_contatos',
                'email' => 'required|email',
                'telefone' => 'required',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required|max:2000',
            ],
            [
                'required' => 'O campo :attribute é obrigatorio.',
                'email' => 'O email informado não é valido.',
                'max' => 'O conteudo ultrapassa o limite proposto.',
                'min' => 'O conteudo não atinge o limite minimo.'
            ]
        );

        SiteContato::create($request->all());

        return redirect()->route('site.index');
    }
}
