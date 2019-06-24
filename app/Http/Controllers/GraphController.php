<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

use App\News;
use Charts;
use App\Graph;

class GraphController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


       $graph = Charts::database(Graph::get()->find(1),'line','highcharts')
                 ->title('Tokens')
                 ->ElementLabel('Coins Sold')
                 ->Responsive(true)
                 ->data(Graph::get('total_tokens'))


                ;

        //dd($chart);

        $news = News::all();

        //dd($news);

         return view ('coin.news', ['graph' => $graph, 'news'=> $news]) ;


        // return view('coin.app');
        // return view('coindeoro.newsindex',compact('chart'));

        // $chart = Charts::database(Graph::on('mysql2')->find(1),'line','highcharts')
        // ->title('coin')
        // ->Responsive(true);
        // dd($chart);
        // return view('coindeoro.newsindex',['chart'=>$chart])->with('chart', $chart);
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

        // $ico_stages  = new Graph;
        // $ico_stages ->setConnection('mysql2');

        // $arr_product = $ico_stages->find(1);

        // //DISPLAY
        // dd($arr_product);



    $chart = Charts::database(Graph::on('mysql2')->find(1),'line','highcharts')
    ->title('Coins')
    ->Responsive(true);
     dd($chart);



    }
}
