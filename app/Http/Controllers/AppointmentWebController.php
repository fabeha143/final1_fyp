<?php

namespace App\Http\Controllers;
use App\Models\departments;
use App\Models\doctor;
use App\Models\appointments;
use Illuminate\Http\Request;

class AppointmentWebController extends Controller
{
    public function index()
    { 
        $items = departments::select('id','dep_name')->get();
        $department = array();
        foreach( $items as $item )
        {
            $department[$item->id] = $item->dep_name;
        }
        
        $doctors = doctor::select('id','doc_fname')->get();
        $doctorsdata = array();
        foreach( $doctors as $doctor )
        {
            $doctorsdata[$doctor->id] = $doctor->doc_fname;
        }

        return view('website/appointmentweb',compact('department','doctorsdata'));
    }
    public function create(Request $request){
        $request->validate([
            'patient_name'=>'required',
            'patient_dob' =>'required',
            'appointment_date' => 'required',
            'appointment_time' =>'required',
            'department' => 'required',
            'doctor_name' => 'required',
            'phone_number'=>'required',
        ]);
        appointments::create([
            'patient_name' => $request->patient_name,
            'patient_dob' => $request->patient_dob,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'department' => $request->department,
            'doctor_name' => $request->doctor_name,
            'phone_number'=>$request->phone_number,
        ]);
        return redirect()->back()->with('success','Your Appointment is in Queue. We will contact you soon');
    }
}
