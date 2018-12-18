<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    use Notifiable;

    protected $fillable = [
        'pseudo', 'firstname', 'lastname', 'account',
    ];

    protected $table = 'users';
}
