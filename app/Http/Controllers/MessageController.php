<?php

namespace App\Http\Controllers;

use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $messages = Message::paginate(20);
        return view('dashboard.messages.index', compact('messages'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        $message = Message::find($id);
        $message->update(['status' => 1]);
        return view('dashboard.messages.show', compact('message'));
    }

    public function delete($id)
    {
        $message = Message::find($id);
        if($message){
            $message->delete();
        }
        return redirect()->route('messages.index')->with('success', 'Successfully Deleted!');
    }
}
