<x-guest-layout>
    <div class="text-center mb-4">
        <h4 class="fw-bold text-slate">Crie sua conta</h4>
        <p class="text-muted small">Faça parte do Sonho de Costura</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label fw-medium text-dark">Nome Completo</label>
            <input id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label fw-medium text-dark">E-mail</label>
            <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label fw-medium text-dark">Senha</label>
            <input id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="form-label fw-medium text-dark">Confirmar Senha</label>
            <input id="password_confirmation" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" required autocomplete="new-password">
            @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary-custom btn-lg rounded-pill">
                Cadastrar
            </button>
        </div>

        <div class="mt-4 text-center">
            <p class="small text-muted">
                Já tem uma conta? <a href="{{ route('login') }}" class="text-peach fw-medium text-decoration-none">Faça login</a>
            </p>
        </div>
    </form>
</x-guest-layout>
