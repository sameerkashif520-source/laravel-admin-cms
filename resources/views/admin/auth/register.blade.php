<x-admin.layoutAuth>
    <div class="auth-header">
        <h1>Create Admin Account</h1>
        <p>Register to access the admin dashboard</p>
    </div>

    <form method="POST" action="{{ route('admin.register.post') }}" novalidate>
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
                placeholder="Min 6 characters" autocomplete="new-password">
            @error('password')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation"
                class="form-input @error('password_confirmation') error @enderror" placeholder="Re-enter password"
                autocomplete="new-password">
            @error('password_confirmation')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn-submit">
            Create Account
        </button>
    </form>

    <div class="auth-footer">
        <p>Already have an account? <a href="{{ route('admin.login') }}">Login here</a></p>
    </div>
</x-admin.layoutAuth>