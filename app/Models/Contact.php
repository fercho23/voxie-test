<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    public $fillable = [
        'name', 'email'
    ];

    public $timestamps = false;
}