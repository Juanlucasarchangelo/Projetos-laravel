<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        echo $metodo_autenticacao . ' - ' . $perfil . '<br>' ;

        if($metodo_autenticacao == 'padrao'){
            echo 'Verifica o usuário e senha no banco de dados.' . $perfil .  '<br>';
        }

        if($metodo_autenticacao == 'ldap'){
            echo 'Verifica o usuário e senha no AD. ' . $perfil . '<br>';
        }

        if($perfil == 'visitante'){
            echo 'Exibe apenas alguns recursos. <br>';
        } else {
            echo 'Carrega o perfil do banco. <br>';
        }

        // Veriica se o user tem acesso
        if (false) {
            return $next($request);
        } else {
            return response('Acesso negado, este caminho requer autenticação.');
        }
    }
}
