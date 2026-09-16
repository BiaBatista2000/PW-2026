<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();

        return view('chat', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $message = Message::create([
            'user' => $request->user,
            'message' => $request->message,
        ]);

        MessageSent::dispatch($message);

        return response()->json($message);
    }
}