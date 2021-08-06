<?php

namespace App\Http\Controllers;


use App\Movie;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $movies = Movie::all();
        return view('frontend.home',compact('movies'));
    }


    public function detail($id)
    {
        $all_movies = Movie::all()->take(3);
        $movie_details = Movie::find($id);
        return view('frontend.detail',compact('movie_details','all_movies'));
    }

    public function chooseSeat(){
        return view('frontend.chooseSeat');

    }
}
