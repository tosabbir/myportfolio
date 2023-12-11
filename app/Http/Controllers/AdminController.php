<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    //all messages
    public function allMessages(){
        $data = Message::latest()->get();
        return view('admin.all_messages', compact('data'));
    }

    //details messages
    public function detailsMessages($id){
        $data = Message::find($id);
        return view('admin.details_messages', compact('data'));
    }

    //replay messages
    public function replayMessages($id){
        $data = Message::find($id);
        return view('admin.replay_messages', compact('data'));
    }

      // send messages mail
      public function sendMail(Request $request, $id){

        $request->validate([
            'name'=>'required|string|max:20',
            'email'=>'required|email|max:30',
            'subject'=>'required|string|max:100',
            'message'=>'required|string|max:255',
        ]);


        // notification mail to admin here
        // $user_message = Message::find($id);

        $user_name = $request->name;
        $user_email = $request->email;
        $user_subject = $request->subject;
        $user_message = $request->message;

        Mail::to($user_email)->send(new ContactMail($user_name,$user_email,$user_subject, $user_message));

        Message::find($id)->update([
            'status' => 'replayed'
        ]);

        $name = $request->name;
        return back()->with('success', 'Message Send To'.$name.'Successfully');
    }

}
