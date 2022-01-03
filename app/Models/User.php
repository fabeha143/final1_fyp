<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'password',
    ];

    protected $hidden = [
            'password',
            'remember_token',
        ];
}
