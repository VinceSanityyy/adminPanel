<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

use App\Graph;
use App\News;

use Charts;

class HomeController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        // $this->middleware(['auth', 'verified']);
        // $this->middleware('auth');
        // return redirect('/home');

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

        $chart = Charts::database(User::all(),'line','highcharts')
        ->title('User Statistics')
        ->groupByDay()

        ->ElementLabel('Total Users Registered')
        ->Responsive(true);

        $news = Charts::database(News::all(),'line','highcharts')
        ->title('News Statistics')
        ->groupByDay()

        ->ElementLabel('Total Articles Posted')
        ->Responsive(true);



        // dd($news);

        return view('dashboard',['chart'=>$chart, 'news'=>$news])->with('count', $count);
        // return view('dashboard', ['chart' => $chart]);


        // $count = User::count();
        // return View::make('dashboard')->with('count', $count);

        // return view('dashboard');
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }


    //FETCH DATA FROM THE SECOND DATABASE
    // public function another(){
        //     // $arr_graph = \DB::connection('mysql2')->select("SELECT * FROM ico_stages WHERE id = ?", [1]);

        //     // $arrgraph = DB::connection('mysql2');

        //     // $graph = DB::connection('mysql2')->select("SELECT * FROM ico_stages WHERE id = ?", [1]);

        //     // $ico_stages  = new Graph;
        //     // $ico_stages ->setConnection('mysql2');

        //     // $arr_product = $ico_stages->find(1);

        //     // //DISPLAY
        //     // dd($arr_product);



        //     $count = Graph::count();

        //     $chart = Charts::database(Graph::get()->find(1),'line','highcharts');
        //             //  ->title('User Statistics')
        //             //  ->groupByYear(7)
        //             //  ->Width(0)

        //             //  ->Responsive(true);

        //     dd($chart);
        // }
    }
