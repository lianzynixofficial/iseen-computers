<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Admin Login</title>

    @vite(['resources/css/admin.css'])
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="auth-header">
            <h1>Admin Login</h1>
            <p>Enter your credentials to access the dashboard</p>
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

        <form method="POST" action="{{ route('admin.login.store') }}">
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
                    autocomplete="username"
                    class="{{ $errors->has('email') ? 'error' : '' }}"
                    placeholder="admin@example.com"
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
                    autocomplete="current-password"
                    class="{{ $errors->has('password') ? 'error' : '' }}"
                    placeholder="Enter your password"
                >
                @error('password')
                    <span class="auth-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="auth-remember">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">Remember me</label>
            </div>

            <button type="submit" class="auth-btn">Log in</button>

            <div class="auth-footer">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                @endif
            </div>
        </form>
    </div>
</body>
</html>
