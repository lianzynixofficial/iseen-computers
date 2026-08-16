<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Forgot Password</title>

    @vite(['resources/css/admin.css'])
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="auth-header">
            <h1>Forgot Password</h1>
            <p class="auth-subtitle">
                No problem. Enter your email address and we'll send you a link to reset your password.
            </p>
        </div>

        @if (session('status'))
            <div class="auth-status-message success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="auth-status-message error">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="auth-form-group">
                <label for="email">Email Address</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    class="{{ $errors->has('email') ? 'error' : '' }}"
                    placeholder="your@email.com"
                >
                @error('email')
                    <span class="auth-error-message">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="auth-btn">Send Reset Link</button>

            <div class="auth-footer">
                <a href="{{ route('admin.login') }}">← Back to login</a>
            </div>
        </form>
    </div>
</body>
</html>
