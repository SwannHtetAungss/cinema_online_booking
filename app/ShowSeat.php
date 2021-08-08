<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShowSeat extends Model
{
    use SoftDeletes;

    protected $fillable = ['status', 'price', 'booking_id', 'show_id','seat_id'];

    public function booking(){
        return $this->belongsTo('App\Booking');
    }

    public function seat(){
        return $this->belongsTo('App\Seat');
    }
}
