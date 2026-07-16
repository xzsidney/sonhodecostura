<x-guest-layout>
    <div class="text-center mb-4">
        <h3 class="font-script fs-1 text-slate" style="color: #6C5B52;">Bem-vindo(a)</h3>
        <p class="auth-label mt-2">Faça login para acessar o sistema</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 alert alert-success" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="auth-label">E-mail</label>
            <input id="email" class="form-control auth-input @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="exemplo@email.com" required autofocus autocomplete="username">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3 position-relative">
            <label for="password" class="auth-label">Senha</label>
            <div class="input-group">
                <input id="password" class="form-control auth-input @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
                <span class="input-group-text bg-transparent border-0 position-absolute end-0 top-50 translate-middle-y z-3 me-2" style="cursor: pointer;" onclick="togglePassword('password')">
                    <i class="fas fa-eye text-muted"></i>
                </span>
            </div>
            @error('password')
                <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember" style="accent-color: #D3A79E;">
                <label for="remember_me" class="form-check-label text-muted small">Lembrar-me</label>
            </div>
            
            @if (Route::has('password.request'))
                <a class="auth-footer-link small" href="{{ route('password.request') }}">
                    Esqueceu sua senha?
                </a>
            @endif
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="auth-btn">
                Entrar
            </button>
        </div>

        <div class="mt-4 text-center">
            <a href="{{ route('register') }}" class="auth-footer-link">
                Ainda não tem conta? <span>Cadastre-se</span>
            </a>
        </div>
    </form>
    
    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = input.nextElementSibling.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</x-guest-layout>
