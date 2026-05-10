<?php
// Garante que as variáveis ($NAVBAR_COLOR etc.) existem
require_once __DIR__ . '/../config.php';

// Mapeia cor -> classe CSS (compatível com PHP antigo)
$map = array('rose' => 'nav-rose', 'mint' => 'nav-mint', 'slate' => 'nav-slate');

// Pega a cor escolhida (fallback = 'rose')
$navColor = isset($NAVBAR_COLOR) ? $NAVBAR_COLOR : 'rose';

// Resolve a classe final (fallback = 'nav-rose')
$navClass = isset($map[$navColor]) ? $map[$navColor] : 'nav-rose';

// Página atual (só para marcar active no menu)
$current  = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Contraste do texto e ícone do toggler
$brandTextClass = ($navColor === 'slate') ? 'text-light' : 'text-dark';
$toggleMode     = ($navColor === 'slate') ? 'navbar-dark' : 'navbar-light';
?>
<nav id="mainNav" class="navbar navbar-expand-lg <?php echo $navClass; ?> <?php echo $toggleMode; ?> navbar-floating">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center fw-bold <?php echo $brandTextClass; ?>" href="index.php">
      <img src="assets/img/logo-horizontal.png" alt="Logo" class="me-2" style="height:40px">
      <span>Sonho de Costura</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="topNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link <?php echo ($current==='index.php')?'active':''; ?>" href="index.php">Início</a></li>
        <li class="nav-item"><a class="nav-link <?php echo ($current==='sobre.php')?'active':''; ?>" href="sobre.php">Sobre</a></li>
        <li class="nav-item"><a class="nav-link <?php echo ($current==='galeria.php')?'active':''; ?>" href="galeria.php">Galeria</a></li>
        <li class="nav-item"><a class="nav-link <?php echo ($current==='prototipo.php')?'active':''; ?>" href="prototipo.php">Protótipo</a></li>
        <li class="nav-item"><a class="nav-link <?php echo ($current==='contato.php')?'active':''; ?>" href="contato.php">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>
