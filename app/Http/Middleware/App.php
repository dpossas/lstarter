<?php

namespace App\Http\Middleware;

use Closure, Session, Auth;

class App
{
    protected $languages = ['en','pt-BR'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Session::has('locale'))
        {
            Session::put('locale', 'pt-BR');
        }

        app()->setLocale(Session::get('locale'));

        return $next($request);
    }
}
