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

        if($user->admin('adm')){

            return redirect('/admin');

        }
        elseif ($user->admin('com')) {

            return redirect('/produck');
            
        }

        return $next($request);

    }

}
