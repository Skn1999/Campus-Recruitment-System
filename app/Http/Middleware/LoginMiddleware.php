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
        }
        else if($request->type == 'institute'){
            $row = Institute::where('email', $request->email)->get();
        }
        
        if( !empty($row) && $row[0]->password == $request->password){
            $request->merge(array("data" => $row) );
            return $next($request);
        }
        else{
            $request->merge(array("errors" => "No user found"));
            return $next($request);
        }
    }
}
