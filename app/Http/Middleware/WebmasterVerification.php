<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class WebmasterVerification
// {
//     public function handle(Request $request, Closure $next)
//     {
//         if(Auth::check()){
//             if(Auth::user()->role_id == 1 || Auth::user()->role_id == 5){
//                 return $next($request);
//             }else{
//                 return redirect()->back()->with("access", "You can't access on this page " . Auth::user()->role->name);
//             }
//         }
//     }
// }
