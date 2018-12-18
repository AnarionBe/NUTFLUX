<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model {
    use Notifiable;

    protected $fillable = [
        'film', 'user', 'date_view', 'favorite',
    ];

    protected $table = 'views';
}
