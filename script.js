// Function to show a simple welcome alert
function showWelcomeMessage() {
    alert("Welcome to Dilneth Global! We are glad you're here.");
}

// Example: Change Navbar background on scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('shadow-lg');
    } else {
        navbar.classList.remove('shadow-lg');
    }
});