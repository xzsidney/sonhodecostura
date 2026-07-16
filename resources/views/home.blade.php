@extends('layouts.app')

@section('title', 'Início')

@section('content')

<!-- Hero Section -->
<section class="hero-section text-center d-flex align-items-center justify-content-center" style="min-height: 80vh; background-image: url('https://images.unsplash.com/photo-1629198725805-59eb4f3de584?q=80&w=2000&auto=format&fit=crop'); background-size: cover; background-position: center;">
    <div class="hero-overlay"></div>
    <div class="container position-relative z-1" style="z-index: 2 !important;">
        <span class="text-mint fw-bold tracking-widest text-uppercase mb-3 d-block">Costura Criativa e Exclusiva</span>
        <h1 class="display-3 fw-bold text-slate mb-4">Acessórios desenhados<br>especialmente para você.</h1>
        <p class="lead text-dark mb-5 mx-auto" style="max-width: 600px;">
            Bolsas, nécessaires e kits maternidade com estruturação premium e bordados personalizados de alto padrão.
        </p>
        <a href="#colecao" class="btn btn-primary-custom btn-lg">Explorar Coleção</a>
    </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <!-- Using a generic placeholder for the brand's work, will be updated by user later -->
                <div class="rounded-4 overflow-hidden shadow-sm" style="height: 400px; background-color: var(--color-mint);">
                    <img src="https://images.unsplash.com/photo-1598533781285-11eb855d36c4?q=80&w=800&auto=format&fit=crop" class="w-100 h-100 object-fit-cover" alt="Trabalho Manual">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="font-script fs-1 text-peach mb-3">Feito à mão com amor</h2>
                <h3 class="fw-bold text-slate mb-4">Atenção em cada detalhe</h3>
                <p class="text-muted mb-4">
                    Nossa missão é transformar tecidos e linhas em peças únicas que contam histórias. Desde a escolha cuidadosa dos materiais até o bordado computadorizado impecável, tudo é feito para garantir que você tenha uma peça luxuosa e durável.
                </p>
                <ul class="list-unstyled mb-0">
                    <li class="mb-3 d-flex align-items-center">
                        <span class="bg-peach text-white rounded-circle p-2 me-3 d-inline-flex">✓</span>
                        <strong>Bordados Computadorizados Precisos</strong>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="bg-peach text-white rounded-circle p-2 me-3 d-inline-flex">✓</span>
                        <strong>Estruturação Firme e Acabamento Premium</strong>
                    </li>
                    <li class="d-flex align-items-center">
                        <span class="bg-peach text-white rounded-circle p-2 me-3 d-inline-flex">✓</span>
                        <strong>Personalização de Nomes e Temas</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Collection Section (Mockup) -->
<section id="colecao" class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-slate">Nossa Coleção</h2>
            <p class="text-muted">Explore algumas de nossas peças mais pedidas.</p>
        </div>

        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="product-card card h-100">
                    <div style="height: 250px; background-color: var(--color-light);">
                        <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?q=80&w=600&auto=format&fit=crop" class="card-img-top h-100 w-100 object-fit-cover" alt="Bolsa Maternidade">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold text-slate mb-2">Bolsa Maternidade</h5>
                        <p class="small text-muted mb-4">Espaçosa, térmica e impermeável. Ideal para o dia a dia da mamãe.</p>
                        <a href="https://wa.me/5511985497329?text=Olá, tenho interesse em uma Bolsa Maternidade." target="_blank" class="btn btn-outline-slate w-100">Solicitar Orçamento</a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="product-card card h-100">
                    <div style="height: 250px; background-color: var(--color-light);">
                        <img src="https://images.unsplash.com/photo-1625841643912-78d10b71cf0e?q=80&w=600&auto=format&fit=crop" class="card-img-top h-100 w-100 object-fit-cover" alt="Nécessaire Personalizada">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold text-slate mb-2">Nécessaire Personalizada</h5>
                        <p class="small text-muted mb-4">Bordado exclusivo com nome ou inicial. Perfeita para organizar.</p>
                        <a href="https://wa.me/5511985497329?text=Olá, tenho interesse em uma Nécessaire Personalizada." target="_blank" class="btn btn-outline-slate w-100">Solicitar Orçamento</a>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="product-card card h-100">
                    <div style="height: 250px; background-color: var(--color-light);">
                        <img src="https://images.unsplash.com/photo-1614806687036-7c6407e38fdf?q=80&w=600&auto=format&fit=crop" class="card-img-top h-100 w-100 object-fit-cover" alt="Kit Viagem">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold text-slate mb-2">Toalhas Bordadas</h5>
                        <p class="small text-muted mb-4">Toalhas macias com barrado rendado e bordados delicados.</p>
                        <a href="https://wa.me/5511985497329?text=Olá, tenho interesse nas Toalhas Bordadas." target="_blank" class="btn btn-outline-slate w-100">Solicitar Orçamento</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-peach text-white text-center">
    <div class="container py-4">
        <h2 class="fw-bold mb-3">Pronto para criar o presente perfeito?</h2>
        <p class="lead mb-4">Fale conosco e comece a desenhar sua peça exclusiva hoje mesmo.</p>
        <a href="https://wa.me/5511985497329?text=Olá, vim pelo site e gostaria de criar uma peça exclusiva." target="_blank" class="btn btn-light btn-lg text-slate fw-bold rounded-pill px-5">Chamar no WhatsApp</a>
    </div>
</section>

@endsection
