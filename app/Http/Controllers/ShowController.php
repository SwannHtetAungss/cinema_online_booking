<?php

namespace App\Http\Controllers;

use App\Show;
use Illuminate\Http\Request;
use App\Hall;
use App\Movie;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = Show::all();
        return view('backend.shows.index',compact('shows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $halls=Hall::all();
        $movies=Movie::all();

        return view('backend.shows.create',compact('halls','movies'));
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
            "show_date" => "required",
            "show_time" => "required",
            "Hall_id" => "required",
            "Movie_id" => "required"
        ]);

        // upload file

        // data insert
        $shows = new Show; // create new object
        $shows->show_date = $request->show_date;
        $shows->show_time = $request->show_time;
        $shows->Hall_id = $request->Hall_id;
        $shows->Movie_id = $request->Movie_id;
        $shows->save();

        // redirect
        return redirect()->route('shows.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function show(Show $show)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function edit(Show $show)
    {
        
        $halls=Hall::all();
        $movies=Movie::all();

        return view('backend.shows.edit',compact('show','halls','movies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Show $show)
    {
        // dd($request);

        // validation
       $request->validate([
            "show_date" => "required",
            "show_time" => "required",
            "Hall_id" => "required",
            "Movie_id" => "required"
        ]);

        // upload file

        // data insert
        
        $show->show_date = $request->show_date;
        $show->show_time = $request->show_time;
        $show->Hall_id = $request->Hall_id;
        $show->Movie_id = $request->Movie_id;
        $show->save();

        // redirect
        return redirect()->route('shows.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function destroy(Show $show)
    {
        $show->delete();

        // if on Delete Cascade
        // foreach($category->subcategories as $subcategory){
        //     $subcategory->delete();
        // }
        // redirect
        return redirect()->route('shows.index');
    }
}
