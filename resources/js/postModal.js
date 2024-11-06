// Function to open the modal
function openModal(id) {
    document.getElementById(`modal-${id}`).classList.remove('hidden');
}

// Function to close the modal
function closeModal(id) {
    document.getElementById(`modal-${id}`).classList.add('hidden');
}

// Export functions to make them available globally
window.openModal = openModal;
window.closeModal = closeModal;
