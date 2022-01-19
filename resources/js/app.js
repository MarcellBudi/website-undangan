// Nav Button for Mobile
const navBtn = document.querySelector('#nav-btn');
const mobileMenu = document.querySelector('#mobile-menu');
const openIcon = document.querySelector('#openIconBtn');
const closeIcon = document.querySelector('#closeIconBtn');
navBtn.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden')
  openIcon.classList.toggle('hidden')
  closeIcon.classList.toggle('hidden')
})


// User Menu Button
const userMenuBtn = document.querySelector('#user-menu-button');
const userMenu = document.querySelector('#user-menu');
userMenuBtn.addEventListener('click', () => {
  userMenu.classList.toggle('hidden');
})