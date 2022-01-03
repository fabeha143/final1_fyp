<?php

namespace App\Http\Controllers;
use App\Models\employee_info;
use Illuminate\Http\Request;

class masterController extends Controller
{
    public function index()
    {
        $data = ['LoggedUserInfo'=>employee_info::where('id','=',session('LoggedUser'))->first()];
        return view('layouts/master',$data);
    }
}
