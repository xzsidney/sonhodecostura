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
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body style="background-color: var(--color-mint); min-height: 100vh; display: flex; flex-direction: column;">
    
    <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center py-5">
        
        <!-- Logo -->
        <div class="mb-4 text-center">
            <a href="{{ url('/') }}" class="text-decoration-none">
                <span class="font-script text-peach" style="font-size: 3rem;">Sonho de Costura</span>
            </a>
        </div>

        <!-- Auth Card -->
        <div class="bg-white p-5 rounded-4 shadow-lg w-100" style="max-width: 450px;">
            {{ $slot }}
        </div>
        
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
