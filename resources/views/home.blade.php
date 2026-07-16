@extends('layouts.frontend')

@section('title', 'Início')

@section('content')

<!-- Hero Section -->
<section class="hero-section text-center d-flex align-items-center justify-content-center" style="min-height: 85vh; background-image: url('{{ asset('images/hero_banner.png') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="hero-overlay"></div>
    <div class="container position-relative z-1" style="z-index: 2 !important;">
        <div class="glass-box mx-auto" style="max-width: 800px;">
            <span class="text-mint fw-bold tracking-widest text-uppercase mb-3 d-block" style="letter-spacing: 2px;">Costura Criativa e Exclusiva</span>
            <h1 class="display-4 fw-bold text-slate mb-4">Acessórios desenhados especialmente para você.</h1>
            <p class="lead text-dark mb-5 mx-auto">
                Bolsas, nécessaires e kits estruturados com bordados personalizados de alto padrão.
            </p>
            <a href="#colecao" class="btn btn-primary-custom btn-lg px-5 py-3">Explorar Coleção</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5" style="background-color: var(--color-light);">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="rounded-4 overflow-hidden shadow-lg position-relative" style="height: 500px;">
                    <img src="{{ asset('images/hero_banner.png') }}" class="w-100 h-100 object-fit-cover" alt="Nosso Processo de Costura">
                </div>
            </div>
            <div class="col-lg-6">
                <span class="font-script fs-1 text-peach mb-2 d-block">Feito à mão com amor</span>
                <h2 class="fw-bold text-slate mb-4 display-6">Atenção em cada detalhe</h2>
                <p class="text-muted fs-5 mb-4">
                    Nossa missão é transformar tecidos e linhas em peças únicas que contam histórias. Desde a escolha cuidadosa dos materiais até o bordado computadorizado impecável, tudo é feito para garantir que você tenha uma peça luxuosa, durável e com a sua identidade.
                </p>
                <ul class="list-unstyled mb-0">
                    <li class="mb-3 d-flex align-items-center">
                        <div class="bg-peach text-white rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                            <i class="fas fa-check small"></i>
                        </div>
                        <span class="fs-5 text-dark">Bordados Computadorizados Precisos</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <div class="bg-peach text-white rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                            <i class="fas fa-check small"></i>
                        </div>
                        <span class="fs-5 text-dark">Estruturação Firme e Acabamento Premium</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <div class="bg-peach text-white rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                            <i class="fas fa-check small"></i>
                        </div>
                        <span class="fs-5 text-dark">Personalização de Nomes e Temas</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Collection Section -->
<section id="colecao" class="py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="font-script fs-1 text-peach mb-2 d-block">Nossa Coleção</span>
            <h2 class="fw-bold text-slate display-6">Peças mais pedidas</h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">Explore o que há de mais luxuoso e exclusivo no ateliê.</p>
        </div>
        
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="product-card h-100 shadow-sm border-0 bg-white">
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img src="{{ asset('images/product_maternity_bag.png') }}" class="w-100 h-100 object-fit-cover transition-transform" alt="Bolsa Maternidade">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-mint px-3 py-2 rounded-pill">Mais Vendido</span>
                        </div>
                    </div>
                    <div class="card-body p-4 text-center">
                        <h4 class="card-title fw-bold text-slate mb-2">Bolsa Maternidade Luxo</h4>
                        <p class="card-text text-muted mb-4">Espaçosa, estruturada e térmica. Perfeita para os primeiros dias do bebê.</p>
                        <a href="https://wa.me/5511985497329" target="_blank" class="btn btn-outline-peach rounded-pill px-4 py-2 w-100">Solicitar Orçamento</a>
                    </div>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="product-card h-100 shadow-sm border-0 bg-white">
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img src="{{ asset('images/product_necessaire.png') }}" class="w-100 h-100 object-fit-cover transition-transform" alt="Nécessaire Box">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h4 class="card-title fw-bold text-slate mb-2">Nécessaire Box Personalizada</h4>
                        <p class="card-text text-muted mb-4">Prática e elegante para organizar maquiagens ou itens do dia a dia.</p>
                        <a href="https://wa.me/5511985497329" target="_blank" class="btn btn-outline-peach rounded-pill px-4 py-2 w-100">Solicitar Orçamento</a>
                    </div>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="product-card h-100 shadow-sm border-0 bg-white">
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img src="{{ asset('images/product_maternity_bag.png') }}" class="w-100 h-100 object-fit-cover transition-transform" alt="Kit Viagem" style="filter: brightness(0.9);">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h4 class="card-title fw-bold text-slate mb-2">Kit Viagem Completo</h4>
                        <p class="card-text text-muted mb-4">Conjunto com bolsa de ombro e nécessaire combinando com suas iniciais.</p>
                        <a href="https://wa.me/5511985497329" target="_blank" class="btn btn-outline-peach rounded-pill px-4 py-2 w-100">Solicitar Orçamento</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5" style="background-color: var(--color-mint);">
    <div class="container py-5 text-center">
        <h2 class="fw-bold text-slate mb-4">Pronta para ter uma peça única?</h2>
        <p class="lead text-dark mb-5 mx-auto" style="max-width: 700px;">
            Trabalhamos com vagas limitadas por mês para garantir o padrão de excelência em cada costura. Faça seu orçamento pelo WhatsApp!
        </p>
        <a href="https://wa.me/5511985497329" target="_blank" class="btn btn-primary-custom btn-lg px-5 py-3 rounded-pill shadow">
            <i class="fab fa-whatsapp me-2"></i> Falar com o Ateliê
        </a>
    </div>
</section>

<!-- Font Awesome (for icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
