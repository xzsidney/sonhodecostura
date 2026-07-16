<x-guest-layout>
    <div class="text-center mb-4">
        <h4 class="fw-bold text-slate">Bem-vindo(a) de volta</h4>
        <p class="text-muted small">Faça login para acessar o sistema</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 alert alert-success" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label fw-medium text-dark">E-mail</label>
            <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label fw-medium text-dark">Senha</label>
            <input id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="mb-4 form-check">
            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
            <label for="remember_me" class="form-check-label text-muted">Lembrar-me</label>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary-custom btn-lg rounded-pill">
                Entrar
            </button>
        </div>

        <div class="mt-4 text-center">
            @if (Route::has('password.request'))
                <a class="text-decoration-none text-peach small" href="{{ route('password.request') }}">
                    Esqueceu sua senha?
                </a>
            @endif
            
            <p class="mt-3 small text-muted">
                Ainda não tem conta? <a href="{{ route('register') }}" class="text-peach fw-medium text-decoration-none">Cadastre-se</a>
            </p>
        </div>
    </form>
</x-guest-layout>
