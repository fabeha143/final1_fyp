<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mail extends Model
{
    use HasFactory;
    protected $fillable = ['subject','message','from','To'];

    public function user()
    {
        return $this->belongsTo(User::class, 'from', 'id');
    }
}
