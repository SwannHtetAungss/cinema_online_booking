<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seat extends Model
{
    use SoftDeletes;
    protected $fillable=['seat_number','seat_price','hall_id'];

    public function hall(){
        return $this->belongsTo('App\Hall');
    }

    public function showseats(){
        return $this->hasMany('App\ShowSeat');
    }
}
