// Your JavaScript code goes here

// Example: Navbar toggle
var navbarToggle = document.querySelector('.navbar-toggle');
var navbarMenu = document.querySelector('.navbar-menu');

navbarToggle.addEventListener('click', function () {
  navbarMenu.classList.toggle('is-active');
});
