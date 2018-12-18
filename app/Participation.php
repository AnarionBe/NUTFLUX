<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model {
    use Notifiable;

    protected $fillable = [
        'film', 'actor',
    ];

    protected $table = 'participations';
}
