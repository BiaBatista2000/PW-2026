<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MaiorIdade
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->idade < 18) {
            return response('Acesso negado', 403);
        }

        return $next($request);
    }
}