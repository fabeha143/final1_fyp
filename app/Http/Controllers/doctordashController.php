<?php

namespace App\Http\Controllers;
use App\Models\appointments;
use App\Models\patient;


use Illuminate\Http\Request;

class doctordashController extends Controller
{
    public function index1()
    {
        return view('DoctorDashboard/doctordash');
    }
    public function doc_appointment()
    {
        $data = appointments::where('status', 'Approved')->get();
        return view('DoctorDashboard/doc_appointment',['appoint_data' => $data]);
    }
    public function inpatientlist()
    {
        $patientdata = patient::where('status', 'Active')->get();
        return view('DoctorDashboard/InPatientlist',['patientdata' => $patientdata]);
    }
   
}
    
