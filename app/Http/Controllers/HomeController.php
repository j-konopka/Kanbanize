<?php

namespace App\Http\Controllers;

use App\Charts\ChartsManager;
use App\Charts\LineChart;
use App\Cron;
use App\Models\HistoryModel;
use Illuminate\Http\Request;
use ConsoleTVs\Charts;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Building Charts here
        // Pruefen, welcher Typ Chart und dann separieren



        //return view('home2', ['chart' => $chart]);
    }

    public function displayLastRefreshedDate()
    {
        $history = HistoryModel::all();
        $lastDate = $history->last()->created_at;
        // TODO: implement last refresh

        // WARUM???
        return view('home2', [
            'lastRefresh' => $lastDate,
        ]);

    }
}
