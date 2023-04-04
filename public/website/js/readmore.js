function toggleNavbarColor() {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > window.innerHeight / 2) {
    navbar.classList.add('bg-dark');
  } else {
    navbar.classList.remove('bg-dark');
  }
}

window.addEventListener('scroll', toggleNavbarColor);


function toggleText(link) {
  const container = link.parentNode;
  const text = link.previousElementSibling;
  if (text.style.display === 'none') {
    text.style.display = 'inline';
    container.style.height = '350px';
    link.textContent = 'Read Less';
  } else {
    text.style.display = 'none';
    text.style.height = '350px';
    container.style.height = '350px';
    link.textContent = 'Read More';
  }
}

