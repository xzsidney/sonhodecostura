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
            <div class="col-lg-6 ps-lg-5">
                <h2 class="font-script display-4 text-peach mb-2">Feito à mão com amor</h2>
                <h3 class="fw-bold text-slate mb-4 fs-1">Atenção em cada detalhe</h3>
                <p class="text-muted mb-4 fs-5" style="line-height: 1.8;">
                    Nossa missão é transformar tecidos e linhas em peças únicas que contam histórias. Desde a escolha cuidadosa dos materiais até o bordado computadorizado impecável, tudo é feito para garantir que você tenha uma peça luxuosa, durável e com a sua identidade.
                </p>
                <ul class="list-unstyled mb-0">
                    <li class="mb-3 d-flex align-items-center fs-5">
                        <span class="bg-peach text-white rounded-circle me-3 d-flex align-items-center justify-content-center shadow-sm flex-shrink-0" style="width: 32px; height: 32px;">✓</span>
                        <span class="text-slate">Bordados Computadorizados Precisos</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center fs-5">
                        <span class="bg-peach text-white rounded-circle me-3 d-flex align-items-center justify-content-center shadow-sm flex-shrink-0" style="width: 32px; height: 32px;">✓</span>
                        <span class="text-slate">Estruturação Firme e Acabamento Premium</span>
                    </li>
                    <li class="d-flex align-items-center fs-5">
                        <span class="bg-peach text-white rounded-circle me-3 d-flex align-items-center justify-content-center shadow-sm flex-shrink-0" style="width: 32px; height: 32px;">✓</span>
                        <span class="text-slate">Personalização de Nomes e Temas</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Collection Section (Vitrine) -->
<section id="colecao" class="py-5" style="background-color: #fff;">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="font-script text-peach display-5 mb-0">Nossa Coleção</h2>
            <h3 class="fw-bold text-slate fs-2">Peças mais pedidas</h3>
            <p class="text-muted mt-3">Explore o que há de mais luxuoso e exclusivo no ateliê.</p>
        </div>

        <div class="row g-5 justify-content-center">
            <!-- Product 1 -->
            <div class="col-md-5 col-lg-4">
                <div class="product-card card h-100">
                    <div style="height: 300px; background-color: var(--color-light); padding: 10px;">
                        <img src="{{ asset('images/bag.png') }}" class="card-img-top h-100 w-100 object-fit-cover rounded-3" alt="Bolsa Maternidade">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold text-slate mb-2 fs-4">Bolsa Maternidade</h5>
                        <p class="text-muted mb-4">Espaçosa, térmica e estruturada. Ideal para o dia a dia da mamãe com muito luxo.</p>
                        <a href="https://wa.me/5511985497329?text=Olá, tenho interesse em uma Bolsa Maternidade luxuosa." target="_blank" class="btn btn-outline-slate w-100 py-2">Solicitar Orçamento</a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-5 col-lg-4">
                <div class="product-card card h-100">
                    <div style="height: 300px; background-color: var(--color-light); padding: 10px;">
                        <img src="{{ asset('images/necessaire.png') }}" class="card-img-top h-100 w-100 object-fit-cover rounded-3" alt="Nécessaire Personalizada">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold text-slate mb-2 fs-4">Nécessaire Box</h5>
                        <p class="text-muted mb-4">Bordado exclusivo com inicial ou nome. Perfeita para organizar e presentear.</p>
                        <a href="https://wa.me/5511985497329?text=Olá, tenho interesse em uma Nécessaire Box Personalizada." target="_blank" class="btn btn-outline-slate w-100 py-2">Solicitar Orçamento</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-slate text-white text-center position-relative overflow-hidden">
    <div class="position-absolute w-100 h-100" style="top: 0; left: 0; background-color: var(--color-slate); opacity: 0.9; z-index: 0;"></div>
    <div class="container py-5 position-relative z-1">
        <h2 class="font-script text-peach display-4 mb-3">Pronto para criar o presente perfeito?</h2>
        <p class="lead mb-5 text-light mx-auto" style="max-width: 600px;">
            Fale conosco diretamente no WhatsApp e comece a desenhar uma peça tão única quanto a pessoa que vai recebê-la.
        </p>
        <a href="https://wa.me/5511985497329?text=Olá, vim pelo site e gostaria de criar uma peça exclusiva." target="_blank" class="btn btn-primary-custom btn-lg px-5 shadow-lg">Chamar no WhatsApp</a>
    </div>
</section>

@endsection
