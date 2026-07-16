<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sonho de Costura - @yield('title', 'Autenticação')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Great+Vibes&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <style>
        .auth-split-container {
            min-height: 100vh;
            display: flex;
            background-color: #FDFDFC;
        }
        
        .auth-image-side {
            flex: 1;
            background-image: url('{{ asset('images/hero_banner.png') }}');
            background-size: cover;
            background-position: center;
            position: relative;
            display: none;
        }
        
        @media (min-width: 992px) {
            .auth-image-side {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        }
        
        .auth-image-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: rgba(255, 250, 246, 0.85); /* Light peach overlay to match mockup */
            z-index: 1;
        }
        
        .auth-image-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 3rem;
            max-width: 500px;
        }
        
        .auth-form-side {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            background-color: #FAF8F5; /* Very soft warm background matching the mockup */
        }
        
        .auth-form-container {
            width: 100%;
            max-width: 420px;
            background: white;
            padding: 3rem 2.5rem;
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.03);
        }
        
        .auth-input {
            border: 1px solid #E5E0DA;
            border-radius: 12px;
            padding: 0.8rem 1rem;
            font-size: 0.95rem;
            background-color: #FCFBFA;
            color: #4A4A4A;
        }
        
        .auth-input:focus {
            border-color: #D3A79E;
            box-shadow: 0 0 0 0.25rem rgba(211, 167, 158, 0.2);
            background-color: white;
        }
        
        .auth-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #8C8C8C;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .auth-btn {
            background-color: #D3A79E;
            color: white;
            border-radius: 12px;
            padding: 0.8rem;
            font-weight: 600;
            border: none;
            transition: all 0.3s;
        }
        
        .auth-btn:hover {
            background-color: #c4968d;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(211, 167, 158, 0.4);
        }
        
        .auth-footer-link {
            color: #8C8C8C;
            font-size: 0.9rem;
            text-decoration: none;
        }
        
        .auth-footer-link span {
            color: #D3A79E;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg w-100 z-3 position-absolute" style="background-color: transparent;">
        <div class="container">
            <a class="navbar-brand font-script text-slate fs-2" href="{{ url('/') }}" style="text-shadow: 0 1px 3px rgba(255,255,255,0.8);">Sonho de Costura</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-3 bg-white bg-lg-transparent p-3 p-lg-0 rounded shadow-sm shadow-lg-none mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sobre') }}">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#colecao') }}">Nossa Coleção</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary-custom rounded-pill px-4" href="https://wa.me/5511985497329" target="_blank">Faça seu Orçamento</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="auth-split-container">
        
        <!-- Left Side: Image & Branding -->
        <div class="auth-image-side">
            <div class="auth-image-overlay"></div>
            <div class="auth-image-content">
                <div class="bg-white p-4 rounded-4 shadow-sm d-inline-block mb-4">
                    <img src="{{ asset('images/LOGO_FULLHD.png') }}" alt="Sonho de Costura" class="img-fluid" style="max-height: 120px;">
                </div>
                <h2 class="font-script" style="color: #6C5B52; font-size: 3.5rem;">Costura Criativa</h2>
                <p class="text-muted mt-3" style="font-size: 1.1rem; line-height: 1.6;">
                    Nossa missão é transformar tecidos e linhas em peças únicas que contam histórias. Entre no nosso ateliê e comece sua jornada artesanal hoje mesmo.
                </p>
                <div class="mt-4 text-muted d-flex justify-content-center gap-4 fs-4">
                    <i class="fas fa-drafting-compass"></i>
                    <i class="fas fa-cut"></i>
                    <i class="fas fa-palette"></i>
                </div>
            </div>
        </div>
        
        <!-- Right Side: Form -->
        <div class="auth-form-side">
            
            <!-- Mobile Logo (shows only on small screens) -->
            <div class="d-lg-none mb-4 text-center">
                <img src="{{ asset('images/LOGO_FULLHD.png') }}" alt="Sonho de Costura" style="max-height: 80px;">
            </div>
            
            <div class="auth-form-container">
                {{ $slot }}
            </div>
            
            <!-- Footer -->
            <div class="mt-5 text-center" style="max-width: 400px;">
                <h3 class="font-script fs-3 text-slate mb-3">Sonho de Costura</h3>
                <p class="small text-muted mb-2">
                    &copy; {{ date('Y') }} Sonho de Costura. Nossa missão é transformar tecidos e linhas em peças únicas que contam histórias.
                </p>
                <div class="d-flex justify-content-center gap-3 small text-muted mt-3">
                    <a href="#" class="text-muted text-decoration-none hover-peach">Privacidade</a>
                    <a href="#" class="text-muted text-decoration-none hover-peach">Termos de Uso</a>
                    <a href="#" class="text-muted text-decoration-none hover-peach">Contato</a>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
