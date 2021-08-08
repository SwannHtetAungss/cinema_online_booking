<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['booking_time','numberofseats','total','status','user_id','show_id'];

    public function showseats(){
        return $this->hasMany('App\ShowSeat');
    }
}
