<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;
    protected $fillable=['name','photo','actor','actress','director','description','duration','release_date','genre'];

    public function shows(){
        return $this->hasMany('App\Show');
    }
}
