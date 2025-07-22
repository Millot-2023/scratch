<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Scratch</title>
    <meta name="description" content="Découvrez le catalogue de mes réalisations graphiques et mes projets de développement web. Portfolio de Christophe MILLOT.">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://picsum.photos">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        /* Votre CSS existant pour .material-symbols-outlined */
        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined' !important;
            font-size: 48px !important;
            letter-spacing: normal !important;
            text-transform: none !important;
            white-space: nowrap !important;
            word-wrap: normal !important;
            direction: ltr !important;
            -webkit-font-smoothing: antialiased !important;
            text-rendering: optimizeLegibility !important;
            -moz-osx-font-smoothing: grayscale !important;
            
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0
                !important; 
            
            display: inline-block !important;
            color: yellow !important;
            position: relative;
            top: 5px;
            -webkit-text-stroke: 1px black;
            text-stroke: 1px black;
            -webkit-text-fill-color: white;
            text-fill-color: transparent;
        }

        /* Votre CSS existant pour .stamp */
        .stamp {
            --r: 15px;
            padding: var(--r);
            background: #ffffff;
            mask:
                radial-gradient(50% 50%, #0000 66%, #000 67%) round
                    var(--r) var(--r)/calc(2*var(--r)) calc(2*var(--r)),
                conic-gradient(#000 0 0) content-box;
            transform: rotate(0deg);
            transition: transform 0.4s ease-in-out;
        }

        .stamp:hover {
            cursor: pointer;
            transform: rotate(5deg);
        }


    </style>
</head>

<body>

    <header class="main-header">
        <nav class="main-nav">
            <a href="index.php" class="logo">
                <i class="fa-solid fa-hammer">
                </i>&nbsp;Site vers Scratch</a> 
            <div class="nav-right-container">
                <ul class="nav-menu" id="main-nav-menu">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="articles.php">Articles</a></li> 
                    <li><a href="templates.php">Templates</a></li> 
                </ul>
                <button class="nav-toggle" aria-label="Ouvrir le menu de navigation" aria-expanded="false" aria-controls="main-nav-menu">
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                </button>
            </div>
        </nav>
    </header>

    <section class="hero-section" id="hero-section">
        <div class="hero-image-container">
            <div class="hero-text">
                <h1>Au service de vos idées</h1>
            </div>
            <a href="#premier-bloc" class="scroll-down-arrow" aria-label="Faire défiler vers le contenu">
                <i class="fas fa-chevron-down"></i>
            </a>
            <picture>
                <source srcset="assets/images/hero-2560x1440-index.png" media="(min-width: 769px)">
                <img src="assets/images/hero-2560x1440-index.png" alt="">
            </picture>
    </section>

<main class="main-content-wrapper" id="procedure-git">


    <div class="introduction animated-content-block" id="premier-bloc">
        <h1 class="h1Black">Titre Principal</h1>
        <h2><span class="material-symbols-outlined">construction</span>&nbsp;Introduction</h2>
            <p>Mon parcours débute là où l'art prend forme sous les doigts : dans les ateliers de dessin,de peinture et de sculpture. C'est avec le crayon, le pinceau et la terre que j'ai apprisles principes fondamentaux de la composition, des volumes, des couleurs et des lumières.Ces années dédiées aux arts plastiques, enrichies par des expériences en modélisme,sont la pierre angulaire de ma vision créative et nourrissent chaque projet numériqueavec une compréhension intuitive de l'esthétique et de la forme.

            </p>
            <p class="text-center-with-margin">
                <a href="#" class="buttonBox ">BOUTON PRINCIPAL</a>
            </p>
    </div>

<!--
<div class="cards-wrapperX4">
    <div class="card-container">
        <div class="card flip-card-js">
            <div class="card-face card-front card01">
                <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
            </div>
            <div class="card-face card-back">
                <div class="close-btn close-btn-js"></div>
                <div class="back-content">
                    <h2 class="back-title">Explorez le Monde</h2>
                    <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                </div>
                <div class="button-container">
                    <button class="back-button" onclick="alert('Aventure commencée!')">
                    Voir plus...
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card flip-card-js">
            <div class="card-face card-front  card02">
                <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
            </div>
            <div class="card-face card-back">
                <div class="close-btn close-btn-js"></div>
                <div class="back-content">
                    <h2 class="back-title">Explorez le Monde</h2>
                    <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                </div>
                <div class="button-container">
                    <button class="back-button" onclick="alert('Aventure commencée!')">
                    Voir plus...
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card flip-card-js">
            <div class="card-face card-front card03">
                <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
            </div>
            <div class="card-face card-back">
                <div class="close-btn close-btn-js"></div>
                <div class="back-content">
                    <h2 class="back-title">Explorez le Monde</h2>
                    <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                </div>
                <div class="button-container">
                    <button class="back-button" onclick="alert('Aventure commencée!')">
                    Voir plus...
                    </button>
                </div>
            </div>

        </div>
    </div>
    <div class="card-container">
        <div class="card flip-card-js">

            <div class="card-face card-front  card04">
                <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
            </div>

            <div class="card-face card-back">
                <div class="close-btn close-btn-js"></div>
                <div class="back-content">
                    <h2 class="back-title">Explorez le Monde</h2>
                    <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                </div>
                <div class="button-container">
                    <button class="back-button" onclick="alert('Aventure commencée!')">
                    Voir plus...
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>-->



<!--<div class="cards-wrapperX4">
    
    <div class="cards-wrapper2a">
            <div class="card-container">

                <div class="card flip-card-js">

                    <div class="card-face card-front">
                        <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                    </div>

                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">Explorez le Monde</h2>
                            <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                        </div>
                        <div class="button-container">
                            <button class="back-button" onclick="alert('Aventure commencée!')">
                            Voir plus...
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-container">
                
                <div class="card flip-card-js">

                    <div class="card-face card-front">
                        <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                    </div>

                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">Explorez le Monde</h2>
                            <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                        </div>
                        <div class="button-container">
                            <button class="back-button" onclick="alert('Aventure commencée!')">
                            Voir plus...
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    <div class="cards-wrapper2b">
            <div class="card-container">

                <div class="card flip-card-js">

                    <div class="card-face card-front">
                        <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                    </div>

                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">Explorez le Monde</h2>
                            <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                        </div>
                        <div class="button-container">
                            <button class="back-button" onclick="alert('Aventure commencée!')">
                            Voir plus...
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-container">
                
                <div class="card flip-card-js">

                    <div class="card-face card-front">
                        <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                    </div>

                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">Explorez le Monde</h2>
                            <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                        </div>
                        <div class="button-container">
                            <button class="back-button" onclick="alert('Aventure commencée!')">
                            Voir plus...
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>-->
<div class="cards-wrapperX4">
    
    <div class="cards-wrapper2a">




        <div class="card-container">
            <div class="card flip-card-js">
                <div class="card-face card-front card01">
                <h1 class="front-title title-btn-js"><!--Voir<br>Le code-->CSS ...</h1>
                </div>
                <div class="card-face card-back">
                <div class="close-btn close-btn-js"></div>
                <div class="back-content">
                    <h2 class="back-title">CSS 01- back</h2>
                    <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                </div>
                <div class="button-container">
                    <button class="back-button" onclick="alert('Aventure commencée!')">
                    Copiez le code
                    </button>
                </div>
                </div>
            </div>
        </div>
        






        <div class="card-container">
            <div class="card flip-card-js">
                <div class="card-face card-front card02">
                <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                </div>
                <div class="card-face card-back">
                <div class="close-btn close-btn-js"></div>
                <div class="back-content">
                    <h2 class="back-title">Explorez le Monde</h2>
                    <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                </div>
                <div class="button-container">
                    <button class="back-button" onclick="alert('Aventure commencée!')">
                    Voir plus...
                    </button>
                </div>
                </div>
            </div>
        </div>

    </div>

    <div class="cards-wrapper2b">
            <div class="card-container">

                <div class="card flip-card-js">

                    <div class="card-face card-front card03">
                        <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                    </div>

                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">Explorez le Monde</h2>
                            <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                        </div>
                        <div class="button-container">
                            <button class="back-button" onclick="alert('Aventure commencée!')">
                            Voir plus...
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-container">
                
                <div class="card flip-card-js">

                    <div class="card-face card-front card04">
                        <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                    </div>

                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">Explorez le Monde</h2>
                            <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                        </div>
                        <div class="button-container">
                            <button class="back-button" onclick="alert('Aventure commencée!')">
                            Voir plus...
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--
<div class="cards-wrapperX4">
    
    <div class="cards-wrapper2a">
            <div class="card-container">

                <div class="card flip-card-js">
                    <div class="card-face card-front card01">
                        <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                    </div>
                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">Explorez le Monde</h2>
                            <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                        </div>
                        <div class="button-container">
                            <button class="back-button" onclick="alert('Aventure commencée!')">
                            Voir plus...
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card flip-card-js">
                    <div class="card-face card-front card02">
                        <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                    </div>
                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">Explorez le Monde</h2>
                            <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                        </div>
                        <div class="button-container">
                            <button class="back-button" onclick="alert('Aventure commencée!')">
                            Voir plus...
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="cards-wrapper2b">
            <div class="card-container">
                <div class="card flip-card-js">
                    <div class="card-face card-front card03">
                        <h1 class="front-title title-btn-js">Découvrez2<br>L'Aventure</h1>
                    </div>
                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">Explorez le Monde</h2>
                            <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                        </div>
                        <div class="button-container">
                            <button class="back-button" onclick="alert('Aventure commencée!')">
                            Voir plus...
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card flip-card-js">
                    <div class="card-face card-front  card04">
                        <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                    </div>
                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">Explorez le Monde</h2>
                            <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                        </div>
                        <div class="button-container">
                            <button class="back-button" onclick="alert('Aventure commencée!')">
                            Voir plus...
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>-->


<!--OK--> 
    <!--<div class="cards-wrapper">
       
        <div class="card-container">

            <div class="card flip-card-js">

                <div class="card-face card-front">
                    <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                </div>

                <div class="card-face card-back">
                    <div class="close-btn close-btn-js"></div>
                    <div class="back-content">
                        <h2 class="back-title">Explorez le Monde</h2>
                        <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                    </div>
                    <div class="button-container">
                        <button class="back-button" onclick="alert('Aventure commencée!')">
                        Voir plus...
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-container">
            
            <div class="card flip-card-js">

                <div class="card-face card-front">
                    <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                </div>

                <div class="card-face card-back">
                    <div class="close-btn close-btn-js"></div>
                    <div class="back-content">
                        <h2 class="back-title">Explorez le Monde</h2>
                        <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                    </div>
                    <div class="button-container">
                        <button class="back-button" onclick="alert('Aventure commencée!')">
                        Voir plus...
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-container">
            
            <div class="card flip-card-js">

                <div class="card-face card-front">
                    <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                </div>

                <div class="card-face card-back">
                    <div class="close-btn close-btn-js"></div>
                    <div class="back-content">
                        <h2 class="back-title">Explorez le Monde</h2>
                        <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                    </div>
                    <div class="button-container">
                        <button class="back-button" onclick="alert('Aventure commencée!')">
                        Voir plus...
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-container">
            
            <div class="card flip-card-js">

                <div class="card-face card-front">
                    <h1 class="front-title title-btn-js">Découvrez<br>L'Aventure</h1>
                </div>

                <div class="card-face card-back">
                    <div class="close-btn close-btn-js"></div>
                    <div class="back-content">
                        <h2 class="back-title">Explorez le Monde</h2>
                        <p class="back-text">Partez à la découverte de paysages époustouflants et d'aventures inoubliables.</p>
                    </div>
                    <div class="button-container">
                        <button class="back-button" onclick="alert('Aventure commencée!')">
                        Voir plus...
                        </button>
                    </div>
                </div>

            </div>
        </div>
      
    </div>
-->

</main>


<footer class="main-footer">
    <div class="footer-content">
        <p>&copy; 2025 Christophe MILLOT. Tous droits réservés.</p>
        <div class="social-links">
            <a href="https://www.linkedin.com/in/christophemillot/" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>


    <script src="assets/js/script.js"></script>
    <script src="assets/js/scroll.js"></script> 

    <script>
    // 1. Sélectionne TOUTES les cartes avec la classe 'flip-card-js'
    //    document.querySelectorAll() retourne une NodeList de tous les éléments correspondants.
    const cards = document.querySelectorAll('.flip-card-js');

    // 2. Parcourt chaque carte trouvée dans la NodeList
    //    Pour chaque 'card' dans la collection 'cards', nous allons configurer ses écouteurs.
    cards.forEach(card => {
        // 3. À l'intérieur de la carte actuellement traitée, trouve ses éléments de contrôle spécifiques
        //    'card.querySelector()' est utilisé ici pour chercher UNIQUEMENT à l'intérieur de la carte actuelle.
        const titleBtn = card.querySelector('.title-btn-js');
        const closeBtn = card.querySelector('.close-btn-js');
        
        // 4. Déclare une variable d'état propre à chaque carte pour gérer son état de retournement.
        //    Chaque carte aura son propre 'isFlipped'.
        let isFlipped = false; 

        // 5. Attache un écouteur d'événement 'click' au titre de la face avant de cette carte.
        if (titleBtn) { // Vérifie que l'élément 'titleBtn' existe pour éviter des erreurs.
            titleBtn.addEventListener('click', function(e) {
                e.stopPropagation(); // Empêche l'événement de se propager à des éléments parents.
                if (!isFlipped) { // Si la carte n'est pas déjà retournée...
                    card.classList.add('flipped'); // ...ajoute la classe 'flipped' pour l'animation.
                    isFlipped = true; // Met à jour l'état de cette carte.
                }
            });
        }

        // 6. Attache un écouteur d'événement 'click' au bouton de fermeture de la face arrière de cette carte.
        if (closeBtn) { // Vérifie que l'élément 'closeBtn' existe.
            closeBtn.addEventListener('click', function(e) {
                e.stopPropagation(); // Empêche l'événement de se propager.
                card.classList.remove('flipped'); // Retire la classe 'flipped' pour l'animation inverse.
                isFlipped = false; // Met à jour l'état de cette carte.
            });
        }
    });
    </script>    
</footer>
</body>
</html>