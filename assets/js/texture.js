document.addEventListener('DOMContentLoaded', () => {
    // Sélectionne toutes les cartes avec la classe 'flip-card-js'
    const cards = document.querySelectorAll('.flip-card-js');

    cards.forEach(card => {
        const frontFace = card.querySelector('.card-front');
        const backFace = card.querySelector('.card-back');
        const showCssBtn = frontFace.querySelector('.title-btn-js'); // Le titre sur le recto déclenche l'affichage
        const closeBtn = backFace.querySelector('.close-btn-js'); // Le bouton de fermeture sur le verso

        // Cible l'élément <pre><code> par la classe pour toutes les cartes.
        // C'est l'élément où le code CSS sera affiché.
        const cssCodeDisplay = backFace.querySelector('.card-css-code-display'); 

        // Cible le bouton de copie par sa classe 'back-button'.
        const copyCssButton = backFace.querySelector('.back-button'); 

        /**
         * Récupère les règles CSS calculées d'un élément et les formate en chaîne CSS.
         * Cette fonction est utilisée pour l'affichage complet du code.
         * @param {HTMLElement} element L'élément HTML dont on veut récupérer le CSS.
         * @returns {string} Une chaîne de caractères représentant les règles CSS.
         */
        function getCssRules(element) {
            const computedStyle = window.getComputedStyle(element);
            let cssText = '';

            // Liste des propriétés CSS à extraire.
            const propertiesToExtract = [
                'background-color', 'background-image', 'border', 'border-radius',
                'box-shadow', 'color', 'font-family', 'font-size', 'font-weight',
                'padding', 'margin', 'width', 'height', 'display', 'justify-content',
                'align-items', 'text-align', 'position', 'top', 'left', 'right',
                'bottom', 'transform', 'transition', 'overflow', 'z-index',
                'backdrop-filter', 'opacity', 'cursor', 'flex-direction', 'flex',
                'line-height', 'text-shadow', 'box-sizing', 'white-space', 'word-break',
                'max-height', 'background', 'transform-origin', 'perspective', 'backface-visibility'
            ];
            
            // Construit un sélecteur CSS pertinent pour l'élément.
            let selector = '';
            if (element.id && element.id !== '') {
                selector = `#${element.id}`;
            } else {
                const classList = Array.from(element.classList);
                const cardFrontSpecificClass = classList.find(cls => cls.startsWith('card') && cls.length > 4); 

                if (classList.includes('card-face') && classList.includes('card-front') && cardFrontSpecificClass) {
                    selector = `.card-face.card-front.${cardFrontSpecificClass}`;
                } else if (classList.includes('card-face') && classList.includes('card-front')) {
                    selector = `.card-face.card-front`; 
                } else if (classList.includes('card-face') && classList.includes('card-back')) {
                    selector = `.card-face.card-back`; 
                }
                else if (classList.length > 0) {
                    selector = classList.map(cls => `.${cls}`).join('');
                } else {
                    selector = element.tagName.toLowerCase();
                }
            }

            cssText += `${selector} {\n`;

            propertiesToExtract.forEach(prop => {
                const value = computedStyle.getPropertyValue(prop);
                if (value && value !== 'initial' && value !== 'unset' && value !== 'inherit' && value !== 'auto' && value !== 'none') {
                    if (prop === 'background-image' && value.includes('linear-gradient')) {
                        const gradientParts = value.match(/linear-gradient\(([^)]+)\)/);
                        if (gradientParts && gradientParts[1]) {
                            cssText += `    ${prop}: linear-gradient(${gradientParts[1]});\n`;
                        } else {
                            cssText += `    ${prop}: ${value};\n`;
                        }
                    } else {
                        cssText += `    ${prop}: ${value};\n`;
                    }
                }
            });
            cssText += `}\n`;
            return cssText;
        }

        // Écouteur d'événement pour le clic sur le titre du recto (pour retourner la carte et afficher le code)
        if (showCssBtn && cssCodeDisplay) { 
            showCssBtn.addEventListener('click', () => {
                // Pour l'affichage, nous utilisons toujours la fonction getCssRules pour un code complet
                const cssContentForThisCard = getCssRules(frontFace);
                cssCodeDisplay.textContent = cssContentForThisCard; 
                cssCodeDisplay.style.display = 'block'; 
                card.classList.add('flipped'); 
            });
        }

        // Écouteur d'événement pour le bouton de fermeture du verso (pour revenir au recto)
        if (closeBtn && cssCodeDisplay) { 
            closeBtn.addEventListener('click', () => {
                card.classList.remove('flipped'); 
                cssCodeDisplay.style.display = 'none'; 
            });
        }

        // Écouteur d'événement pour le bouton "Copiez le code"
        if (copyCssButton && cssCodeDisplay) { 
            copyCssButton.addEventListener('click', () => {
                // *** MODIFICATION CRUCIALE ICI : Récupérer le code de l'attribut data-css-code ***
                const codeToCopy = frontFace.dataset.cssCode; 
                // **************************************************************************

                if (codeToCopy) { // Vérifiez que l'attribut existe et n'est pas vide
                    navigator.clipboard.writeText(codeToCopy)
                        .then(() => {
                            const originalText = copyCssButton.textContent;
                            copyCssButton.textContent = 'Copié !';
                            setTimeout(() => {
                                copyCssButton.textContent = originalText;
                            }, 2000);
                            console.log('Code CSS exact copié dans le presse-papiers !'); 
                        })
                        .catch(err => {
                            console.error('Erreur lors de la copie du code : ', err);
                            alert('Impossible de copier le code. Assurez-vous que le navigateur le supporte ou copiez manuellement.');
                        });
                } else {
                    console.warn('L\'attribut data-css-code n\'a pas été trouvé ou est vide sur la carte. Assurez-vous de l\'avoir ajouté dans votre HTML.');
                    alert('Aucun code CSS à copier pour cette carte.');
                }
            });
        }
    });
});