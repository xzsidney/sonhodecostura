 <?php $pageTitle="Protótipo"; include "partials/header.php"; include "partials/nav.php"; ?>
<main>
  <section class="section">
    <div class="container container-narrow">
      <h2 class="fw-bold mb-4">Monte sua Nécessaire</h2>
      <div class="row g-4">
        <div class="col-lg-7">
          <form id="config-form" class="card card-soft p-4">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Tamanho</label>
                <select class="form-select" name="size">
                  <option value="P" data-price="45">P (17x11cm) — R$45</option>
                  <option value="M" data-price="60" selected>M (20x13cm) — R$60</option>
                  <option value="G" data-price="75">G (24x16cm) — R$75</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Tecido</label>
                <select class="form-select" name="fabric">
                  <option value="algodao" data-price="0">Algodão</option>
                  <option value="jeans" data-price="10">Jeans (+R$10)</option>
                  <option value="synthetic" data-price="15">Sintético (+R$15)</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Forro</label>
                <select class="form-select" name="lining">
                  <option value="simples" data-price="0">Simples</option>
                  <option value="impermeavel" data-price="12">Impermeável (+R$12)</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Zíper</label>
                <select class="form-select" name="zipper">
                  <option value="plastico" data-price="0">Plástico</option>
                  <option value="metalico" data-price="8">Metálico (+R$8)</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Personalização</label>
                <select class="form-select" name="personalization">
                  <option value="nenhuma" data-price="0">Nenhuma</option>
                  <option value="iniciais" data-price="10">Iniciais (+R$10)</option>
                  <option value="nome" data-price="20">Nome (+R$20)</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Quantidade</label>
                <input type="number" class="form-control" name="qty" min="1" value="1">
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="giftWrap" data-price="12">
                  <label class="form-check-label" for="giftWrap">Embalagem para presente (+R$12)</label>
                </div>
              </div>
              <div class="col-12">
                <button type="button" class="btn btn-primary" id="calcBtn">Calcular</button>
                <a class="btn btn-accent ms-2" target="_blank" rel="noopener" id="whatsBtn" href="#">Pedir no WhatsApp</a>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-5">
          <div class="card card-soft p-4">
            <h5 class="fw-bold">Resumo do Pedido</h5>
            <div id="summary" class="small lead-muted"></div>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold">Total estimado</span>
              <span class="display-6 fw-bold" style="color:var(--slate)" id="total">R$ 0,00</span>
            </div>
          </div>
          <div class="mt-2 small lead-muted">*Valores estimados. Confirmação no atendimento.</div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include "partials/footer.php"; ?>
