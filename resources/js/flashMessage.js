// resources/js/flashMessage.js

// Automatically close flash message after 3 seconds
setTimeout(() => {
    const flashMessage = document.getElementById('flash-message');
    if (flashMessage) {
        // Add fade-out class for smooth transition
        flashMessage.classList.add('opacity-0'); 
        setTimeout(() => flashMessage.style.display = 'none', 500); // Hide completely after fade-out
    }
}, 3000);

// Manual close function for the close button
function closeFlashMessage() {
    const flashMessage = document.getElementById('flash-message');
    if (flashMessage) {
        flashMessage.classList.add('opacity-0'); // Trigger fade-out transition
        setTimeout(() => flashMessage.style.display = 'none', 500); // Hide after transition
    }
}
