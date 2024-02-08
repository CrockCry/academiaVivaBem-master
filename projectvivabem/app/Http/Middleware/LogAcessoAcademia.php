<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;
use Illuminate\Http\Request;

class LogAcessoAcademia
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next) //  O que vai ser executado antes da requisição ser processada
    {
        // return response('chgeui aqui');

        // dd($request);

        $ip = $request->server->get('REMOTE_ADDR'); // pegando o ip do usuário que está acessando a aplicação
        $url = $request->getRequestUri(); // pegando a url do site que está sendo solicitada

        LogAcesso::create(['log' => "IP: $ip requisitou na URL $url da aplicação"]); // criar um novo registro no banco de dados com essa informação

        return $next($request);
    } //  fim da função handle
}
