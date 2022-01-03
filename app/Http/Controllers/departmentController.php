<?php

namespace App\Http\Controllers;

use App\Models\departments;
use Illuminate\Http\Request;


class departmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = departments::all();
        return view('AdminPanel/department/department',['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('AdminPanel/department/add_department');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dep_name' => 'required',
            'dep_description' => 'required',
        ],[],[
            'dep_name'=>'department name',
            'dep_description' => 'department description',
        ]);

        departments::create([
            'dep_name' => $request->dep_name,
            'dep_description' => $request->dep_description,
        ]);
        return redirect(route('department.index'));
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
        $departedit  = departments::where('id' , $id)->first();
        return view('AdminPanel/department/edit_department',['departedit' => $departedit] );
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
        $request->validate([
            'dep_name' => 'required',
            'dep_description' => 'required',
        ],[],[
            'dep_name'=>'department name',
            'dep_description' => 'department description',
        ]);
        departments::where('id' , $id)->update([

            'dep_name' => $request->dep_name,
            'dep_description' => $request->dep_description,
        ]);
        return redirect(route('department.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        departments::where('id' , $id)->delete();
        return redirect(route('department.index'));
    }
}
