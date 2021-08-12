<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hall;
use App\Show;
use App\Seat;
use App\ShowSeat;
use App\Movie;
// use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index(){

        $halls = Hall::all();
        $shows = Show::where('status','=',1)->groupBy('show_time')->get();

        return view('backend.dashboard.index',compact('halls','shows'));
    }

    public function checkData(Request $request){
        // dd($request->hall_id);
        
        $hallid = $request->hall_id;
        $showid = $request->show_id;

        $seats = Seat::where('hall_id','=',$hallid)->get();
        $showseats = ShowSeat::where('show_id','=',$showid)->get();

        $show = Show::find($showid);
        $movie = Movie::find($show->movie_id);

        $hall = Hall::find($hallid);


        return ['seats'=>$seats,'showseats'=>$showseats,'movie'=>$movie,'hall'=>$hall];
    }
}
