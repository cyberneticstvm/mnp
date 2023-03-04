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

    public function callback(Request $request){
        $this->validate($request, [
            'mobile' => 'required',
        ]);
        Mail::send('email.callback', ['sender' => $request], function($message){
            $message->to('sales@mnprental.com');
            $message->subject('MNP Rental - New Callback request has been received');
        });        
        echo "Thank you! Your request is submitted successfully.";
    }

    public function sitemap(){
        return response()->view('sitemap')->header('Content-Type', 'text/xml');
    }

    public function robots(){
        return response()->view('robots')->header('Content-Type', 'text/plain');
    }
}
