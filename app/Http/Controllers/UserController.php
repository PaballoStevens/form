<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
      return view("form");
    }

    public function successful() {
      return view("thank-you");
    }

    public function create(Request $request) {
        $request->validate([
            "name"=> 'required|string|max:255',
            "email"=> 'required|email|unique:users',
            "message"=>'nullable|string',
        ]);

        Message::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "message"=> $request->message,
        ]);

        return redirect('/thank-you');
      
    }
}
