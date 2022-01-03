<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospitalratings extends Model
{
    use HasFactory;
    protected $fillable = ['ratings','month'];
}
