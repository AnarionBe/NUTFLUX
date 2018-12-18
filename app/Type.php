<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {
    use Notifiable;

    protected $fillable = [
        'name',
    ];

    protected $table = 'types';
}
