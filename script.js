// Function to show a simple welcome alert
function showWelcomeMessage() {
    alert("Welcome to Dilneth Global! Click \"Products\" to see more details.");
}

// Example: Change Navbar background on scroll
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('shadow-lg');
    } else {
        navbar.classList.remove('shadow-lg');
    }
});

// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    
    // Get the collapsible menu element
    const menuToggle = document.getElementById('dilnethNavbar'); 

    // Only run this if the element actually exists on the current page
    if (menuToggle) {
        const bsCollapse = new bootstrap.Collapse(menuToggle, { toggle: false });
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach((link) => {
            link.addEventListener('click', () => {
                // Check if the toggler is currently visible (mobile view)
                const toggler = document.querySelector('.navbar-toggler');
                if (window.getComputedStyle(toggler).display !== 'none') {
                    bsCollapse.hide();
                }
            });
        });
    }
});