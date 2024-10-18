// app.js

// Import any necessary modules
import './bootstrap';

// DOM Content Loaded event listener
document.addEventListener('DOMContentLoaded', () => {
    // Navbar mobile responsiveness
    const navbarBurger = document.querySelector('.navbar-burger');
    const navbarMenu = document.querySelector('.navbar-menu');

    if (navbarBurger && navbarMenu) {
        navbarBurger.addEventListener('click', () => {
            navbarBurger.classList.toggle('is-active');
            navbarMenu.classList.toggle('is-active');
        });
    }

    // Add any other initialization code here
    console.log('Application initialized');
});

// You can add more JavaScript code or import other modules as needed
