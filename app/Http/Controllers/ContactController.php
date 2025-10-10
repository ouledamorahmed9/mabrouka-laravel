<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|regex:/^[\+\s\d\(\)-]*$/|min:8|max:20', // MODIFIÉ
            'message' => 'required|string|min:10',
        ]);

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone, // AJOUTÉ
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Votre message a bien été envoyé !');
    }
}