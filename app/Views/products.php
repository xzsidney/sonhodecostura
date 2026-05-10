<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-slate">Nossa Coleção</h1>
            <p class="lead text-muted">Explore nossa linha completa de produtos personalizados.</p>
        </div>

        <div class="row g-4">
             <?php foreach($products as $index => $product): ?>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="<?= $index * 50 ?>">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-3">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="<?= $product['image'] ?>" class="img-fluid h-100 w-100 object-fit-cover" alt="<?= $product['name'] ?>" style="min-height: 250px;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body p-4 d-flex flex-column h-100">
                                <h5 class="card-title fw-bold text-slate mb-2"><?= $product['name'] ?></h5>
                                <p class="card-text text-muted mb-3 small"><?= $product['description'] ?></p>
                                
                                <ul class="list-unstyled small text-muted mb-4">
                                    <?php foreach($product['features'] as $feature): ?>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>• <?= $feature ?></li>
                                    <?php endforeach; ?>
                                </ul>

                                <div class="mt-auto">
                                    <a href="/contato?produto=<?= urlencode($product['name']) ?>" class="btn btn-custom w-100"><?= $product['cta'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
