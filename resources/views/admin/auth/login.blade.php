<x-admin.layoutAuth>
    <div class="auth-header">
        <h1>Admin Login</h1>
        <p>Enter your credentials to access the dashboard</p>
    </div>

    <form method="POST" action="{{ route('admin.login.post') }}" novalidate>
        @csrf

        <div class="form-group">
            <label class="form-label" for="email">Email Address</label>
            <input type="email" id="email" name="email" class="form-input @error('email') error @enderror"
                value="{{ old('email') }}" placeholder="admin@example.com" autocomplete="email">
            @error('email')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" name="password" class="form-input @error('password') error @enderror"
                placeholder="Enter your password" autocomplete="current-password">
            @error('password')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="remember-me">
            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Remember me on this device</label>
        </div>

        <button type="submit" class="btn-submit">
            Sign In
        </button>
    </form>

    <div class="auth-footer">
        <p>Don't have an account? <a href="{{ route('admin.register') }}">Register here</a></p>
    </div>
</x-admin.layoutAuth>