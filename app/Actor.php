<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model {
    use Notifiable;

    protected $fillable = [
        'firstname', 'lastname', 'born', 'death',
    ];

    protected $table = 'actors';
}
