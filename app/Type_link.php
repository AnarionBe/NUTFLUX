<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_link extends Model {
    protected $fillable = [
        'type', 'film',
    ];

    protected $table = 'type_links';
}
