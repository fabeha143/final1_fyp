<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee_info;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function login()
    {
        return view('AdminPanel.login');
    }
    public function save(Request $request)
    {
        //validate request 
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:employee_infos',
            'password'=>'min:8|max:14|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation'=>'min:8|max:14'
        ]);
        //insert data
        employee_info::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id
        ]);
        return back()->with('success','Employee account info has been registered');

    }
    public function check(Request $request)
    {
        //validate request 
        $request->validate([
            'email'=>'required|email|',
            'password'=>'required|min:8|max:14',
        ]);

        $userinfo = employee_info::where('email','=',$request->email)->first();
        
        if(!$userinfo){
            return back()->with('fail','We do not recognize you!!');
        }
        else{

            if(Hash::check($request->password, $userinfo->password) and $userinfo->role_id == 'admin'){
               $request->session()->put('LoggedUser',$userinfo->id);
               return redirect(route('/admin/dashboard'));
            }
            elseif(Hash::check($request->password, $userinfo->password) and $userinfo->role_id == 'doctor'){
                $request->session()->put('LoggedUser',$userinfo->id);
                return view('DoctorDashboard/doctordash');
            }
            elseif(Hash::check($request->password, $userinfo->password) and $userinfo->role_id == 'attendant'){
                $request->session()->put('LoggedUser',$userinfo->id);
                return redirect(route('/attendant/dashboard'));
            }
            else{
                return back()->with('fail','Incorrect Password');
            }
        }
        
    }
    public function logout()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect(route('/login'));
        }
    }
    
   
}