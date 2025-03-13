document.addEventListener("DOMContentLoaded", () => {
    // Ajouter un effet de survol aux cartes
    document.querySelectorAll(".card").forEach(card => {
        card.addEventListener("mouseenter", () => {
            card.style.transform = "translateY(-10px)";
            card.style.boxShadow = "0 8px 16px rgba(0, 0, 0, 0.2)";
        });

        card.addEventListener("mouseleave", () => {
            card.style.transform = "translateY(0)";
            card.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.1)";
        });
    });
});