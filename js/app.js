document.addEventListener("DOMContentLoaded", function() {
    const serviceTiles = document.querySelectorAll(".serviceTile");
    const serviceModals = document.querySelectorAll(".serviceModal");

    // Function to close all modals
    function closeAllModals() {
        serviceModals.forEach(function(modal) {
            modal.style.display = "none";
        });
    }

    // Event listeners for service tiles
    serviceTiles.forEach(function(tile) {
        tile.addEventListener("click", function() {
            closeAllModals(); // Close all modals first
            const modalId = tile.getAttribute("data-modal");
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = "block";
            }
        });
    });

    // Event listener for close buttons
    const closeButtons = document.querySelectorAll(".closeButton");
    closeButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            const modal = button.closest(".serviceModal");
            if (modal) {
                modal.style.display = "none";
            }
        });
    });

    // Close modal when clicking outside of it
    window.addEventListener("click", function(event) {
        if (event.target.classList.contains("serviceModal")) {
            event.target.style.display = "none";
        }
    });
});
