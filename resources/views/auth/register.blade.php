<x-guest-layout>
    <div class="text-center mb-4">
        <h3 class="font-script fs-1 text-slate" style="color: #6C5B52;">Crie sua conta</h3>
        <p class="auth-label mt-2">Faça parte do Sonho de Costura</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="auth-label">Nome Completo</label>
            <input id="name" class="form-control auth-input @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Seu nome completo" required autofocus autocomplete="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="auth-label">E-mail</label>
            <input id="email" class="form-control auth-input @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="exemplo@email.com" required autocomplete="username">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3 position-relative">
            <label for="password" class="auth-label">Senha</label>
            <div class="input-group">
                <input id="password" class="form-control auth-input @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">
                <span class="input-group-text bg-transparent border-0 position-absolute end-0 top-50 translate-middle-y z-3 me-2" style="cursor: pointer;" onclick="togglePassword('password')">
                    <i class="fas fa-eye text-muted"></i>
                </span>
            </div>
            @error('password')
                <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4 position-relative">
            <label for="password_confirmation" class="auth-label">Confirmar Senha</label>
            <div class="input-group">
                <input id="password_confirmation" class="form-control auth-input @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" required autocomplete="new-password">
                <span class="input-group-text bg-transparent border-0 position-absolute end-0 top-50 translate-middle-y z-3 me-2" style="cursor: pointer;" onclick="togglePassword('password_confirmation')">
                    <i class="fas fa-eye text-muted"></i>
                </span>
            </div>
            @error('password_confirmation')
                <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="auth-btn">
                Cadastrar
            </button>
        </div>

        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="auth-footer-link">
                Já tem uma conta? <span>Faça login</span>
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
