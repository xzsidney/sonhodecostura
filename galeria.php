<?php $pageTitle="Galeria"; include "partials/header.php"; include "partials/nav.php"; ?>
<main>
  <section class="section">
    <div class="container container-narrow">
      <h2 class="fw-bold mb-4">Galeria</h2>
      <div class="row g-4">
        <?php for($i=1;$i<=6;$i++): ?>
          <div class="col-6 col-md-4">
            <div class="card card-soft">
              <div class="ratio ratio-4x3" style="background:#eef1f4;border-radius:16px 16px 0 0;"></div>
              <div class="p-3">
                <div class="fw-semibold">Nécessaire <?= $i ?></div>
                <div class="small lead-muted">Tecido estampado • Zíper metálico</div>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>
</main>
<?php include "partials/footer.php"; ?>
