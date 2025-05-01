<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

// Ensure DOM is ready before running script
document.addEventListener('DOMContentLoaded', () => {
  // Sticky header logic using jQuery
  $(window).on('scroll', () => {
    if ($(window).scrollTop() > 1) {
      $('header').addClass('header--sticky');
    } else {
      $('header').removeClass('header--sticky');
    }
  });

  // Dark mode toggle with localStorage persistence
  const darkModeToggle = document.querySelector('.header__dark-mode-toggle');
  const DARK_MODE_KEY = 'darkMode';

  // Check and apply saved dark mode preference on page load
  if (localStorage.getItem(DARK_MODE_KEY) === 'enabled') {
    document.body.classList.add('dark-mode');
  }

  darkModeToggle?.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');

    // Save the user's preference in localStorage
    if (document.body.classList.contains('dark-mode')) {
      localStorage.setItem(DARK_MODE_KEY, 'enabled');
    } else {
      localStorage.setItem(DARK_MODE_KEY, 'disabled');
    }
  });

  // Login and signup button interactions
  const loginButton = document.querySelector('.header__login');
  const signupButton = document.querySelector('.header__signup');

  loginButton?.addEventListener('click', () => {
    alert('Redirecting to login page...');
  });

  signupButton?.addEventListener('click', () => {
    alert('Redirecting to signup page...');
  });
});
