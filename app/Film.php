<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model {
    use Notifiable;

    protected $fillable = [
        'title', 'link', 'poster', 'film-director', 'release', 'synopsis',
    ];

    protected $table = 'films';
}
