<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User;

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
        // //
        $count = User::count();
         return view('dashboard')->with('count', $count);


        // $count = User::count();
        // return View::make('dashboard')->with('count', $count);

        // return view('dashboard');
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/dashboard');
    }
}
