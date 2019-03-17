// navbar handler

const navbarMenu = document.querySelector('.navbar-menu');
const burger     = document.querySelector('.burger');

burger.addEventListener('click', () => {
  navbarMenu.classList.toggle('is-active');
  burger.classList.toggle('is-active');
});