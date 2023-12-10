<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

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
}
