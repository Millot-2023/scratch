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
                <li><a href="css.php">CSS</a></li> 
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
            <h1>Au service de vos idées<br>Articles</h1>
        </div>
        <a href="#premier-bloc" class="scroll-down-arrow" aria-label="Faire défiler vers le contenu">
            <i class="fas fa-chevron-down"></i>
        </a>
        <picture>
            <source srcset="assets/images/hero-2560x1440-index.png" media="(min-width: 769px)">
            <img src="assets/images/hero-2560x1440-index.png" alt="">
        </picture>
    </div>
</section>

<main class="main-content-wrapper" id="procedure-git"><!--INTRODUCTION-->
    <div class="introduction animated-content-block" id="premier-bloc">
        <h1 class="h1Black">Page Articles</h1>

        <h2><span class="material-symbols-outlined">construction</span>&nbsp;Introduction - 2 Blocs</h2>

        <div class="introduction-inner">
                <p>Mon parcours débute là où l'art prend forme sous les doigts : dans les ateliers de dessin,de peinture et de sculpture. C'est avec le crayon, le pinceau et la terre que j'ai appris les principes fondamentaux de la composition, des volumes, des couleurs et des lumières.Ces années dédiées aux arts plastiques, enrichies par des expériences en modélisme,sont la pierre angulaire de ma vision créative et nourrissent chaque projet numériqueavec une compréhension intuitive de l'esthétique et de la forme.</p>
                <p>Je parcours débute là où l'art prend forme sous les doigts : dans les ateliers de dessin,de peinture et de sculpture. C'est avec le crayon, le pinceau et la terre que j'ai appris les principes fondamentaux de la composition, des volumes, des couleurs et des lumières.Ces années dédiées aux arts plastiques, enrichies par des expériences en modélisme,sont la pierre angulaire de ma vision créative et nourrissent chaque projet numériqueavec une compréhension intuitive de l'esthétique et de la forme.</p>
            </div>
        <p class="text-center-with-margin">
        <a href="#" class="buttonBox ">BOUTON PRINCIPAL</a>
        </p>
    </div>

<!--
<h2><span class="material-symbols-outlined">construction</span>&nbsp;4 Blocs</h2>
<div class="quatresBlocs">
    <div class="deuxBlocs">

        <div class="deuxBlocsa paragraphe-inner">
            <picture class="">
                <source srcset="assets/images/photo-640x480.png" media="(min-width: 1200px)" type="image/jpeg">
                <source srcset="assets/images/photo-640x480.png" media="(min-width: 768px)" type="image/jpeg">
                <img src="assets/images/photo-1200x960.png" alt="Description de l'image" loading="lazy">
            </picture>

            <h4>Bloc01</h4>
            <p>Mon parcours débute là où l'art prend forme sous les doigts : dans les ateliers de dessin,de peinture et de sculpture. C'est avec le crayon, le pinceau et la terre que j'ai appris les principes fondamentaux de la composition, des volumes, des couleurs et des lumières.Ces années dédiées aux arts plastiques, enrichies par des expériences en modélisme,sont la pierre angulaire de ma vision créative et nourrissent chaque projet numériqueavec une compréhension intuitive de l'esthétique et de la forme.
            </p>
            <p class="text-center-with-margin">
                <a href="#" class="buttonBox ">Bouton</a>
            </p>
        </div>

        <div class="deuxBlocsb paragraphe-inner">
            <picture class="">
                <source srcset="assets/images/photo-640x480.png">
                <source srcset="assets/images/photo-640x480.png" media="(min-width: 768px)" type="image/jpeg">
                <img src="assets/images/photo-1200x960.png" alt="Description de l'image" loading="lazy">
            </picture>

        <h4>Bloc02</h4>
        <p>Mon parcours débute là où l'art prend forme sous les doigts : dans les ateliers de dessin,de peinture et de sculpture. C'est avec le crayon, le pinceau et la terre que j'ai appris les principes fondamentaux de la composition, des volumes, des couleurs et des lumières.Ces années dédiées aux arts plastiques, enrichies par des expériences en modélisme,sont la pierre angulaire de ma vision créative et nourrissent chaque projet numériqueavec une compréhension intuitive de l'esthétique et de la forme.
        </p>
        <p class="text-center-with-margin">
            <a href="#" class="buttonBox ">Bouton</a>
        </p>
        
        </div>
        </div>

    <div class="deuxBlocs">
        <div class="deuxBlocsa paragraphe-inner">
            <picture class="">
                <source srcset="assets/images/photo-640x480.png" media="(min-width: 1200px)" type="image/jpeg">
                <source srcset="assets/images/photo-640x480.png" media="(min-width: 768px)" type="image/jpeg">
                <img src="assets/images/photo-1200x960.png" alt="Description de l'image" loading="lazy">
            </picture>
            <h4>Bloc03</h4>
                <p>Mon parcours débute là où l'art prend forme sous les doigts : dans les ateliers de dessin,de peinture et de sculpture. C'est avec le crayon, le pinceau et la terre que j'ai appris les principes fondamentaux de la composition, des volumes, des couleurs et des lumières.Ces années dédiées aux arts plastiques, enrichies par des expériences en modélisme,sont la pierre angulaire de ma vision créative et nourrissent chaque projet numériqueavec une compréhension intuitive de l'esthétique et de la forme.</p>
            <p class="text-center-with-margin">
                <a href="#" class="buttonBox ">Bouton</a>
            </p>
                   
        </div>
        <div class="deuxBlocsb paragraphe-inner">
            <picture class="">
                <source srcset="assets/images/photo-640x480.png">
                <source srcset="assets/images/photo-640x480.png" media="(min-width: 768px)" type="image/jpeg">
                <img src="assets/images/photo-1200x960.png" alt="Description de l'image" loading="lazy">
            </picture>
            <h4>Bloc04</h4>
                <p>Mon parcours débute là où l'art prend forme sous les doigts : dans les ateliers de dessin,de peinture et de sculpture. C'est avec le crayon, le pinceau et la terre que j'ai appris les principes fondamentaux de la composition, des volumes, des couleurs et des lumières.Ces années dédiées aux arts plastiques, enrichies par des expériences en modélisme,sont la pierre angulaire de ma vision créative et nourrissent chaque projet numériqueavec une compréhension intuitive de l'esthétique et de la forme.</p>
            <p class="text-center-with-margin">
                <a href="#" class="buttonBox ">Bouton</a>
            </p>
        </div>
    </div>
