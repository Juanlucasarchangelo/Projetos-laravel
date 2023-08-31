<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fornecedor;
use PhpParser\Node\Stmt\Return_;

class FornecedorController extends Controller
{
    public $mensagem;

    public function index()
    {
        return view('app.fornecedor.index');
    }

    public function listar(Request $request)
    {
        $queryFornecedor = Fornecedor::where('nome', 'like', '%' . $request->input('nome') . '%')
            ->where('site', 'like', '%' . $request->input('site') . '%')
            ->where('uf', 'like', '%' . $request->input('uf') . '%')
            ->where('email', 'like', '%' . $request->input('email ') . '%')
            ->paginate(5);

        return view('app.fornecedor.listar', ['queryFornecedor' => $queryFornecedor, 'request' => $request->all()]);
    }

    public function adicionar(Request $request)
    {
        if ($request->input('_token') != '' && $request->input('id') == '') {
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email',
            ];

            $feedbacks = [
                'required' => 'O campo :attribute deve ser preenchido.',
                'nome.min' => 'O campo :attribute deve ter no minimo 3 caracteres.',
                'nome.max' => 'O campo :attribute deve ter no máximo 40 caracteres.',
                'uf.min' => 'O campo :attribute deve ter no minimo 2 caracteres.',
                'uf.max' => 'O campo :attribute deve ter no máximo 2 caracteres.',
                'email' => 'O campo :attribute não foi preenchido corretamente.',
            ];

            $request->validate($regras, $feedbacks);

            Fornecedor::create($request->all());

            $this->mensagem = 'Cadastro realizado com sucesso.';
        }

        if ($request->input('_token') != '' && $request->input('id') != '') {
            $fornecedor = Fornecedor::find($request->input('id'));

            $update = $fornecedor->update($request->all());

            if($update){
                $this->mensagem = 'Atualização realizado com sucesso.';  
            } else {
                $this->mensagem = 'Não foi possivel alterar o registro.';
            }

            return redirect()->route('app.fornecedor.editar', ['id' => $request->input('id'), 'mensagem' => $this->mensagem]);
            
        }

        return view('app.fornecedor.adicionar', ['mensagem' => $this->mensagem]);
    }

    public function editar($id, $mensagem = '')
    {
        $fornecedor = Fornecedor::find($id);

        // dd($fornecedor);

        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'mensagem' => $mensagem]);
    }

    public function excluir($id){
        Fornecedor::find($id)->delete(); // Atribui a data de exclusão
        // Fornecedor::find($id)->forceDelete(); // Delete do banco

        return redirect()->route('app.fornecedor');
    }
}
