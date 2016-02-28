<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_slider extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'short_desc', 'long_desc',
    ];
}