</div>
-->


<h2><span class="material-symbols-outlined">construction</span>&nbsp;Les dégradés</h2>

<div class="cards-wrapperX4">
        <div class="cards-wrapper2a">
            <div class="card-container">
                <div class="card flip-card-js">

                    <div class="card-face card-front card01" data-css-code=".card01 { background: linear-gradient(45deg, blue, green); }">
                        <h1 class="front-title title-btn-js">CSS 01...</h1>
                    </div>

                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">CSS 01 - back</h2>
                            <pre><code class="card-css-code-display"></code></pre>
                        </div>
                        <div class="button-container">
                            <button class="back-button">Copiez le code</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card flip-card-js">
                    <div class="card-face card-front card02" data-css-code=".card02 { background: linear-gradient(45deg, orange, red); }">
                        <h1 class="front-title title-btn-js">CSS 02...</h1>
                    </div>
                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">CSS 02 - back</h2>
                            <pre><code class="card-css-code-display"></code></pre>
                        </div>
                        <div class="button-container">
                            <button class="back-button">Copiez le code</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards-wrapper2b">
            <div class="card-container">
                <div class="card flip-card-js">

                    <div class="card-face card-front card03" data-css-code=".card03 { background: linear-gradient(45deg, purple, pink); }"> 

                        <h1 class="front-title title-btn-js">CSS 03...</h1>
                    </div>
                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">CSS 03 - back</h2>
                            <pre><code class="card-css-code-display"></code></pre>
                        </div>
                        <div class="button-container">
                            <button class="back-button">Copiez le code</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card flip-card-js">
                    <div class="card-face card-front card04" data-css-code=".card04 { background: linear-gradient(45deg, brown, green); }"> 
                        <h1 class="front-title title-btn-js">CSS 04...</h1>
                    </div>
                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">CSS 04 - back</h2>
                            <pre><code class="card-css-code-display"></code></pre>
                        </div>
                        <div class="button-container">
                            <button class="back-button">Copiez le code</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


    <div class="cards-wrapperX4">

        <div class="cards-wrapper2a">
            <div class="card-container">
                <div class="card flip-card-js">

                    <div class="card-face card-front card05" data-css-code=".card05 { background: linear-gradient(45deg, black, grey); }">

                        <h1 class="front-title title-btn-js">CSS 05...</h1>
                    </div>
                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">CSS 05 - back</h2>
                            <pre><code class="card-css-code-display"></code></pre>
                        </div>
                        <div class="button-container">
                            <button class="back-button">Copiez le code</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card flip-card-js">
                    <div class="card-face card-front card06" data-css-code=".card06 { background: linear-gradient(45deg, yellow, red); }">
                        <h1 class="front-title title-btn-js">CSS 06...</h1>
                    </div>
                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">CSS 06 - back</h2>
                            <pre><code class="card-css-code-display"></code></pre>
                        </div>
                        <div class="button-container">
                            <button class="back-button">Copiez le code</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards-wrapper2b">
            <div class="card-container">
                <div class="card flip-card-js">

                    <div class="card-face card-front card07" data-css-code=".card07 { background: linear-gradient(45deg, purple, yellow); }"> 

                        <h1 class="front-title title-btn-js">CSS 07...</h1>
                    </div>
                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">CSS 07 - back</h2>
                            <pre><code class="card-css-code-display"></code></pre>
                        </div>
                        <div class="button-container">
                            <button class="back-button">Copiez le code</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card flip-card-js">
                    <div class="card-face card-front card08" data-css-code=".card08 { background: linear-gradient(45deg, brown, black); }"> 
                        <h1 class="front-title title-btn-js">CSS 08...</h1>
                    </div>
                    <div class="card-face card-back">
                        <div class="close-btn close-btn-js"></div>
                        <div class="back-content">
                            <h2 class="back-title">CSS 08- back</h2>
                            <pre><code class="card-css-code-display"></code></pre>
                        </div>
                        <div class="button-container">
                            <button class="back-button">Copiez le code</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











</main>

<script src="assets/js/texture.js"></script>

<footer class="main-footer">
    <div class="footer-content">
        <p>&copy; 2025 Christophe MILLOT. Tous droits réservés.</p>
        <div class="social-links">
            <a href="https://www.linkedin.com/in/christophemillot/" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>

    <script src="assets/js/script.js"></script> 
    <script src="assets/js/scroll.js"></script> 

    </footer>
</body>
</html>