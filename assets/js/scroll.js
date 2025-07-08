// Fichier: assets/js/scroll.js

document.addEventListener('DOMContentLoaded', function() {

    // --- BLOC 1 : LOGIQUE DE DÉFILEMENT VERS LE BAS (Vers la section Hero) ---
    const scrollArrow = document.querySelector('.scroll-down-arrow');
    const targetSection = document.querySelector('#premier-bloc');
    const mainHeader = document.querySelector('.main-header'); // Assure-toi que c'est le bon sélecteur pour ta navbar

    if (scrollArrow && targetSection && mainHeader) {
        scrollArrow.addEventListener('click', function(e) {
            e.preventDefault();

            const targetPosition = targetSection.getBoundingClientRect().top + window.pageYOffset;
            const headerHeight = mainHeader.offsetHeight;
            const desiredSpacing = 40; // <-- AJUSTE CETTE VALEUR POUR L'ESPACE DÉSIRÉ (ex: 20, 40, 60px)

            const scrollToPosition = targetPosition - headerHeight - desiredSpacing;

            window.scrollTo({
                top: scrollToPosition,
                behavior: 'smooth'
            });
        });
    }

    // --- FIN BLOC 1 ---

    // --- BLOC 2 : LOGIQUE DE DÉFILEMENT VERS LE HAUT (Bouton "Retour en haut" avec Intersection Observer) ---
    const scrollToTopBtn = document.getElementById('scroll-to-top');
    const mainFooter = document.querySelector('.main-footer'); // Sélectionne ton élément footer par sa classe

    if (scrollToTopBtn && mainFooter) { // Vérifie que le bouton ET le footer existent

        // Configuration de l'Intersection Observer
        const observerOptions = {
            root: null, // Le viewport (la fenêtre du navigateur) est la zone racine
            rootMargin: '0px', // Pas de marge supplémentaire autour du viewport
            threshold: 0.1 // Le callback se déclenche quand 10% du footer est visible
                            // Tu peux ajuster cette valeur (ex: 0.5 pour 50%)
        };

        // Fonction de callback exécutée lorsque le footer entre ou sort du viewport
        const observerCallback = (entries, observer) => {
            entries.forEach(entry => {
                // Si le footer est visible dans le viewport
                if (entry.isIntersecting) {
                    scrollToTopBtn.style.display = 'block'; // Montre le bouton
                } else {
                    scrollToTopBtn.style.display = 'none'; // Cache le bouton
                }
            });
        };

        // Crée une nouvelle instance d'Intersection Observer
        const observer = new IntersectionObserver(observerCallback, observerOptions);

        // Demande à l'observateur de surveiller ton footer
        observer.observe(mainFooter);


        // Défilement doux vers le haut au clic du bouton
        scrollToTopBtn.addEventListener('click', function(event) {
            event.preventDefault(); // Empêche le comportement de lien par défaut
            window.scrollTo({
                top: 0, // Remonte tout en haut
                behavior: 'smooth' // Effet de défilement doux
            });
        });
    }
    // --- FIN BLOC 2 ---

});