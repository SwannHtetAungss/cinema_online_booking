<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Http\Request;

use App\Seat;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halls = Hall::all();
        return view('backend.hall.index',compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.hall.create');
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
            "name" => "required|unique:halls|max:191|min:1",
            "total_seat" => "required"
        ]);

        // upload file

        // data insert
        $hall = new Hall; // create new object
        $hall->name = $request->name;
        $hall->total_seat = $request->total_seat;
        $hall->save();

        // data insert to Seat
        $hallid = $hall->id;
        $hallname = $hall->name;
        $seat_total = $hall->total_seat;
        $seatprice = 3000;
        $room = substr($hallname,5,1);
        
        for ($i=1; $i <= $seat_total ; $i++) { 

            $numlength = strlen((string)$i);
            if($numlength==1){
                $seatNumber = $room.'-0'.$i;
            }else{
                $seatNumber = $room.'-'.$i;
            }

            $seat = new Seat; // create new object
            $seat->seat_number = $seatNumber;
            $seat->seat_price = $seatprice;
            $seat->hall_id = $hallid;
            $seat->save();

        }

        // redirect
        return redirect()->route('hall.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function show(Hall $hall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function edit(Hall $hall)
    {
        return view('backend.hall.edit',compact('hall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hall $hall)
    {
        // dd($request);

        // validation
        $request->validate([
            "name" => "required|max:191|min:1",
            "total_seat" => "required"
        ]);

        // upload file

        // data insert
        $hall->name = $request->name;
        $hall->total_seat = $request->total_seat;
        $hall->save();

        // redirect
        return redirect()->route('hall.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hall $hall)
    {
        $hall->delete();

        // if on Delete Cascade
        // foreach($category->subcategories as $subcategory){
        //     $subcategory->delete();
        // }
        // redirect
        return redirect()->route('hall.index');
    }
}
