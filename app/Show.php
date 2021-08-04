<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Show extends Model
{
    use SoftDeletes;

    protected $fillable = ['show_date', 'show_time', 'Hall_id', 'Movie_id'];

    public function hall(){
        return $this->belongsTo('App\Hall');
    }
 
   public function movie(){
        return $this->belongsTo('App\Movie');
    }
   


}
