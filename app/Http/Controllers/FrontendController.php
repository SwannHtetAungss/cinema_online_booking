<?php

namespace App\Http\Controllers;


use App\Movie;
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

        $movies = Movie::all();

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
        return view('frontend.home',compact('hall_shows','movies'));

    }

    public function movie(){
        $movies = Movie::all();
        return view('frontend.movie',compact('movies'));
    }


    public function detail($id)
    {
        $all_movies = Movie::all()->take(3);
        $movie_details = Movie::find($id);

        $detail_show = Show::where('movie_id','=', $id)->get();
        
        foreach($detail_show as $detail_hall){
            $hallid = $detail_hall->hall_id;
            $detail_hall_show = Hall::where('id','=',$hallid)->groupBy('id')->get();
        }
        
        if($detail_show->isEmpty()){
            return view('frontend.detail',compact('movie_details','all_movies','detail_show'));
        }else{
            return view('frontend.detail',compact('movie_details','all_movies','detail_show','detail_hall_show'));
        }
        
    }


    public function contact(){
        return view('frontend.contact');

    }

    public function chooseSeat(){
        return view('frontend.chooseSeat');

    }
}
