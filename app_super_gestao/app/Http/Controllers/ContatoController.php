<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function index(Request $request)
    {
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

        return view('site.contato', ['titulo' => 'Contato (Teste)']);
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:5|max:50',
            'email' => 'required|email',
            'telefone' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000',
        ]);

        SiteContato::create($request->all());
    }
}
