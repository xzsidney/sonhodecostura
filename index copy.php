<?php $pageTitle="Início"; include "partials/header.php"; include "partials/nav.php"; ?>
<main>
  <!-- HERO -->
  <section class="hero">
    <div class="container container-narrow text-center py-5">
      <h1 class="fw-bold display-5">Sonho de Costura</h1>
      <p class="lead">Costura criativa feita com carinho — Nécessaires e acessórios sob medida.</p>
      <a href="prototipo.php" class="btn btn-accent btn-lg mt-2">Monte sua Nécessaire</a>
    </div>
  </section>

  <!-- SOBRE / PROPOSTA DE VALOR -->
<section class="section about-brand">
  <div class="container container-narrow">
    <div class="row g-4 align-items-center">
      <!-- Lado esquerdo: foto temática -->
      <div class="col-lg-5">
        <div class="about-photo rounded-4 overflow-hidden shadow-sm">
          <img src="assets/img/logo-horizontal.png" alt="Linhas, fitas e tecidos" class="w-100">
        </div>
      </div>

      <!-- Lado direito: texto e serviços -->
      <div class="col-lg-7">
        <div class="mb-2 text-slate fw-semibold small">Sonho de Costura</div>
        <h3 class="display-6 fw-bold script text-slate">Nós costuramos sonhos<br>e os transformamos em felicidade.</h3>

        <p class="lead-muted mt-3">
          Somos uma empresa inovadora com objetivos e ideais que vão alcançar seus sonhos,
          colocando seus sentimentos em primeiro lugar e transformando-os em maravilhosas
          bolsas, com estampas simples ou personalizadas, além de bordados estilosos.
        </p>

        <!-- Cartão de serviços -->
        <div class="services-card rounded-4 shadow-sm p-4 mt-3">
          <div class="fw-bold mb-2">O que fazemos</div>
          <ul class="list-unstyled m-0">
            <li>• Nécessaire</li>
            <li>• Bolsas infantis e adultas</li>
            <li>• Roupas de mesa</li>
            <li>• Toalhas</li>
          </ul>
        </div>

        <!-- Ações -->
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="prototipo.php" class="btn btn-accent">Monte sua Nécessaire</a>
          <a href="contato.php" class="btn btn-primary">Fale Conosco</a>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- PRODUTOS -->
