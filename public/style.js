//section responsive navbar
document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    const carouselInner = document.querySelector('.carousel-inner');
    const items = document.querySelectorAll('.carousel-item');
    let index = 0;

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');

        // Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            }
        });

        // Burger Animation
        burger.classList.toggle('toggle');
    });
});
//section sortie du texte 
document.addEventListener('DOMContentLoaded', () => {
    const textContent = document.getElementById('texte');
    const textArray = ["Bienvenue dans EasePaySchool", "La meilleure solution pour Gerer vos paiements de frais de scolarité", "Avec EasePayScholl , plus besoin de courrir derrière les etudiants et elèves pour presenter leurs réçus , plus de faux reçus"];
    let textIndex = 0;
    let charIndex = 0;
    let line = document.createElement("div");
    textContent.appendChild(line);

    function typeText() {
        if (charIndex < textArray[textIndex].length) {
            line.textContent += textArray[textIndex].charAt(charIndex);
            charIndex++;
            setTimeout(typeText, 100);
        } else {
            textIndex++;
            if (textIndex < textArray.length) {
                setTimeout(() => {
                    charIndex = 0;
                    line = document.createElement("div");
                    textContent.appendChild(line);
                    typeText();
                }, 2000);
            } else {
                setTimeout(() => {
                    textContent.innerHTML = "";
                    textIndex = 0;
                    charIndex = 0;
                    line = document.createElement("div");
                    textContent.appendChild(line);
                    typeText();
                }, 2000);
            }
        }
    }

    typeText();
});


//section c'est quoi easepayS
document.addEventListener('DOMContentLoaded', () => {
    const textContent = document.getElementById('easePayTitle');
    const textArray = ["C'EST QUOI EasePaySchool??"];
    let textIndex = 0;
    let charIndex = 0;
    let line = document.createElement("div");
    textContent.appendChild(line);

    function typeText() {
        if (charIndex < textArray[textIndex].length) {
            line.textContent += textArray[textIndex].charAt(charIndex);
            charIndex++;
            setTimeout(typeText, 100);
        } else {
            textIndex++;
            if (textIndex < textArray.length) {
                setTimeout(() => {
                    charIndex = 0;
                    line = document.createElement("div");
                    textContent.appendChild(line);
                    typeText();
                }, 2000);
            } else {
                setTimeout(() => {
                    textContent.innerHTML = "";
                    textIndex = 0;
                    charIndex = 0;
                    line = document.createElement("div");
                    textContent.appendChild(line);
                    typeText();
                }, 2000);
            }
        }
    }

    typeText();
});
//carrousel
const images = document.querySelectorAll('.images img');
const activeImage = document.querySelector('.images img.active');
const texteAnime = document.querySelector('.texte-anime');

let indexImageActive = 0;

function changerImageActive() {
    images[indexImageActive].classList.remove('active');
    indexImageActive = (indexImageActive + 1) % images.length;
    images[indexImageActive].classList.add('active');
}

