<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactMessageController extends Controller
{
    public function index(): View
    {
        $messages = ContactMessage::latest()
            ->paginate(10);

        return view('admin.messages.index', [
            'messages' => $messages,
        ]);
    }

    public function show(ContactMessage $contactMessage): View
    {
        if ($contactMessage->status === 'new') {
            $contactMessage->update([
                'status' => 'read',
            ]);
        }

        return view('admin.messages.show', compact('contactMessage'));
    }

    public function update(
        Request $request,
        ContactMessage $contactMessage
    ): RedirectResponse {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:new,read,responded,archived',
            ],
        ]);

        $contactMessage->update($validated);

        return redirect()
            ->route('admin.messages.show', $contactMessage)
            ->with('success', 'Message status updated successfully.');
    }

    public function destroy(
        ContactMessage $contactMessage
    ): RedirectResponse {
        $contactMessage->delete();

        return redirect()
            ->route('admin.messages.index')
            ->with('success', 'Message deleted successfully.');
    }
}
