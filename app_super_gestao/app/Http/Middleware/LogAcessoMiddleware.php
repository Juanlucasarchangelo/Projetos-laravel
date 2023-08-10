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
        // return $next($request);

        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();

        LogAcesso::create(['log' => "O IP $ip requisitou um acesso a rota $rota"]);
        return Response('Chegamos aqui e paramos.');
    }
}
