// Efeito de "sólida ao rolar": escurece a navbar um pouco ao passar de 40px
document.addEventListener('scroll', () => {
  const nav = document.getElementById('mainNav');
  if (!nav) return;
  nav.classList.toggle('shadow-sm', window.scrollY > 40);
});
