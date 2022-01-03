<?php

namespace App\Http\Controllers;
use App\Models\inpatient_prescription;
use App\Models\employee;
use App\Models\dose_schedule;
use Illuminate\Http\Request;

class scheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inpatientDetail = inpatient_prescription::all();
        
        return view('AdminPanel/Dose Scheduling/schedule_create',compact('inpatientDetail'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $allfields = inpatient_prescription::where('id',$id)->first();
        $attendant = employee::select('id','emp_fname')->where('role','Attendant')->get();
        
        $name = array();

        foreach($attendant as $data){
            $name[$data->id] = $data->emp_fname;
        }
        return view('AdminPanel/Dose Scheduling/create_sched',compact('allfields','name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id=null)
    {
        $request->validate([
            'attendant_name' => 'required',
            
        ],[],[
            'attendant_name' => 'attendant name',
           
        ]);

        dose_schedule::create([
            'pres_disease' => $request->pres_disease,
            'medicines' => $request->medicines,
            'weeks' => $request->weeks,
            'from_date' => $request->from_date,
            'till_date' => $request->till_date,
            'dosage' => $request->dosage,
            'patient_cat' => $request->patient_cat,
            'description' => $request->description,
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'department_id' => $request->department_id,
            'attendant_name' => $request->attendant_name,
            'prescription_id' => $request->id,
        ]);
        return back()->with('success','Attendant Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
