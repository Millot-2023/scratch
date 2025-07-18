// Fichier: assets/js/script.js

document.addEventListener('DOMContentLoaded', () => {
    // Sélectionne le bouton du menu hamburger
    const navToggle = document.querySelector('.nav-toggle');
    // Sélectionne le menu de navigation lui-même
    const navMenu = document.getElementById('main-nav-menu');

    // Vérifie que les éléments existent bien avant d'essayer d'interagir avec eux
    if (navToggle && navMenu) {
        // Ajoute un écouteur d'événement sur le clic du bouton pour ouvrir/fermer le menu
        navToggle.addEventListener('click', () => {
            const isExpanded = navMenu.classList.contains('active');
            navMenu.classList.toggle('active');
            navToggle.setAttribute('aria-expanded', !isExpanded); // Met à jour l'attribut aria-expanded
            document.body.classList.toggle('no-scroll'); // Empêche le défilement du body
        });

        // Ajoute un écouteur d'événement sur le document pour fermer le menu au clic en dehors
        document.addEventListener('click', (event) => {
            // Si le menu est ouvert ET que le clic n'est NI sur le menu, NI sur le bouton de bascule
            if (navMenu.classList.contains('active') && !navMenu.contains(event.target) && !navToggle.contains(event.target)) {
                navMenu.classList.remove('active');
                navToggle.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('no-scroll');
            }
        });

        // Ajoute un écouteur d'événement pour fermer le menu lorsqu'un lien est cliqué
        navMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                if (navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    navToggle.setAttribute('aria-expanded', 'false');
                    document.body.classList.remove('no-scroll');
                }
            });
        });
    }
});










// Animation au scroll (Fade-in)
document.addEventListener('DOMContentLoaded', () => {
    // Sélectionne tous les éléments avec la nouvelle classe 'animated-content-block'
    const animatedElements = document.querySelectorAll('.animated-content-block');

    const observerOptions = {
        root: null, // utilise le viewport comme conteneur racine
        rootMargin: '0px',
        threshold: 0.1 // L'élément est considéré comme visible à partir de 10% de sa hauteur
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Si l'élément est visible, ajoute la classe 'is-visible'
                entry.target.classList.add('is-visible');
                // Optionnel: Arrête d'observer l'élément une fois qu'il est visible
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe chaque élément à animer
    animatedElements.forEach(element => {
        observer.observe(element);
    });
});