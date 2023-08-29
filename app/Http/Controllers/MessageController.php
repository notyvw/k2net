<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {   $messages = Message::all();
        return view('admin.message.index', compact('messages'));
    }

    public function store(Request $request)
    {
        Message::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'email' => $request->input('email'),
            'letter' => $request->input('letter'),
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim');;
    }
}
