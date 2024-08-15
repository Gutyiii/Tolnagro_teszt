<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmailController extends Controller
{
    public function index()
    {
        $emails = Email::all();
        return view('emails.index', compact('emails'));
    }

    public function create()
    {
        return view('emails.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'body' => 'required|string', 
        ]);
    
        Email::create([
            'subject' => $request->input('subject'),
            'body' => $request->input('body'),
        ]);
    
        return redirect()->route('emails.index')->with('success', 'Email created successfully.');
    }

    public function destroy($id)
    {
        $email = Email::findOrFail($id);
        $email->delete();

        return redirect()->route('emails.index')->with('success', 'Email deleted successfully.');
    }
}

