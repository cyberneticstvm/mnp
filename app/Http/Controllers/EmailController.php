<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function contactemail(Request $request){
        $this->validate($request, [
            'email' => 'required|email:filter',
            'name' => 'required',
            'mobile' => 'required',
            'message' => 'required',
        ]);
        Mail::send('email.contact', ['sender' => $request], function($message){
            $message->to('sales@mnprental.com');
            $message->subject('MNP Rental - New message has been received');
        });        
        return redirect()->route('message')->with('success','Your message has been sent successfully.');
    }
}
