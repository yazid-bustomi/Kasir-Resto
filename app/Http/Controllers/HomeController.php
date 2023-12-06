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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;

        if ($role == 'client') {
            return redirect('/home');
        } else if ($role == 'kasir') {
            return redirect('/order');
        } else if ($role == 'manajer') {
            return redirect('/manager');
        } else {
            return view('auth.login');
        }

    }
}
