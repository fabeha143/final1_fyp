<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class appointLogin
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
        if(!session()->has('LoggedUserweb') and ($request->path() != '/Appointment/create') or ($request->path() == '/contactUs/send')){
            return redirect()->back()->with('fail','You must logged In');
        }
        return $next($request);
    }
}
