const closeMenuBtn = document.querySelector('.close');
const menu = document.querySelector('.menu-main-container');

closeMenuBtn.addEventListener('click', () => {
  menu.classList.toggle('active-menu');
});