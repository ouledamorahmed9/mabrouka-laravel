<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the messages.
     * Marks all unread messages as read upon viewing.
     */
    public function index(): View
    {
        // === START OF MODIFICATION ===
        // Step 1: Find all unread messages and update their status to 'read' (true).
        ContactMessage::where('is_read', false)->update(['is_read' => true]);
        // === END OF MODIFICATION ===

        // Step 2: Fetch all messages (which are now all marked as read) to display them.
        $messages = ContactMessage::latest()->paginate(15);
        
        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Remove the specified message from storage.
     */
    public function destroy(ContactMessage $message)
    {
        $message->delete();
        
        return redirect()->route('admin.messages.index')->with('success', 'Message deleted successfully.');
    }
}

