<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    // cv download
    public function downloadCV(){
        $cv = public_path('frontend/file/cv-v1.pdf');
        return response()->download($cv);
    }

    // store messages
    public function storeMessage(Request $request){

        $request->validate([
            'name'=>'required|string|max:20',
            'email'=>'required|email|max:30',
            'phone'=>'required|max:20',
            'subject'=>'required|string|max:100',
            'message'=>'required|string|max:255',
        ]);

        // $id = Message::insertGetId

        Message::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);


        // notification mail to admin here
        // $user_message = Message::find($id);

        $user_name = $request->name;
        $user_email = $request->email;
        $user_subject = $request->subject;
        $user_message = $request->message;

        Mail::to('sabbir@climaxitsystem.com')->send(new ContactMail($user_name,$user_email,$user_subject, $user_message));

        $name = $request->name;
        return back()->with('success', 'Thank You '.$name.' For Contact With Us');
    }


    // store comment
    public function storeComment(Request $request){


        $request->validate([
            'name'=>'required|string|max:20',
            'email'=>'required|email|max:30',
            'phone'=>'required|max:20',
            'message'=>'required|string|max:255',
        ]);

        Message::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        $name = $request->name;
        return back()->with('success', 'Thank You '.$name.' For Contact With Us');
    }
}
