import './bootstrap';

function toggleNavbarColor() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > window.innerHeight / 2) {
      navbar.classList.add('bg-dark');
    } else {
      navbar.classList.remove('bg-dark');
    }
  }
  
  window.addEventListener('scroll', toggleNavbarColor);