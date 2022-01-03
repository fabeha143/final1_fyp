<?php

namespace App\Http\Controllers;
use App\Models\employee_info;
use App\Models\patient;
use App\Models\doctor;
use App\Models\employee;
use App\Models\inpatient_prescription;
use App\Models\appointments;
use Illuminate\Http\Request;
use DB;

class adminDashController extends Controller
{
    public function index(){

        
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
        $appointments = appointments::all();
        return view('AdminPanel/index',compact('patient','doctor','employee','appointments','datas'));
    }
}
