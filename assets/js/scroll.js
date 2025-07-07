// Fichier: assets/js/scroll.js

document.addEventListener('DOMContentLoaded', function() {
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
});