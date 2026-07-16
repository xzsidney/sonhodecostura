@extends('layouts.frontend')

@section('title', 'Sobre Nós')

@section('content')

<!-- Header Section -->
<section class="py-5" style="background-color: #EEF4ED;">
    <div class="container py-5 text-center mt-4 mb-3">
        <span class="font-script fs-1 text-peach mb-2 d-block" style="color: #D3A79E !important;">Muito prazer,</span>
        <h1 class="fw-bold text-slate mb-3" style="font-size: 3.5rem; color: #5B6B78 !important;">Conheça o nosso Ateliê</h1>
        <p class="text-muted mx-auto" style="max-width: 600px; font-size: 1.1rem; line-height: 1.6;">
            Descubra quem está por trás das peças exclusivas e do cuidado em cada ponto, transformando sonhos em arte têxtil.
        </p>
    </div>
</section>

<!-- About Content -->
<section class="py-5 bg-white">
    <div class="container py-5 my-3">
        <div class="row align-items-center g-5">
            <!-- Left Side: Visual/Mockup -->
            <div class="col-lg-6">
                <div class="position-relative d-inline-block">
                    <!-- Frame / Image placeholder (Using a border and padding to look like a screen frame) -->
                    <div class="rounded-4 overflow-hidden" style="border: 4px solid #E5C3BC; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                        <img src="{{ asset('images/hero_banner.png') }}" class="img-fluid" alt="Ateliê Sonho de Costura" style="min-height: 350px; object-fit: cover; filter: brightness(0.9);">
                    </div>
                    <!-- Accent box -->
                    <div class="position-absolute bottom-0 end-0 bg-peach text-white p-3 rounded-4 shadow-lg mb-n4 me-n4" style="background-color: #D3A79E; transform: translate(-20px, 20px);">
                        <h4 class="font-script fs-3 mb-0">Elaine Santos</h4>
                        <p class="small mb-0 text-white text-uppercase fw-bold" style="letter-spacing: 1px; font-size: 0.7rem;">Fundadora & Artesã</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Side: Text -->
            <div class="col-lg-6 ps-lg-5 mt-5 mt-lg-0">
                <h2 class="fw-bold mb-4" style="color: #D3A79E; font-size: 1.75rem;">"Nós costuramos sonhos e os transformamos em realidade"</h2>
                
                <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                    Olá! Eu sou a <strong>Elaine Santos</strong>, empreendedora apaixonada por Costura Criativa. 
                    O ateliê <strong>Sonho de Costura</strong> nasceu do desejo de transformar tecidos e linhas em 
                    peças exclusivas que acompanham as histórias mais felizes das nossas clientes.
                </p>
                
                <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                    Cada produto que sai do nosso ateliê passa por um rigoroso controle de qualidade, 
                    garantindo um acabamento luxuoso e duradouro. Não vendemos apenas bolsas, entregamos arte feita 
                    à mão para as mamães e mulheres que não abrem mão de estilo e exclusividade.
                </p>
                
                <blockquote class="border-start border-4 ps-4 py-2 mt-4" style="border-color: #B2CBAA !important; font-style: italic; color: #888;">
                    "Nossa missão é transformar tecidos e linhas em peças únicas que contam histórias."
                </blockquote>
            </div>
        </div>
        
        <!-- Feature Cards -->
        <div class="row g-4 mt-5 pt-4">
            <div class="col-md-6">
                <div class="card h-100 border p-4 rounded-4" style="border-color: #F2E3E0 !important; box-shadow: 0 5px 15px rgba(0,0,0,0.02);">
                    <div class="mb-3 d-inline-flex align-items-center justify-content-center border rounded-3" style="width: 48px; height: 48px; border-color: #E0E0E0 !important;">
                        <i class="fas fa-book-open text-muted"></i>
                    </div>
                    <h5 class="fw-bold text-slate mb-3">Especialidade</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">
                        Bolsas maternidade, nécessaires, kits viagem e bordados computadorizados personalizados, feitos sob medida para o seu momento especial.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border p-4 rounded-4" style="border-color: #F2E3E0 !important; box-shadow: 0 5px 15px rgba(0,0,0,0.02);">
                    <div class="mb-3 d-inline-flex align-items-center justify-content-center border rounded-3" style="width: 48px; height: 48px; border-color: #E0E0E0 !important;">
                        <i class="fas fa-shield-alt text-muted"></i>
                    </div>
                    <h5 class="fw-bold text-slate mb-3">Padrão Premium</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">
                        Matérias-primas de primeira qualidade. Foco em estruturação firme, costuras reforçadas e durabilidade impecável em cada detalhe.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Footer Section -->
<section class="py-5 text-center" style="background-color: #5B6B78;">
    <div class="container py-5">
        <h2 class="fw-bold text-white mb-4">Quer levar um pedaço do nosso sonho para casa?</h2>
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
            <a href="https://wa.me/5511985497329" target="_blank" class="btn rounded-pill px-4 py-2 text-white fw-medium shadow-sm d-inline-flex align-items-center" style="background-color: #D3A79E; border: none;">
                <i class="fab fa-whatsapp me-2"></i> Falar no WhatsApp
            </a>
            <a href="{{ url('/#colecao') }}" class="btn rounded-pill px-4 py-2 text-white fw-medium shadow-sm" style="background-color: transparent; border: 1px solid rgba(255,255,255,0.4);">
                Ver Coleção Completa
            </a>
        </div>
    </div>
</section>

@endsection
