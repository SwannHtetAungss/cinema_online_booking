<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Show extends Model
{
    use SoftDeletes;

    protected $fillable = ['show_date', 'show_time', 'Hall id', 'Movie id', 'discount'];
}
