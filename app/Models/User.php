<?php

namespace App\Models;


use App\Base\Model;

class User extends Model
{
    protected $table = "users";
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
