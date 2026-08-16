<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the admin login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming admin authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        if ($request->user()->role !== 'admin') {
            Auth::logout();

            throw ValidationException::withMessages([
                'email' => 'These credentials are not authorized for admin access.',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(
            route('admin.dashboard', absolute: false)
        );
    }

    /**
     * Destroy the authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
