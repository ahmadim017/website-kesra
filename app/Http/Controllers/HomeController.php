<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function($request, $next){
            if( Auth::user()->role == "ADMIN" && auth::user()->status == "ACTIVE"){
                return $next($request);
            }elseif(Auth::user()->role == "USER" && auth::user()->status == "ACTIVE"){
                return $next($request);
            }elseif(Auth::user()->role == "Creator" && auth::user()->status == "ACTIVE"){
                return $next($request);
            }elseif(Auth::user()->role == "Verifikator" && auth::user()->status == "ACTIVE"){
                return $next($request);
            }else{
                return redirect('login')->with(Auth::logout())->with('status','USER Anda Tidak active');
            }
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
