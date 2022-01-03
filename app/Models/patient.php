<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $fillable = ['pat_fname','pat_lname','pat_phone','pat_admission_date','pat_gender','pat_category','pat_email','pat_address','pat_date_of_birth','doctor','department','status'];
    public function departments()
    {
        return $this->belongsTo(departments::class, 'department', 'id');
    }
    public function doctors()
    {
        return $this->belongsTo(doctor::class, 'doctor', 'id');
    }
}

