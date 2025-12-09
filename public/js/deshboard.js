document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('btnMenu');
  const sidebar = document.getElementById('sidebar');

  if (!btn || !sidebar) {
    console.error('No se encontró btnMenu o sidebar.');
    return;
  }

  // Abrir / cerrar sidebar
  btn.addEventListener('click', (e) => {
    e.preventDefault();
    sidebar.classList.toggle('show');
  });

  // Cerrar al hacer clic en un enlace (solo móvil)
  const links = sidebar.querySelectorAll('a');
  links.forEach(a => {
    a.addEventListener('click', () => {
      if (window.innerWidth < 768) {
        sidebar.classList.remove('show');
      }
    });
  });
});
