<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Seat;
use App\ShowSeat;
use App\User;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('backend.booking.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        if(is_null($request->total)){
            return 'fail';
        }else{
            DB::transaction(function () use ($request) {
                $book_arr = json_decode($request->data);
                
                $total=0;
                $seatcount=0;
                foreach($book_arr as $booking){
                    $total += $booking->seatprice;
                    $seatcount ++;
                }

                // dd($seatnumber);

                // Insert Booking Table
                $booking = new Booking;
                $booking->booking_time = date('Y-m-d'); // timestamp
                $booking->numberofseats = $seatcount;
                $booking->total = $total;
                $booking->status = 0;
                $booking->user_id = Auth::id();
                $booking->show_id = $request->showid;
                $booking->save();

                $booking_id = $booking->id;

                // Insert Show Seat Table
                foreach($book_arr as $seat){

                    $showseat = new ShowSeat();
                    $showseat->status = 0;
                    $showseat->price = $seat->seatprice;
                    $showseat->booking_id = $booking_id;
                    $showseat->show_id = $request->showid;
                    $showseat->seat_id = $seat->id;
                    $showseat->save();
                }
                
            });

            return 'success';

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        $booking = Booking::find($booking->id);
        $booking_orders = $booking->showseats;
        // dd($booking_orders);
        return view('backend.booking.detail',compact('booking','booking_orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        // $bookings = Booking::all();
        // dd($request);
        $booking->status = $request->status;
        $booking->save();

        $bookseats = ShowSeat::where('booking_id','=', $booking->id)->get();

        foreach($bookseats as $bookseat){
            $bookseat->status = $request->status;
            $bookseat->save();
        }
        
        return redirect()->route('booking.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
