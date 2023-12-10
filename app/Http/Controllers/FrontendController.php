<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

        Message::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

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
