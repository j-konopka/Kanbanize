<?php

namespace App\Http\Controllers;


use App\Charts\SampleChart;
use App\Models\HistoryModel;

class ChartController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function buildChart()
    {
        $history = HistoryModel::all();

        $chart = new SampleChart;
        $chart->labels($history->keys());
        $chart->dataset('My dataset', 'line',$history->values());


        return view('home2', ['chart' => $chart]);
    }
}
