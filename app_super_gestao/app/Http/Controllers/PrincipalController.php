<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){

        $motivo_contatos = [
            '1' => 'Duvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];

        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}
