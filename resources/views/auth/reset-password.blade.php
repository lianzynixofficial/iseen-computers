<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Reset Password</title>

    @vite(['resources/css/admin.css'])
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="auth-header">
            <h1>Reset Password</h1>
            <p>Enter your new password below</p>
        </div>

        @if ($errors->any())
            <div class="auth-status-message error">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="auth-form-group">
                <label for="email">Email Address</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email', $request->email) }}"
                    required
                    autofocus
                    autocomplete="username"
                    class="{{ $errors->has('email') ? 'error' : '' }}"
                    placeholder="your@email.com"
                >
                @error('email')
                    <span class="auth-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="auth-form-group">
                <label for="password">New Password</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    class="{{ $errors->has('password') ? 'error' : '' }}"
                    placeholder="Min 8 characters"
                >
                @error('password')
                    <span class="auth-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="auth-form-group">
                <label for="password_confirmation">Confirm New Password</label>
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    class="{{ $errors->has('password_confirmation') ? 'error' : '' }}"
                    placeholder="Confirm your password"
                >
                @error('password_confirmation')
                    <span class="auth-error-message">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="auth-btn">Reset Password</button>

            <div class="auth-footer">
                <a href="{{ route('admin.login') }}">← Back to login</a>
            </div>
        </form>
    </div>
</body>
</html>
