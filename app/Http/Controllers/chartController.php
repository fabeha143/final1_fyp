<?php

namespace App\Http\Controllers;
use App\Models\visitors;
use App\Models\patient;
use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;

class chartController extends Controller
{
    public function chartjs(){
      $patients = patient::select(DB::raw("COUNT(*) as count"))->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('count');
      
      $months = patient::select(DB::raw("Month(created_at) as month"))->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('month');

      $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
      foreach($months as $index => $month){
         $datas[$month] = $patients[$index];
      }
      return view('AdminPanel/index',compact('datas'));
    }  
}
