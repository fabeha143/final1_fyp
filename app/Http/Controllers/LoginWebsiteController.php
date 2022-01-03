<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginWebsiteController extends Controller
{
    public function showRegister(){
        return view('website/register');
    }
    public function loginWeb(){

        return view('website/loginweb');
    }
    public function saveRegister(Request $request)
    {
        //validate request 
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'min:8|max:14|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8|max:14|',
            'phone_number'=>'required|numeric',
        ]);
        //insert data
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number'=>$request->phone_number,
        ]);
        return back()->with('success','User account info has been registered');

    }
    public function checkUser(Request $request)
    {
        //validate request 
        $request->validate([
            'email'=>'required|email|',
            'password'=>'required|min:8|max:14',
        ]);

        $patientfirst = User::where('email','=',$request->email)->first();
        
        if(!$patientfirst){
            return back()->with('fail','We do not recognize you!!');
        }
        else{

            if(Hash::check($request->password, $patientfirst->password)){
               $request->session()->put('LoggedUserweb',$patientfirst->id);
               return redirect('/home');
            }
            else{
                return back()->with('fail','Incorrect Password');
            }
        }
        
    }
    public function logoutweb()
    {
        if(session()->has('LoggedUserweb')){
            session()->pull('LoggedUserweb');
            return redirect()->back();
        }

    }
}
