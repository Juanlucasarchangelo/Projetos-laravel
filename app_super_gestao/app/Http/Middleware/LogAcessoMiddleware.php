<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;
use PhpParser\Node\Stmt\Return_;
use App\LogAcesso;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();

        LogAcesso::create(['log' => "O IP $ip requisitou um acesso a rota $rota"]);

        // return $next($request);

        $resposta = $next($request);

        $resposta->setStatusCode(201, 'O status da resposta e o texto foram alterados.');
        // dd($resposta);

        return $resposta;
    }
}
