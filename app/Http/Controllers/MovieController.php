<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::orderBy('id', 'desc')->get();
        return view('backend.movie.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            "name" => "required",
            "photo" => "required|mimes:jpeg,jpg,png",
            "actor" => "required",
            "actress" => "required",
            "director" => "required",
            "description" => "required",
            "trailer" => "required",
            "duration" => "required",
            "release_date" => "required",
            "genre" => "required",
        ]);

        // upload file
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // categoryimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('movieimg', $fileName, 'public');

            // $path = '/storage/'.$filePath;
        }

        // data insert
        $movie = new Movie; // create new object
        $movie->name = $request->name;
        $movie->photo = $filePath;
        $movie->actor = $request->actor;
        $movie->actress = $request->actress;
        $movie->director = $request->director;
        $movie->description = $request->description;
        $movie->trailer = $request->trailer;
        $movie->duration = $request->duration;
        $movie->release_date = $request->release_date;
        $movie->genre = $request->genre;
        $movie->save();

        // redirect
        return redirect()->route('movie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('backend.movie.edit',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        // validation
        $request->validate([
            "name" => "required",
            "actor" => "required",
            "actress" => "required",
            "director" => "required",
            "description" => "required",
            "trailer" => "required",
            "duration" => "required",
            "release_date" => "required",
            "genre" => "required",
        ]);

        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // categoryimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('movieimg', $fileName, 'public');

            // Delete old photo (try yourself)
            // condition file exist
            unlink(public_path('storage/').$movie->photo);
        }else{
            $filePath = $movie->photo;
        }

        // data insert
        $movie->name = $request->name;
        $movie->photo = $filePath;
        $movie->actor = $request->actor;
        $movie->actress = $request->actress;
        $movie->director = $request->director;
        $movie->description = $request->description;
        $movie->trailer = $request->trailer;
        $movie->duration = $request->duration;
        $movie->release_date = $request->release_date;
        $movie->genre = $request->genre;
        $movie->save();

        // redirect
        return redirect()->route('movie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        // if on Delete Cascade
        // foreach($category->subcategories as $subcategory){
        //     $subcategory->delete();
        // }
        // redirect
        return redirect()->route('movie.index');
    }
}
