<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';
        
        if($request->get('erro') == 1){
            $erro = 'Usuário ou senha não existem.';
        } elseif ($request->get('erro') == 2){
            $erro = 'Necessário realizar login para acessar esta perta do sistema!';
        }

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request)
    {
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'usuario.required' => 'O campo :attribute é obrigatorio.',
            'usuario.email' => 'O campo :attribute deve ser um e-mail valido.',
            'senha.required' => 'O campo :attribute é obrigatorio.'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        // $user = new User();
        // $exist = $user->where('email', $email)->where('password', $password)->get();
        $usuario = User::where('email', $email)->where('password', $password)->get()->first();

        if(isset($usuario->name)){
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.clientes');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }
}
