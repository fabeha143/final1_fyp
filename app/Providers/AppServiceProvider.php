<?php

namespace App\Providers;
use App\Models\employee_info;
use App\Models\User;
use App\Models\patient;
use App\Models\appointments;
use App\Models\doctor;
use App\Models\app_prescription;
use App\Models\inpatient_prescription;
use App\Models\employee_role;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view){
            $view->with('data',employee_info::where('id',session('LoggedUser'))->first());
            $view->with('logeduser',User::where('id',session('LoggedUserweb'))->first());
            $view->with('LoggedUserInfo',employee_info::where('id','=',session('LoggedUser'))->first());
            $view->with('patientTotal',patient::all()->count());
            $view->with('appointmentscount',appointments::all()->count());
            $view->with('Doctor',doctor::all()->count());
            $view->with('Doctorall',doctor::all());
            $view->with('appointmentsall',appointments::where('status','=','pending')->count());
            $view->with('patientTotal',patient::all()->count());
            $view->with('appoint_count',appointments::where('status','=','Approved')->count());
            $view->with('active_patient',patient::where('status','=','Active')->count());
            $view->with('prescription',app_prescription::all()->count());
            $view->with('inpatient_prescription_list',inpatient_prescription::all()->count());
            $view->with('patientAll',patient::all());
        });
    }
}
