<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use View;
use App\News;
use Charts;
use App\Graph;
use App\Roadmap;

class GraphController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {

        // ->groupBy('total_tokens');
        // dd($chart);
        // return View:make('coin.news');
        // $chart = view('coin.news')->with('graph', $graph ,'news',$news);


        $allroad = Roadmap::all();
        $news = News::all();
        $graphdetails = Graph::select()->where('id', 1)->get();



        // $users = Graph::select()->where('id',1)
    	// 			->get();
        $chart = Charts::database(Graph::all(), 'line', 'highcharts')
                   ->Colors(['#ff0000', '#00ff00', '#0000ff'])
                  ->groupByYear()
			      ->responsive(false);

        // dd($allroad);

        // $chart = view('coin.graph')->with('chart', $chart);
        return view('coin.news',compact('chart','news','graphdetails','allroad'));




    //     //get graph details for rendering individual data


    //     $gr = Graph::get()->find(1);

    //     // $graph = Charts::database($gr,'pie','highcharts')
        // $graph = Charts::database(Graph::get()->find(1),'line','highcharts')
    //     ->title('Tokens')
    //     ->groupBy('total_tokens')
    //     ->height(1000)
    //     ->Responsive(true);


    //     //   ->groupBy('total_tokens')
    //     // ->data(Graph::find(1));


    //     // dd($gr);
    //     // dd($graphdetails);
    //     // dd($graph);

    //    return View::make('coin.news', compact('graph','news','graphdetails'));



    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        //
    }

    public function test(){


        //  $graph = DB::connection('mysql2')->select("SELECT * FROM ico_stages WHERE id = ?", [1]);
        //  dd($graph);

        $chart  = new Graph;
        $chart ->setConnection('mysql2');

        $chart = Charts::database ($chart->find(1),'line','highcharts')
        ->title('Tokens')
        ->ElementLabel('Coins Sold')
        ->groupBy('total_tokens')
        ->Responsive(true);

        dd($chart);
           return view('coin.testgraph', ['chart' => $chart]);
        //DISPLAY


        $news = News::all();

        // $chart = Charts::database(Graph::get()->find(1),'','highcharts')
        // ->title('Coins');

        // return view('coin.testgraph', ['chart' => $chart]);




    }
}
