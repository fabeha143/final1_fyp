<?php

namespace App\Http\Controllers;

use App\Models\app_prescription;
use Illuminate\Support\Facades\Auth;
use App\Models\patient;
use App\Models\doctor;
use App\Models\employee;
use App\Models\inpatient_prescription;
use App\Models\appointments;
use Illuminate\Http\Request;
use DB;
use App\Models\dose_schedule;
use Carbon\Carbon;


class DashboardCOntroller extends Controller
{
    public function index()
    {
        //chart work//
        $patients = patient::select(DB::raw("COUNT(*) as count"))->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('count');
      
        $months = patient::select(DB::raw("Month(created_at) as month"))->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('month');
  
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month){
           $datas[$month] = $patients[$index];
        }

        //chart work//





        $patient = patient::all()->count();
        $doctor = doctor::all()->count();
        $employee = employee::all()->count();
        $appointmentsall = appointments::all();
        $appointments = appointments::where('status','=','pending')->count();

        $appointmentsapproved = appointments::where('status','=','Approved')->count();
        $PatientActive = patient::where('status','=','Active')->count();
        $appointmentprecription = app_prescription::all()->count();
        $inpatient_prescription_list = inpatient_prescription::all()->count();
        $patientAll = patient::all();


        $dose_schedule = dose_schedule::all();

        if(Auth::user()->hasRole('admin')){

            return view('AdminPanel/index',compact('patient','doctor','employee','appointments','appointmentsall','datas'));
        }
        elseif(Auth::user()->hasRole('doctor')){

            return view('DoctorDashboard/doctordash',compact('appointmentsapproved','PatientActive','appointmentprecription','inpatient_prescription_list','patientAll'));
        }
        elseif(Auth::user()->hasRole('attendant')){
            
            return view('Attendant Dashboard/dashboard');
        }
    }
}
