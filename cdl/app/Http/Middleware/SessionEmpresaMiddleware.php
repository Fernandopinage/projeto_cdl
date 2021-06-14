<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionEmpresaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('users')) {
          return redirect()->route('login/empresa');
        }
    }
}
