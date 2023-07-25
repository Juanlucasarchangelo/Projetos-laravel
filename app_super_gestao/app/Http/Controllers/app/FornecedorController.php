<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        /** Isso é um Array */
        $fornecedoresArray = [
            'Fornecedor 1',
            'Fornecedor 2',
            'Fornecedor 3',
            'Fornecedor 4',
            'Fornecedor 5',
            'Fornecedor 6',
            'Fornecedor 7',
            'Fornecedor 8',
            'Fornecedor 9',
            'Fornecedor 10',
            'Fornecedor 11',
            'Fornecedor 12',
            'Fornecedor 13'
        ];

        /** Array Multdimencional */
        $fornecedoresArrayMult =[
            0 => ['nome' => 'Juan Lucas', 'status' => 'N', 'cpf' => '456.916.448.07', 'telefone' => '(19) 98772-5453'],
            1 => ['nome' => 'Mabilly', 'status' => 'N', 'cpf' => '456.916.448.07', 'telefone' => '(19) 98772-0695'],
            2 => ['nome' => 'Aline', 'status' => 'N', 'cpf' => '456.916.235.07', 'telefone' => '(19) 98772-0695'],
            3 => ['nome' => 'Leandro', 'status' => 'S', 'cpf' => '456.234.456.08', 'telefone' => '(19) 98772-1243'],
            4 => ['nome' => 'Junior', 'status' => 'N', 'cpf' => '456.916.448.54', 'telefone' => '(19) 98772-0695'],
            5 => ['nome' => 'Rebeka', 'status' => 'S', 'cpf' => '123.916.123.07', 'telefone' => '(19) 98772-5423'],
            6 => ['nome' => 'Felipe', 'status' => 'N', 'cpf' => '456.333.448.07', 'telefone' => '(19) 98772-4323'],
            7 => ['nome' => 'Anderson', 'status' => 'S', 'cpf' => '456.916.212.23', 'telefone' => '(19) 98772-0695'],
        ];

        return view('app.fornecedor.index', compact('fornecedoresArrayMult'));
    }
}
