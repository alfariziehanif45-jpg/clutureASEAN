<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'capital',
        'description',
        'language',
        'flag',
        'latitude',
        'longitude',
    ];
}