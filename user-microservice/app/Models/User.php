<?php

namespace App\Models;

class User extends BaseModel
{
    protected $fillable = [
        'last_name',
        'first_name',
        'email',
    ];   

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}