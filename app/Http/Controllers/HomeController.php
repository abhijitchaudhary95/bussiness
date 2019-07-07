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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(request()->user()->role == 'admin'){
            return redirect()->route('admin');
        }else if(request()->user()->role == 'employ') {
            return redirect()->route('employ');
        }else if(request()->user()->role == 'chef') {
            return redirect()->route('chef');
        }
        return view('home');
    }

    public function admin(){
        return view('home');
    }

    public function employ(){
        return view('admin.pages.dashboard');
    }

    public function chef(){
        return view('home');
    }
}
