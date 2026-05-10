 


<?php
/*
require_once __DIR__ . '/../config.php';

// Mapeia cor -> classe CSS
$map = array('rose' => 'footer-rose', 'mint' => 'footer-mint', 'slate' => 'footer-slate');

// Cor escolhida no config (fallback = rose)
$footerColor = isset($FOOTER_COLOR) ? $FOOTER_COLOR : 'rose';

// Resolve a classe final
$footerClass = isset($map[$footerColor]) ? $map[$footerColor] : 'footer-rose';

*/
// Garante que as variáveis ($NAVBAR_COLOR etc.) existem
require_once __DIR__ . '/../config.php';

// Mapeia cor -> classe CSS (compatível com PHP antigo)
$map = array('rose' => 'nav-rose', 'mint' => 'nav-mint', 'slate' => 'nav-slate');

// Pega a cor escolhida (fallback = 'rose')
$footerColor = isset($FOOTER_COLOR) ? $FOOTER_COLOR : 'rose';

// Resolve a classe final (fallback = 'nav-rose')
$footerClass = isset($map[$footerColor]) ? $map[$footerColor] : 'nav-rose';

?>
<footer class="nav-rose <?php echo $footerClass; ?> mt-auto py-4">
  <div class="container text-center small">
    <div class="mb-2">© <span id="year"></span> Sonho de Costura — Costura Criativa</div>
    <div>
      <a href="https://instagram.com/<?php echo $INSTAGRAM_USER; ?>" target="_blank" class="me-3">Instagram</a>
      <a href="https://wa.me/<?php echo $WHATSAPP; ?>" target="_blank" class="me-3">WhatsApp</a>
      <a href="mailto:<?php echo $EMAIL; ?>">Email</a>
    </div>
    <div> 
</div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
<script>document.getElementById('year').textContent = new Date().getFullYear();</script>
</body>
</html>
