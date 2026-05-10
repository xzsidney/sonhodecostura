<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Sonho de Costura' ?></title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Great+Vibes&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* Modern overrides ensuring Bootstrap doesn't conflict too much with existing custom styles */
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--light, #f7f8fb);
        }
        .navbar-brand {
            font-family: 'Great Vibes', cursive;
            font-size: 1.8rem;
        }
        .btn-custom {
            background-color: var(--rose, #e0b7b4);
            color: #fff;
            border-radius: 50px;
            padding: 10px 25px;
            transition: all 0.3s;
        }
        .btn-custom:hover {
            background-color: var(--slate, #505b68);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-floating shadow-sm" style="background-color: var(--mint, #b6cda8);">
        <div class="container__"> <!-- Using standard container or custom container-narrow -->
           <div class="container">
            <a class="navbar-brand text-slate" href="/">Sonho de Costura</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link text-dark" href="/">Início</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/produtos">Produtos</a></li>
                    <!-- <li class="nav-item"><a class="nav-link text-dark" href="/sobre">Sobre</a></li> -->
                    <li class="nav-item"><a class="btn btn-custom btn-sm mt-1" href="/contato">Fale Conosco</a></li>
                </ul>
            </div>
           </div>
        </div>
    </nav>

    <!-- Main Content -->
    <?= $content ?? '' ?>

    <!-- Footer -->
    <footer class="site-footer footer-slate text-center mt-auto">
        <div class="container py-4">
            <div class="mb-3">
                <h4 class="font-script">Sonho de Costura</h4>
                <p class="small opacity-75">Costurando sonhos e transformando em felicidade.</p>
            </div>
            <div class="social-links mb-3">
                <!-- Add social icons here if needed -->
            </div>
            <p class="small mb-0">&copy; <?= date('Y') ?> Sonho de Costura. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 800,
        once: true,
      });
    </script>
</body>
</html>
