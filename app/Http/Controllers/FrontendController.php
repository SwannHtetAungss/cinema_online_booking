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

    public function movie(){
        return view('frontend.movie');
    }


    public function detail($id)
    {
        $movie_details = Movie::find($id);
        return view('frontend.detail',compact('movie_details'));
    }

    public function chooseSeat(){
        return view('frontend.chooseSeat');

    }
}
