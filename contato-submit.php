<?php
require_once __DIR__ . "/config.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = trim($_POST['nome'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $mensagem = trim($_POST['mensagem'] ?? '');
  // Exemplo: aqui você poderia usar mail() ou PHPMailer
  // mail($EMAIL, "Contato do site - $nome", $mensagem, "From: $email");
  header("Location: contato.php?ok=1");
  exit;
}
header("Location: contato.php");
