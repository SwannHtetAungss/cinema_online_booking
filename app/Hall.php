<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hall extends Model
{
    use SoftDeletes;
    protected $fillable=['name','total_seat'];

    public function seats(){
        return $this->hasMany('App\Seat');
    }
}
