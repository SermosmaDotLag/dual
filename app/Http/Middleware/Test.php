<?php

namespace App\Http\Middleware;

use Closure;

class Test
{
    public function handle($request, Closure $next)
    {
        if (1 == 1) {

            //return response('No tienes permisos para acceder a esta página.', 403);
            //return view('error403');
            //return redirect('error');
            return response()->view('error403');
        }
        return $next($request);
        
    }
}