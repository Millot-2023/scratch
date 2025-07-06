// Fichier: assets/js/scroll.js

document.addEventListener('DOMContentLoaded', function() {
    const scrollArrow = document.querySelector('.scroll-down-arrow');
    const targetSection = document.querySelector('#premier-bloc'); 

    if (scrollArrow && targetSection) {
        scrollArrow.addEventListener('click', function(e) {
            e.preventDefault(); // Empêche le comportement de défilement instantané par défaut du lien

            targetSection.scrollIntoView({
                behavior: 'smooth' // Active le défilement fluide
            });
            // Nous n'avons plus besoin de setTimeout ou de window.scrollBy ici.
            // C'est le CSS scroll-margin-top qui gérera l'espace du header.
        });
    }
});