<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = [
            0 => [
                'nome' =>'fornecedor 1',
                'status' => 'N',
                'cnpj' => '456.916.448-07'
            ],
            1 => [
                'nome' =>'fornecedor 2',
                'status' => 'S',
            ],
            2 => [
                'nome' =>'fornecedor 2',
                'status' => 'S',
                'cnpj' => '159.656.458-07'
            ],
            3 => [
                'nome' =>'fornecedor 2',
                'status' => 'S',
            ]
        ];
        
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
