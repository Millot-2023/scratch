document.addEventListener('DOMContentLoaded', () => {
    // Sélectionne le bouton du menu hamburger
    const navToggle = document.querySelector('.nav-toggle');
    // Sélectionne le menu de navigation lui-même
    const navMenu = document.getElementById('main-nav-menu');

    // Vérifie que les éléments existent bien avant d'essayer d'interagir avec eux
    if (navToggle && navMenu) {
        // Ajoute un écouteur d'événement sur le clic du bouton
        navToggle.addEventListener('click', () => {
            // Bascule la classe 'active' sur le menu pour l'ouvrir/fermer
            navMenu.classList.toggle('active');
            // Met à jour l'attribut aria-expanded pour l'accessibilité
            const isExpanded = navMenu.classList.contains('active');
            navToggle.setAttribute('aria-expanded', isExpanded);
        });
    }
});