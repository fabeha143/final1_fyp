<?php

namespace App\Http\Controllers;
use App\Mail\websiteMail;
use App\Mail\testMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailCOntroller extends Controller
{
    public function composeMail(){

       return view('Mail/composemail');
     
 }
    public function index(Request $request){

       $details = [
           'subject' => $request->subject,
           'body' => $request->message,

       ];
       Mail::to($request->to)->send(new testMail($details));
       return redirect()->back( );
    
    }
    public function webmail(Request $request){

        $request->validate([
            'subject'=>'required',
            'name'=>'required',
            'body'=>'required',
        ]);
        $detailsweb = [
            'subject' => $request->subject,
            'name' => $request->name,
            'body' => $request->message,
 
        ];
        Mail::to('fabehanaqvi7@gmail.com')->send(new websiteMail($detailsweb));
        return redirect()->back( )->with('success','Message Sent');
     
     }

}
