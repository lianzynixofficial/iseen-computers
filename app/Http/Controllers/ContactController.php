<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:30'],
            'subject' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string'],
        ]);

        ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'subject' => $validated['subject'] ?? null,
            'message' => $validated['message'],
            'status' => 'new',
        ]);

        return back()->with(
            'success',
            'Thank you for contacting with I Seen Computer. We will get back to you soon.'
        );
    }
}
