 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="/style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('img/site.webmanifest')}}">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
<style>
        .buttons {
            display: flex;
            gap: 20px;
        }
        .buttons a {
            text-decoration: none;
        }
        .buttons img {
            width: 150px;
        }
    </style>
 
    <title>EasePayShool - Accueil</title>
  </head>
  <body>
      
    <!-- Conteneur de chargement -->
    <div id="loading">
        <div class="spinner"></div>
    </div>
   <div id="app-content">       
    <nav>
    <img src="{{ asset('img/logofin.jpg') }}" class="circular-logo" alt="Logo">
    <ul class="nav-links">
            <li><a href="/">Accueil</a></li>
                <li><a href="{{route('pay.about')}}">A propos</a></li>
                <li><a href="{{route('ecole.accueil')}}">Ecole</a></li>
                <li><a href="{{route('banque.login')}}">Banque</a></li>
                <li><a href="{{route('pay.contact')}}">Conctact</a></li>
                <li><a href="{{route('pay.help')}}">Aide</a></li>
     </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
</nav>

     
<section class="section">
        <div class="images">
            <img src="{{asset('img/istockphoto-1473801247-170667a.webp')}}" alt="Image 1" class="active">
            <img src="{{asset('img/istockphoto-1440149723-170667a.webp')}}" alt="Image 2">
            <img src="{{asset('img/istockphoto-1394347332-170667a.webp')}}" alt="Image 3">
        </div>
        <div class="texte">
            <p class="texte-anime">
                <h2 id="texte"></h2>
            </p>
         </div>   
    </section>
     <!-- debut  de c'est quoi  -->
    <div class="container section-info" data-aos="fade-up">
        <h2 id="easePayTitle"></h2>
        <p>EasePaySchool est une plateforme innovante conçue pour faciliter les paiements scolaires. Elle vous evite les problèmes de faux réçus , d'avoir une longue ligne pour la validation des réçus et vous garantis une gestion des paiement de frais de scolarité efficace.</p>
        <div class="button-container">
            <a href="{{route('ecole.compte')}}"><button class="btn btn-primary" >Crée un Compte pour mon ecole</button> </a>
            
        </div>
    </div>
      
    >

      <!-- deput de  pourquoi utiliser   -->
      <section class="easypay-section">
        <div class="content">
            <h2 id="pourquoi"></h2>
            <p>EasePaySchool offre une solution simple et efficace pour gérer les paiements scolaires , vous evite des déplacement unitile et en bonus , vous n'avez plus besoin de presenter les reçus à l'établissement. Avec notre application , les écoles peuvent suivre les paiements et les rappels sont automatiques pour assurer que tous les paiements sont à jour.</p>
            <div class="buttons">
                <a href="#" class="playstore">
                    <img src="{{ asset('img/1.png') }}" alt="Play Store"id="playstore">
                </a>
                <a href="#" class="appstore">
                    <img src="{{ asset('img/2.png') }}" alt="App Store"id="appstore">
                </a>
            </div>
        </div>
    </section>

    <!-- fin de pourquoi -->
    <!-- footer -->
      <footer>
          <footer>
   <div class="content">
     <div class="left box">
       <div class="upper">
         <div class="topic">A Propos</div>
         <p>EasePaySchool est une plate forme qui vous evite des déplacements unitiles.</p>
       </div>
       <div class="lower">
         <div class="topic">Contact </div>
         <div class="phone">
           <a href="#"><i class="fas fa-phone-volume"></i>+237 659 454 737 / 620 690 733</a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-envelope"></i>easepayschool@dev.gmail</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">Nos Services</div>
       <div><a href="#">Web Design, Development</a></div>
       <div><a href="#">Sécurité Informatique</a></div>
       <div><a href="#">Developpement Dekstop</a></div>
       <div><a href="#">Developpement Mobile</a></div>
       <div><a href="#">Mobile Application Design</a></div>
       <div><a href="#">Vidéo Surveillance</a></div>
       <div><a href="#">Réseau Informatique</a></div>
     </div>
     <div class="right box">
       <div class="topic">Nous Suivre</div>
       <form action="#">
         <input type="text" placeholder="Enter email address">
         <input type="submit" name="" value="Envoyer">
         <div class="media-icons">
           <a href="#"><i class="fab fa-facebook-f"></i> <img classe="icone" src="{{asset('img/facebook.png')}}"  width="30px" height="30px"></a>
           <a href="#"><i class="fab fa-instagram"></i><img classe="icone" src="{{asset('img/logotik.jfif')}}"  width="30px" height="30px"></a>
           <a href="#"><i class="fab fa-twitter"></i><img classe="icone" src="{{asset('img/logox.png')}}"  width="30px" height="30px"></a>
           <a href="#"><i class="fab fa-youtube"></i><img classe="icone" src="{{asset('img/youtubet.png')}}" width="30px" height="30px"></a>
           <a href="#"><i class="fab fa-linkedin-in"><img classe="icone" src="{{asset('img/logolin.png')}}" width="30px" height="30px"></i></a>
         </div>
       </form>
     </div>
   </div>
   <div class="bottom">
     <p>Copyright &#169; 2024 <a href="#">EasePaySchool</a> All rights reserved</p>
   </div>
 </footer>
  </footer>

  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="/style.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sélection des éléments
            const playstoreLink = document.getElementById('playstore');
            const appstoreLink = document.getElementById('appstore');

            // Fonction pour afficher le message
            function showMessage(event) {
                event.preventDefault();
                alert('L\'application mobile n\'est pas encore disponible.');
            }

            // Ajout des écouteurs d'événements
            playstoreLink.addEventListener('click', showMessage);
            appstoreLink.addEventListener('click', showMessage);
        });
    </script>
   
  </body>
</html>