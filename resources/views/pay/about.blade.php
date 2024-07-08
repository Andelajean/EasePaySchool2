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
 
    <title>EasePayShool - A Propos</title>
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
                <li><a href="">Banque</a></li>
                <li><a href="{{route('pay.contact')}}">Conctact</a></li>
                <li><a href="">Aide</a></li>
            </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
</nav>
      <div class="container section-inf" data-aos="fade-up">
        <h2 id="easePayTitle"></h2>
        <p>EasePaySchool est une plateforme innovante conçue pour faciliter les paiements scolaires. Elle permet aux parents de payer les frais de scolarité en ligne de manière sécurisée et pratique. Les écoles peuvent gérer les paiements de manière efficace et suivre les transactions en temps réel.</p>
        <div class="button-container">
             <a href="{{route('register')}}"><button class="btn btn-primary" >S'inscrire</button> </a>
            <a href="{{route('login')}}"> <button class="btn btn-secondary" >Se connecter</button> </a>
        </div>
    </div>
     <!-- fin de c'est quoi  -->

      <!-- deput de  pourquoi utiliser   -->
      <section class="easypay-section">
        <div class="content">
            <h2 id="pourquoi"></h2>
            <p>EasePaySchool offre une solution simple et efficace pour gérer les paiements scolaires , vous evite des déplacement unitile et en bonus , vous n'avez plus besoin de presenter les reçus à l'établissement. Avec notre application, les parents peuvent payer les frais de scolarité en ligne, les écoles peuvent suivre les paiements et les rappels sont automatiques pour assurer que tous les paiements sont à jour.</p>
            <div class="buttons">
                <a href="https://play.google.com/store" class="playstore">
                    <img src="{{ asset('img/1.png') }}" alt="Play Store">
                </a>
                <a href="https://www.apple.com/app-store/" class="appstore">
                    <img src="{{ asset('img/2.png') }}" alt="App Store">
                </a>
            </div>
        </div>
    </section>
<!-- ceo section -->
<section class="ceo-section">
        <div class="text-container">
            <h2 id="ceo"></h2>
            <p>Le CEO de EasePaySchool est Jean Geal ANDELA, un leader visionnaire. Sous sa direction, EasePaySchool a révolutionné la gestion des paiements scolaires.</p>
        </div>
        <div class="image-container">
            <img src="{{ asset('img/ceo2.jpg') }}" alt="CEO of EasePaySchool">
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