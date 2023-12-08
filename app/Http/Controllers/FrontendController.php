<?php

namespace App\Http\Controllers;

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
    }
}
