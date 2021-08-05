<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Show;
use App\Hall;
use DB;

class FrontendController extends Controller
{
    public function home(){

        // $hall_shows = Show::join('halls','halls.id','=','shows.hall_id')
        //                     ->join('movies','movies.id','=','shows.movie_id')
        //                     ->get();

        // foreach($hall_shows as $hall_show){
        //     // dd($hall_show->hall->id);
        //     $show_times = Hall::join('shows','shows.hall_id','=','halls.id')
        //                     ->where('halls.id','=',$hall_show->hall->id)
        //                     ->get(['shows.show_time']);
        // }
        // $hall_shows = DB::table('halls')
        //                     ->select('halls.*')
        //                     ->join('shows','shows.hall_id','=','halls.id')
        //                     ->where('halls.id','=','shows.hall_id')
        //                     ->get();

        $halls = Hall::all();
        $hall_shows = [];
        foreach($halls as $hall){
            $shows = $hall->shows;
            if($shows->isNotEmpty()){
                array_push($hall_shows, $hall);
                // echo $hall_shows;
            }
        }
        // die();
        // dd($hall_shows);
        return view('frontend.home',compact('hall_shows'));
    }


    public function detail(){
        return view('frontend.detail');
    }

    public function chooseSeat(){
        return view('frontend.chooseSeat');

    }
}
