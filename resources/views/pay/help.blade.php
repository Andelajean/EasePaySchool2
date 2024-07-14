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
<!-- -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .help-section {
            padding: 2rem 1rem;
        }
        .accordion-button:focus {
            box-shadow: none;
        }
        .accordion-button::after {
            display: none;
        }
        .accordion-button.collapsed::before {
            content: '\002B';
        }
        .accordion-button::before {
            content: '\2212';
        }
        .accordion-item {
            border: none;
        }
        @media (max-width: 768px) {
            .help-section h2 {
                font-size: 1.5rem;
            }
        }
    </style>
 
    <title>EasePayShool - Aide</title>
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
            
   

    <section class="help-section container my-5">
        <h2 class="text-center" id="aide"></h2>
        <div class="accordion" id="accordionHelp">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Question 1: Comment Ajouter Mon Ecole sur EasePaySchool?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">
                        Pour ajouter votre ecole sur EasePaySchool, cliquez sur le bouton "Compte pour ecole" en haut à droite de la page d'accueil pour ecole et remplissez le formulaire en renseignant le nom de votre ecole , vos banques partenaires et leurs numeros de compte respectif , puis bien garder l'identifiant unique qui vous sera attribué.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Question 2: Comment Acceder En tant qu'une Banque?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">
                        Pour acceder en tant que banque , il faut vous authentifier en renseignant le id de la banque , votre nom d'utilisateur et votre email. si vous n'avez pas de compte , cliquez sur créer un compte et renplissez les champs . le code secret vous sera communiquez par votre banque ainsi que le id de votre banque
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Question 3: Comment contacter le support?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">
                        Pour contacter le support, utilisez le formulaire de contact sur notre page "Contactez-nous" ou envoyez un email à support@easepayschool.com.
                    </div>
                </div>
            </div>
            <!-- Ajoutez d'autres questions ici -->
        </div>
    </section>
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
   

    <!-- fin de c'est quoi  -->
   
   
  </body>
</html>