document.addEventListener('DOMContentLoaded', () => {

/* Menu Toggle*/
  const toggleButton = document.querySelector('.header__toggle');
  const menu = document.getElementById('header-menu');
  const header = document.querySelector('.header');

  const closeMenu = () => {
    if (!menu || !toggleButton) return;
    menu.classList.remove('header__menu--open');
    toggleButton.setAttribute('aria-expanded', 'false');
  };

  if (toggleButton && menu) {
    toggleButton.addEventListener('click', () => {
      const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
      menu.classList.toggle('header__menu--open');
      toggleButton.setAttribute('aria-expanded', String(!isExpanded));
    });
  }

/* Smooth scroll*/
  document.querySelectorAll('#header-menu a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const target = document.querySelector(link.getAttribute('href'));
      if (!target) return;

      e.preventDefault();

      const offset = header?.offsetHeight || 0;
      const top =
        target.getBoundingClientRect().top + window.pageYOffset - offset;

      window.scrollTo({
        top,
        behavior: 'smooth'
      });

      closeMenu();
    });
  });

/* Animations */
  const animatedElements = document.querySelectorAll(
    '.ui-title, .ui-animate'
  );

  if (animatedElements.length) {
    const observer = new IntersectionObserver(
      entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.2 }
    );

    animatedElements.forEach(el => observer.observe(el));
  }

});
