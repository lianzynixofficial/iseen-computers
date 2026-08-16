<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Confirm Password</title>

    @vite(['resources/css/admin.css'])
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="auth-header">
            <h1>Confirm Password</h1>
            <p class="auth-subtitle">
                This is a secure area. Please confirm your password before continuing.
            </p>
        </div>

        @if ($errors->any())
            <div class="auth-status-message error">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

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

            <button type="submit" class="auth-btn">Confirm</button>
        </form>
    </div>
</body>
</html>
