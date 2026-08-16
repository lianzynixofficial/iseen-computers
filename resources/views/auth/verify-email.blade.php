<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Verify Email</title>

    @vite(['resources/css/admin.css'])
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="auth-header">
            <h1>Verify Your Email</h1>
            <p class="auth-subtitle">
                Thanks for signing up! Before getting started, please verify your email address.
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="auth-status-message success">
                A new verification link has been sent to your email address.
            </div>
        @endif

        <div class="auth-info-box">
            <p>
                <strong>Didn't receive the email?</strong><br>
                We'll gladly send you another verification link.
            </p>
        </div>

        <div class="auth-actions">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="auth-btn" style="width: auto; padding: 12px 24px;">
                    Resend Verification Email
                </button>
            </form>

            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="auth-btn" style="width: auto; padding: 12px 24px; background: #e53e3e;">
                    Log Out
                </button>
            </form>
        </div>
    </div>
</body>
</html>
