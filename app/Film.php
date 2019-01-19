<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model {
    protected $fillable = [
        'title', 'link', 'poster', 'filmdirector', 'release', 'synopsis',
    ];

    public function actors() {
        return $this->belongsToMany('App\Actor', 'participations', 'film', 'actor');
    }

    protected $table = 'films';
}