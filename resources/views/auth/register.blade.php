<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Register</title>

    @vite(['resources/css/admin.css'])
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="auth-header">
            <h1>Create Account</h1>
            <p>Join us and get started with your journey</p>
        </div>

        @if ($errors->any())
            <div class="auth-status-message error">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        {{-- Note: Register route might not exist in your routes --}}
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="auth-form-group">
                <label for="name">Full Name</label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="name"
                    class="{{ $errors->has('name') ? 'error' : '' }}"
                    placeholder="John Doe"
                >
                @error('name')
                    <span class="auth-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="auth-form-group">
                <label for="email">Email Address</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="username"
                    class="{{ $errors->has('email') ? 'error' : '' }}"
                    placeholder="your@email.com"
                >
                @error('email')
                    <span class="auth-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="auth-form-group">
                <label for="password">Password</label>
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
                <label for="password_confirmation">Confirm Password</label>
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

            <button type="submit" class="auth-btn">Create Account</button>

            <div class="auth-footer">
                <a href="{{ route('admin.login') }}">Already have an account? Sign in</a>
            </div>
        </form>
    </div>
</body>
</html>