setInterval(changerImageActive, 3000); // Changer l'image active toutes les 3 secondes
//section pourquoi
document.addEventListener('DOMContentLoaded', () => {
    const textContent = document.getElementById('pourquoi');
    const textArray = ["POURQUOI UTILISER EasePaySchool??"];
    let textIndex = 0;
    let charIndex = 0;
    let line = document.createElement("div");
    textContent.appendChild(line);

    function typeText() {
        if (charIndex < textArray[textIndex].length) {
            line.textContent += textArray[textIndex].charAt(charIndex);
            charIndex++;
            setTimeout(typeText, 100);
        } else {
            textIndex++;
            if (textIndex < textArray.length) {
                setTimeout(() => {
                    charIndex = 0;
                    line = document.createElement("div");
                    textContent.appendChild(line);
                    typeText();
                }, 2000);
            } else {
                setTimeout(() => {
                    textContent.innerHTML = "";
                    textIndex = 0;
                    charIndex = 0;
                    line = document.createElement("div");
                    textContent.appendChild(line);
                    typeText();
                }, 2000);
            }
        }
    }

    typeText();
});
//ceo section
document.addEventListener('DOMContentLoaded', () => {
    const textContent = document.getElementById('ceo');
    const textArray = ["Qui est le CEO de EasePaySchool??"];
    let textIndex = 0;
    let charIndex = 0;
    let line = document.createElement("div");
    textContent.appendChild(line);

    function typeText() {
        if (charIndex < textArray[textIndex].length) {
            line.textContent += textArray[textIndex].charAt(charIndex);
            charIndex++;
            setTimeout(typeText, 100);
        } else {
            textIndex++;
            if (textIndex < textArray.length) {
                setTimeout(() => {
                    charIndex = 0;
                    line = document.createElement("div");
                    textContent.appendChild(line);
                    typeText();
                }, 2000);
            } else {
                setTimeout(() => {
                    textContent.innerHTML = "";
                    textIndex = 0;
                    charIndex = 0;
                    line = document.createElement("div");
                    textContent.appendChild(line);
                    typeText();
                }, 2000);
            }
        }
    }

    typeText();
});
// Afficher le contenu de l'application une fois la page complètement chargée
      // Afficher le contenu de l'application une fois la page complètement chargée
      document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('app-content').style.display = 'none';
    });

    window.addEventListener('load', function() {
        document.getElementById('loading').style.display = 'none';
        document.getElementById('app-content').style.display = 'block';
    });
    //control
    document.addEventListener('DOMContentLoaded', function() {
        const telephoneInput = document.getElementById('telephone');

        telephoneInput.addEventListener('input', function(e) {
            const value = e.target.value;
            const validChars = /^[+0-9\s]*$/; // Permettre seulement les chiffres, les espaces et le signe +

            if (!validChars.test(value)) {
                e.target.value = value.replace(/[^+0-9\s]/g, ''); // Supprimer les caractères non valides
            }

            // Formater le numéro de téléphone
            e.target.value = formatPhoneNumber(e.target.value);
        });

        function formatPhoneNumber(value) {
            // Supprimer les espaces pour le formatage
            const cleaned = ('' + value).replace(/\D/g, '');

            // Ajouter des espaces tous les trois chiffres
            const match = cleaned.match(/^(\+)?(\d{1,3})(\d{1,3})(\d{1,3})(\d{1,3})(\d{1,3})?$/);
            
            if (match) {
                return [match[1], match[2], match[3], match[4], match[5], match[6]].filter(Boolean).join(' ');
            }

            return value;
        }
    });
    // section aide
    document.addEventListener('DOMContentLoaded', () => {
        const textContent = document.getElementById('aide');
        const textArray = ["Trouvez de l'aide ici!"];
        let textIndex = 0;
        let charIndex = 0;
        let line = document.createElement("div");
        textContent.appendChild(line);
    
        function typeText() {
            if (charIndex < textArray[textIndex].length) {
                line.textContent += textArray[textIndex].charAt(charIndex);
                charIndex++;
                setTimeout(typeText, 100);
            } else {
                textIndex++;
                if (textIndex < textArray.length) {
                    setTimeout(() => {
                        charIndex = 0;
                        line = document.createElement("div");
                        textContent.appendChild(line);
                        typeText();
                    }, 2000);
                } else {
                    setTimeout(() => {
                        textContent.innerHTML = "";
                        textIndex = 0;
                        charIndex = 0;
                        line = document.createElement("div");
                        textContent.appendChild(line);
                        typeText();
                    }, 2000);
                }
            }
        }
    
        typeText();
    });
    //lien pour ouvrir l'api
    function openPaymentAPI(apiUrl) {
        window.location.href = apiUrl;
    }
     // Récupérer les paramètres de l'URL
     const urlParams = new URLSearchParams(window.location.search);
     const bankName = urlParams.get('bankName');
     const bankLogo = urlParams.get('bankLogo');

     // Afficher les détails de la banque sélectionnée
     document.getElementById('bank-name').textContent = bankName;
     document.getElementById('bank-logo').src = bankLogo;

     function toggleUniversityFields(show) {
         const universityFields = document.getElementById('university_fields');
         if (show) {
             universityFields.classList.remove('hidden');
         } else {
             universityFields.classList.add('hidden');
         }
     }
             // Validation supplémentaire pour le champ "Somme à payer"
     document.getElementById('amount').addEventListener('input', function() {
         this.value = this.value.replace(/[^0-9]/g, '');
         if (this.value < 0) {
             this.value = 0;
         }
         calculateTotal();
     });
    function calculateTotal() {
         const amount = parseFloat(document.getElementById('amount').value) || 0;
         const serviceFee = parseFloat(document.getElementById('service_fee').value);
         document.getElementById('total_amount').value = amount + serviceFee;
     }

     // Calculer le total initialement
     calculateTotal();
     // Définir l'action du formulaire après le chargement du document
     document.addEventListener('DOMContentLoaded', function() {
         const today = new Date().toISOString().split('T')[0];
         document.getElementById('payment_date').value = today;

         const form = document.getElementById('payment-form');
         form.action = `/bank/${bankName}`; // Définir l'action du formulaire dynamiquement
     });

     