<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inpatient_prescription extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['pres_disease','weeks','from_date' , 'till_date','dosage','medicines','description', 'patient_cat','patient_id','doctor_id','department_id'];
    public function medicine()
    {
        return $this->belongsTo(medicines::class, 'medicines', 'id');
    }
    public function department()
    {
        return $this->belongsTo(departments::class, 'department_id', 'id');
    }
    public function doctors()
    {
        return $this->belongsTo(doctor::class, 'doctor_id', 'id');
    }
    public function patients()
    {
        return $this->belongsTo(patient::class, 'patient_id', 'id');
    }
}
