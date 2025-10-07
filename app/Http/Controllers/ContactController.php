<?php

namespace App\Http\Controllers; // <-- CORRECT NAMESPACE

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store a newly created contact message in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        return redirect()->route('contact')
                         ->with('success', 'Votre message a été envoyé avec succès ! Nous vous répondrons bientôt.');
    }
}

