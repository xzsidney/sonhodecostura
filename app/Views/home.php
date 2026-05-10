<!-- HERO SECTION -->
<section class="hero d-flex align-items-center text-center text-white" style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/img/hero01.png') no-repeat center center/cover; min-height: 70vh;">
    <div class="container">
        <h1 class="display-3 fw-bold mb-3">Sonho de Costura</h1>
        <p class="lead mb-4">Costura criativa feita com carinho — Nécessaires e acessórios sob medida.</p>
        <a href="/produtos" class="btn btn-custom btn-lg">Monte sua Nécessaire</a>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="section py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="assets/img/logo-horizontal.png" alt="Sobre Nós" class="img-fluid rounded-4 shadow">
            </div>
            <div class="col-lg-6">
                <span class="text-uppercase text-muted fw-bold small">Nossa História</span>
                <h2 class="display-6 fw-bold mb-3 text-slate">Costurando sonhos, criando felicidade.</h2>
                <p class="text-muted">Somos uma empresa inovadora com objetivos e ideais que vão alcançar seus sonhos, colocando seus sentimentos em primeiro lugar e transformando-os em maravilhosas bolsas, com estampas simples ou personalizadas, além de bordados estilosos.</p>
                
                <div class="row mt-4 g-3">
                    <div class="col-6">
                        <div class="p-3 bg-light rounded-3 text-center h-100 border">
                            <h3 class="h5 fw-bold mb-1">Feito à Mão</h3>
                            <p class="small mb-0 text-muted">Exclusividade em cada detalhe.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-light rounded-3 text-center h-100 border">
                            <h3 class="h5 fw-bold mb-1">Personalizado</h3>
                            <p class="small mb-0 text-muted">Do seu jeito, para você.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURED PRODUCTS -->
<section class="section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-slate">Destaques</h2>
            <p class="text-muted">Algumas das nossas criações favoritas.</p>
        </div>

        <div class="row g-4">
            <?php foreach($products as $index => $product): ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden product-card">
                    <div style="height: 250px; overflow: hidden;">
                         <img src="<?= $product['image'] ?>" class="card-img-top h-100 w-100 object-fit-cover" alt="<?= $product['name'] ?>">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold"><?= $product['name'] ?></h5>
                        <p class="card-text text-muted small flex-grow-1"><?= $product['description'] ?></p>
                        <a href="/contato?produto=<?= urlencode($product['name']) ?>" class="btn btn-outline-dark w-100 mt-3"><?= $product['cta'] ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-5">
            <a href="/produtos" class="btn btn-primary px-5 rounded-pill">Ver Todos os Produtos</a>
        </div>
    </div>
</section>
