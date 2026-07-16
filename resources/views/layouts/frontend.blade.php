<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonho de Costura - @yield('title', 'Costura Criativa')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Great+Vibes&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand font-script text-slate fs-2" href="{{ url('/') }}">Sonho de Costura</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#colecao') }}">Nossa Coleção</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dashboard') }}">Painel</a>
                    </li>
                    @endguest
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary-custom rounded-pill px-4" href="https://wa.me/5511985497329" target="_blank">Faça seu Orçamento</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate text-white py-5 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <h3 class="font-script fs-1 text-peach">Sonho de Costura</h3>
                    <p class="mb-0">Costurando sonhos e transformando em felicidade. Peças artesanais e exclusivas.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-1"><strong>Atendimento:</strong></p>
                    <p class="mb-1">contato@sonhodecostura.com.br</p>
                    <p>WhatsApp: (11) 98549-7329</p>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.2);">
            <div class="text-center">
                <p class="small mb-0">&copy; {{ date('Y') }} Sonho de Costura. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
