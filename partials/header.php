<?php require_once __DIR__ . "/../config.php"; ?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= isset($pageTitle) ? "$pageTitle · $SITE_NAME" : $SITE_NAME ?></title>
  <meta name="description" content="Nécessaires personalizadas e costura criativa sob medida.">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Google Fonts: Montserrat (400,600,700,800) --> 
<link href="assets/css/style.css?v=<?= time() ?>" rel="stylesheet">

</head>
<body class="d-flex flex-column">
