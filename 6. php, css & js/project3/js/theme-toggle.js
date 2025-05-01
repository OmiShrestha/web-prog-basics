// theme-toggle.js
document.addEventListener('DOMContentLoaded', function() {
    const mode = localStorage.getItem('theme') || 'light';
    document.body.classList.add(mode + '-mode');
  });
  
  document.getElementById('themeToggle').addEventListener('click', function() {
    if (document.body.classList.contains('light-mode')) {
      document.body.classList.remove('light-mode');
      document.body.classList.add('dark-mode');
      localStorage.setItem('theme', 'dark');
    } else {
      document.body.classList.remove('dark-mode');
      document.body.classList.add('light-mode');
      localStorage.setItem('theme', 'light');
    }
  });
  