<x-guest-layout>
    <div class="text-center mb-4">
        <h3 class="fw-bold" style="color: #4A5568; font-size: 1.75rem;">Bem-vindo(a) de<br>volta</h3>
        <p class="text-muted mt-2 small">Faça login para acessar o sistema</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 alert alert-success" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="auth-label">E-mail</label>
            <div class="input-group">
                <span class="input-group-text bg-transparent border-end-0 text-muted ps-3" style="border-radius: 12px 0 0 12px; border-color: #E5E0DA;">
                    <i class="far fa-envelope"></i>
                </span>
                <input id="email" class="form-control auth-input border-start-0 ps-1 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="exemplo@email.com" required autofocus autocomplete="username" style="border-radius: 0 12px 12px 0;">
            </div>
            @error('email')
                <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <label for="password" class="auth-label mb-0">Senha</label>
                @if (Route::has('password.request'))
                    <a class="auth-footer-link" href="{{ route('password.request') }}" style="font-size: 0.75rem;">
                        <span>Esqueceu sua senha?</span>
                    </a>
                @endif
            </div>
            <div class="input-group">
                <span class="input-group-text bg-transparent border-end-0 text-muted ps-3" style="border-radius: 12px 0 0 12px; border-color: #E5E0DA;">
                    <i class="fas fa-lock"></i>
                </span>
                <input id="password" class="form-control auth-input border-start-0 ps-1 @error('password') is-invalid @enderror" type="password" name="password" placeholder="••••••••" required autocomplete="current-password" style="border-radius: 0 12px 12px 0;">
            </div>
            @error('password')
                <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="mb-4 mt-3 form-check">
            <input id="remember_me" type="checkbox" class="form-check-input" name="remember" style="accent-color: #D3A79E;">
            <label for="remember_me" class="form-check-label text-muted small ms-1">Lembrar-me</label>
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="auth-btn d-flex justify-content-center align-items-center gap-2">
                Entrar <i class="fas fa-arrow-right"></i>
            </button>
        </div>

        <div class="mt-4 pt-3 text-center border-top border-dashed" style="border-top-style: dashed !important; border-top-color: #E5E0DA !important;">
            <p class="auth-footer-link mt-3 mb-0">
                Ainda não tem conta? <a href="{{ route('register') }}" class="text-decoration-none"><span>Cadastre-se</span></a>
            </p>
        </div>
    </form>
</x-guest-layout>
