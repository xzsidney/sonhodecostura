<?php $pageTitle="Contato"; include "partials/header.php"; include "partials/nav.php"; ?>
<main>
  <section class="section">
    <div class="container container-narrow">
      <h2 class="fw-bold mb-4">Contato</h2>
      <div class="row g-4">
        <div class="col-lg-6">
          <div class="card card-soft p-4 h-100">
            <h5 class="fw-bold mb-3">Atendimento</h5>
            <p>
              <a class="btn btn-success me-2" target="_blank" href="https://wa.me/<?= $WHATSAPP ?>">WhatsApp</a>
              <a class="btn btn-outline-primary me-2" target="_blank" href="https://instagram.com/<?= $INSTAGRAM_USER ?>">Instagram</a>
              <a class="btn btn-outline-dark" href="mailto:<?= $EMAIL ?>">Email</a>
            </p>
            <p class="small lead-muted mb-0">Respostas em horário comercial.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <form class="card card-soft p-4" method="post" action="contato-submit.php">
            <div class="mb-3"><label class="form-label">Nome</label><input type="text" name="nome" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Email</label><input type="email" name="email" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Mensagem</label><textarea name="mensagem" rows="4" class="form-control" required></textarea></div>
            <button class="btn btn-primary">Enviar</button>
            <span class="small lead-muted ms-2">*Formulário demonstrativo.</span>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include "partials/footer.php"; ?>
