@extends('layouts.frontend')

@section('title', 'Sobre Nós')

@section('content')

<!-- Header Section -->
<section class="py-5" style="background-color: var(--color-mint);">
    <div class="container py-5 text-center">
        <span class="font-script fs-1 text-peach mb-2 d-block">Muito prazer,</span>
        <h1 class="display-4 fw-bold text-slate mb-3">Conheça o nosso Ateliê</h1>
        <p class="lead text-dark mx-auto" style="max-width: 600px;">
            Descubra quem está por trás das peças exclusivas e do cuidado em cada ponto.
        </p>
    </div>
</section>

<!-- About Content -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Image / Visual -->
            <div class="col-lg-5">
                <div class="position-relative">
                    <div class="rounded-4 overflow-hidden shadow-lg" style="height: 600px; background-color: var(--color-light);">
                        <!-- A fallback elegant pattern or image -->
                        <div class="w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="background-image: url('{{ asset('images/hero_banner.png') }}'); background-size: cover; background-position: center;">
                            <div class="bg-white p-4 rounded-circle shadow-lg mb-3" style="width: 120px; height: 120px; display: flex; align-items: center; justify-content: center;">
                                <img src="{{ asset('images/LOGO_FULLHD.png') }}" class="img-fluid" alt="Sonho de Costura">
                            </div>
                        </div>
                    </div>
                    <!-- Small accent box -->
                    <div class="position-absolute bottom-0 start-0 bg-peach text-white p-4 rounded-4 shadow-lg ms-n4 mb-4 d-none d-lg-block" style="transform: translateX(-20px);">
                        <h4 class="font-script fs-2 mb-0">Elaine Santos</h4>
                        <p class="small mb-0 text-white-50 text-uppercase tracking-widest">Fundadora</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Side: Text -->
            <div class="col-lg-7 ps-lg-5">
                <h2 class="fw-bold text-slate mb-4 display-6">"Nós costuramos sonhos e os transformamos em realidade"</h2>
                
                <p class="fs-5 text-muted mb-4" style="line-height: 1.8;">
                    Olá! Eu sou a <strong>Elaine Santos</strong>, empreendedora apaixonada por Costura Criativa. 
                    O ateliê <strong>Sonho de Costura</strong> nasceu do desejo de transformar tecidos e linhas em 
                    peças exclusivas que acompanham as histórias mais felizes das nossas clientes.
                </p>
                
                <div class="row g-4 my-4">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="text-peach fs-3 me-3">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-slate mb-2">Especialidade</h5>
                                <p class="text-muted small">Bolsas maternidade, nécessaires, kits viagem e bordados computadorizados personalizados.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="text-peach fs-3 me-3">
                                <i class="fas fa-gem"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-slate mb-2">Padrão Premium</h5>
                                <p class="text-muted small">Matérias-primas de primeira qualidade. Foco em estruturação firme, costuras reforçadas e durabilidade impecável.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <p class="text-muted mb-5">
                    Cada produto que sai do nosso ateliê passa por um rigoroso controle de qualidade, 
                    garantindo um acabamento luxuoso e duradouro. Não vendemos apenas bolsas, entregamos arte feita à mão 
                    para as mamães e mulheres que não abrem mão de estilo e exclusividade.
                </p>
                
                <hr style="border-color: #E5E0DA;">
                
                <!-- Contact info -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-4 pt-2">
                    <div>
                        <p class="mb-1 text-dark fw-medium"><i class="fas fa-map-marker-alt text-peach me-2"></i> Nossa Localização</p>
                        <p class="small text-muted mb-3 mb-md-0">Av. Aprígio Bezerra da Silva<br>Taboão da Serra - SP, 06763-040</p>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/sonhodecostura_atelie/" target="_blank" class="btn btn-outline-peach rounded-pill px-4 py-2 me-2 mb-2 mb-md-0">
                            <i class="fab fa-instagram me-2"></i> @sonhodecostura_atelie
                        </a>
                        <a href="https://wa.me/5511985497329" target="_blank" class="btn btn-primary-custom rounded-pill px-4 py-2">
                            <i class="fab fa-whatsapp me-2"></i> Chamar
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

@endsection