<section class="section bg-gradient-products">
    <div class="container container-narrow">
      <div class="text-center mb-5 text-white">
        <h2 class="fw-bold">Nossos Produtos</h2>
        <p class="lead-muted">Cada peça é feita à mão, com personalização e carinho em cada detalhe.</p>
      </div>
      <div class="row g-4">
        <!-- Produto 1: Toalha Personalizada -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm rounded-4">
            <img src="assets/img/produtos/toalhas/toalha_01.png" class="card-img-top card-product" alt="Toalha Personalizada Bordada">
            <div class="card-body">
              <h5 class="fw-bold">✨ Toalha Personalizada Bordada ✨</h5>
              <p class="lead-muted small">
                Exclusividade em cada detalhe: nome, iniciais e desenhos delicados com acabamento em renda refinada.
              </p>
              <ul class="small">
                <li>✔️ Bordado com nome/iniciais</li>
                <li>✔️ Desenhos delicados</li>
                <li>✔️ Acabamento rendado</li>
              </ul>
              <a href="contato.php" class="btn btn-accent btn-sm mt-2">Peça a sua</a>
            </div>
          </div>
        </div>

        <!-- Produto 2: Necessaire Personalizada -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm rounded-4">
            <img src="assets/img/produtos/necessaire/necessaire_01.png" class="card-img-top card-product" alt="Necessaire Personalizada">
            <div class="card-body">
              <h5 class="fw-bold">✨ Necessaire Personalizada ✨</h5>
              <p class="lead-muted small">
                Linda, prática e exclusiva, feita sob medida com bordado personalizado e estrutura firme.
              </p>
              <ul class="small">
                <li>✔️ Bordado exclusivo</li>
                <li>✔️ Zíper resistente</li>
                <li>✔️ Alça lateral prática</li>
              </ul>
              <a href="contato.php" class="btn btn-accent btn-sm mt-2">Monte a sua</a>
            </div>
          </div>
        </div>

        <!-- Produto 3: Kit de Viagem -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm rounded-4">
            <img src="assets/img/produtos/kits/kit_01.png" class="card-img-top card-product" alt="Kit de Viagem Personalizado">
            <div class="card-body">
              <h5 class="fw-bold">✨ Kit de Viagem Personalizado ✨</h5>
              <p class="lead-muted small">
                Conjunto sofisticado com mala, mochila, bolsas e necessaires, tudo personalizado com bordados únicos.
              </p>
              <ul class="small">
                <li>✔️ Mala + Mochila + Bolsas</li>
                <li>✔️ Nécessaires e porta-mamadeira</li>
                <li>✔️ Organizadores e chaveiros</li>
              </ul>
              <a href="contato.php" class="btn btn-accent btn-sm mt-2">Veja os detalhes</a>
            </div>
          </div>
        </div>

        <!-- Produto 4: Bolsa de Mão -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm rounded-4">
            <img src="assets/img/produtos/bolsa/bolsa_01.png" class="card-img-top card-product" alt="Bolsa de Mão Personalizada">
            <div class="card-body">
              <h5 class="fw-bold">✨ Bolsa de Mão Personalizada ✨</h5>
              <p class="lead-muted small">
                Charmosa e prática, com bordado exclusivo da corujinha estilosa e acabamento impecável.
              </p>
              <ul class="small">
                <li>✔️ Bordado customizável</li>
                <li>✔️ Estrutura firme</li>
                <li>✔️ Zíper reforçado</li>
              </ul>
              <a href="contato.php" class="btn btn-accent btn-sm mt-2">Garanta a sua</a>
            </div>
          </div>
        </div>

        <!-- Produto 5: Porta Cartão de Vacinas -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm rounded-4">
            <img src="assets/img/produtos/carteiras/carteira_01.png" class="card-img-top  " alt="Porta Cartão de Vacinas e Documentos">
            <div class="card-body">
              <h5 class="fw-bold">✨ Porta Cartão de Vacinas ✨</h5>
              <p class="lead-muted small">
                Organização e delicadeza em um só produto, com bordado de abelhinha e espaço para documentos.
              </p>
              <ul class="small">
                <li>✔️ Bordado exclusivo</li>
                <li>✔️ Estrutura firme</li>
                <li>✔️ Fecho metálico dourado</li>
              </ul>
              <a href="contato.php" class="btn btn-accent btn-sm mt-2">Solicite o seu</a>
            </div>
          </div>
        </div>

         <!-- Produto 6: Kit Maternidade Personalizado-->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm rounded-4">
            <img src="assets/img/produtos/kits/kit_03.png" class="card-img-top  " alt="Kit Maternidade Personalizado">
            <div class="card-body">
              <h5 class="fw-bold">✨ Kit Maternidade Personalizado ✨</h5>
              <p class="lead-muted small">
                Um conjunto completo, delicado e feito sob medida para tornar esse momento ainda mais especial! Esse kit maternidade traz peças bordadas com carinho, unindo beleza, funcionalidade e exclusividade, tudo personalizado com o nome da criança e detalhes encantadores de bailarina.
              </p>
              <ul class="small">
                <li>✔️ Bordados exclusivos e personalizados.</li>
                <li>✔️ Materiais de alta qualidade.</li>
                <li>✔️ Delicadeza em cada detalhe.</li>
                <li>✔️ Ideal para presentear ou compor o enxoval do bebê.</li>
              </ul>
              <a href="contato.php" class="btn btn-accent btn-sm mt-2">Solicite o seu</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>



  <!-- DESTAQUES -->
  <section class="section">
    <div class="container container-narrow">
      <div class="row g-4">
        <div class="col-md-4"><div class="card card-soft p-4 text-center">
          <h5 class="fw-bold">Feito à mão</h5><p class="lead-muted mb-0">Acabamento impecável e materiais de qualidade.</p>
        </div></div>
        <div class="col-md-4"><div class="card card-soft p-4 text-center">
          <h5 class="fw-bold">Personalizado</h5><p class="lead-muted mb-0">Tecido, tamanho, zíper e iniciais do seu jeito.</p>
        </div></div>
        <div class="col-md-4"><div class="card card-soft p-4 text-center">
          <h5 class="fw-bold">Entrega rápida</h5><p class="lead-muted mb-0">Prazo combinado pelo WhatsApp.</p>
        </div></div>
      </div>
    </div>
  </section>
</main>
<?php include "partials/footer.php"; ?>
