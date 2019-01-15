<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model {
    protected $fillable = [
        'title', 'link', 'poster', 'filmdirector', 'release', 'synopsis',
    ];

    protected $table = 'films';
}