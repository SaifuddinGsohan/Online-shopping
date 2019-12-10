<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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

        $user = Auth::user();

        if($user->admin('Admin')){

            return redirect('/admin');

        }
        elseif ($user->admin('Company')) {

            return redirect('/product');
            
        }

        return $next($request);

    }

}
