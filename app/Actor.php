<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model {
    protected $fillable = [
        'firstname', 'lastname', 'born', 'death',
    ];

    public function films() {
        return $this->belongsToMany('App\Film', 'participations', 'actor', 'film');
    }

    protected $table = 'actors';
}
