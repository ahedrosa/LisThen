<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        return view('app',['user'=>$user]);
    }
    
    public function welcome(Request $request){
        $register = $request->session()->get('register');
        $request->session()->forget('register');
        return view('welcome', ['register' => $register]);
    }
}
