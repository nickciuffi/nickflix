<?php

namespace App\Http\Middleware;

use App\Http\Controllers\UserController;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!UserController::isAdmin()){
            return redirect()->route('home')->with('error', 'Faça login em uma conta admin para acessar esta página');
        }
        return $next($request);
    }
}
