<?php

namespace App\Http\Controllers;

use App\Seat;
use Illuminate\Http\Request;

use App\Hall;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats = Seat::all();
        return view('backend.seat.index',compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $halls = Hall::all();
        return view('backend.seat.create',compact('halls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // validation
        $request->validate([
            "seat_number" => "required|unique:seats",
            "seat_price" => "required",
            "hall" => "required|exists:halls,id"
        ]);

        // upload file

        // data insert
        $seat = new Seat; // create new object
        $seat->seat_number = $request->seat_number;
        $seat->seat_price = $request->seat_price;
        $seat->hall_id = $request->hall;
        $seat->save();

        // redirect
        return redirect()->route('seat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function show(Seat $seat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function edit(Seat $seat)
    {
        $halls = Hall::all();
        return view('backend.seat.edit',compact('halls','seat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seat $seat)
    {
        // dd($request);

        // validation
        $request->validate([
            "seat_number" => "required",
            "seat_price" => "required",
            "hall" => "required|exists:halls,id"
        ]);

        // upload file

        // data insert
        $seat->seat_number = $request->seat_number;
        $seat->seat_price = $request->seat_price;
        $seat->hall_id = $request->hall;
        $seat->save();

        // redirect
        return redirect()->route('seat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seat $seat)
    {
        $seat->delete();

        // if on Delete Cascade
        // foreach($category->subcategories as $subcategory){
        //     $subcategory->delete();
        // }
        // redirect
        return redirect()->route('seat.index');
    }
}
