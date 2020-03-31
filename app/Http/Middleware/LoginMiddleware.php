<?php

namespace App\Http\Middleware;

use App\Company;
use App\Institute;  
use Closure;

class LoginMiddleware
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
        $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:6 | max:16',
        ]);

        if($request->type == 'company'){
            $row = Company::where('email', $request->email)->get();
            $request->attributes->add(['type' => 'company']);
        }
        else if($request->type == 'institute'){
            $row = Institute::where('email', $request->email)->get();
            $request->attributes->add(['type' => 'institute']);
        }
        
        if( count($row) != 0 && $row[0]->password == $request->password){
            $request->attributes->add(['data' => $row]);
            return $next($request);
        }
        else{
            return redirect("/login")->with("error", "No such user found. Try registering or check your username and password again.");
        }
    }
}
