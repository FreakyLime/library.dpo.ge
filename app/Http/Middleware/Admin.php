<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class Admin
{

    public function handle($request, Closure $next, $guard = null)
    {
        //თუ არსებობს ავტორიზაციის მოთხოვნა
        if (Auth::user()) {
            //თუ ავტორიზებული მომხმარებლის სტატუსი არის ადმინი
            if(Auth::user()->permissions == "admin"){
                //გადაგვყავს ადმინის გვერდზე
                return $next($request);
            }
        }
        //ადმინზე პირდაპირი მიმართვის შემთხვევაში გადაგვყავს ავტორიზაციის გვერდზე
        return Redirect('login');
    }
}
