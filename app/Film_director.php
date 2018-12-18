<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film_director extends Model {
    use Notifiable;

    protected $fillable = [
        'firstname', 'lastname', 'picture', 'born', 'death',
    ];

    protected $table = 'film_directors';
}
