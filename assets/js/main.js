document.addEventListener('DOMContentLoaded', function() {

  const toggleButton = document.querySelector('.header__toggle');
  const menu = document.getElementById('header-menu');

  if(toggleButton && menu) {
    toggleButton.addEventListener('click', function() {
    
      menu.classList.toggle('header__menu--open');      
      const expanded = toggleButton.getAttribute('aria-expanded') === 'true';
      toggleButton.setAttribute('aria-expanded', !expanded);
    });
  }
});
