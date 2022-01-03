<?php

namespace App\Http\Controllers;
use App\Models\dose_schedule;
use Illuminate\Http\Request;

class attendantdashController extends Controller
{
    public function index()
    {
        $dose_schedule = dose_schedule::all();
        
        return view('Attendant Dashboard/attendantdash',compact('dose_schedule'));
    }
    public function store(Request $request ,$id=null)
    {
       dose_schedule::where('id',$id)->update([
            'dose_confirm' => 1,
       ]);
       dose_schedule::where('id',$id)->delete();
       return redirect()->back();
    }
}
