<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création des Comptes pour les Écoles</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="/style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('img/site.webmanifest')}}">
    <style>
        .custom-container {
            border: 2px solid blue;
            border-radius: 15px;
            padding: 20px;
            margin-top: 100px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        .container{
            margin-top:100px
        }
    </style>
</head>
<body>

<div id="loading">
        <div class="spinner"></div>
    </div>
   <div id="app-content">  
   
            
    <nav>
     <img src="{{ asset('img/logofin.jpg') }}" class="circular-logo" alt="Logo">
            <ul class="nav-links">
            <li><a href="/">Accueil</a></li>
                <li><a href="{{route('pay.about')}}">A Propos</a></li>
                <li><a href="{{route('pay.contact')}}">Conctact</a></li>
                <li><a href="">Telecharger</a></li>
                <li><a href="{{route('ecole.help')}}">Aide</a></li>
            </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <div class="container">
        <div class="custom-container">
            <h1 class="text-center">Création des Comptes pour les Écoles</h1>
              @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
              <form method="POST" action="/ecole/traitement" id="schoolForm">
                    @csrf
                    <div class="form-group">
                        <label for="school-name">Nom de l'école :</label>
                        <input type="text" class="form-control" id="school-name" name="school_name" required>
                    </div>
                    <div class="form-group">
                        <label for="school-email">Email :</label>
                        <input type="email" class="form-control" id="school-email" name="school_email" required>
                    </div>
                    <div class="form-group">
                        <label for="school-name">Telephone de l'école :</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" required>
                    </div>

                    <h3 class="mt-4">Ajouter vos banques partenaires</h3>

                   @for ($i = 1; $i <= 6; $i++)
                <div class="form-row align-items-center mb-3">
                    <div class="col-md-6">
                 <label for="bank{{ $i }}">Banque {{ $i }} :</label>
                    <select class="form-control bank-select" id="bank{{ $i }}" name="bank{{ $i }}">
                    <option value="">Sélectionnez votre banque</option>
                    <option value="Afriland First Bank">Afriland First Bank</option>
                    <option value="UBA">UBA</option>
                    <option value="BICEC">BICEC</option>
                    <option value="Atlantic Bank">Atlantic Bank</option>
                    <option value="SCB">SCB</option>
                    <option value="SGBC">SGC</option>
                    <option value="Commercial Bank">Commercial Bank</option>
                    <option value="EcoBank">EcoBank</option>
                    <option value="BANGE BANK">BANGE BANK</option>
                    <option value="BGFI Bank">BGFI Bank</option>
                    <option value="CCA Bank">CCA Bank</option>
                    <option value="Express Union">Express Union</option>
                    <option value="Vision Finance">Vision Finance</option>
                    </select>
                    </div>
                    <div class="col-md-6">
                        <label for="account{{ $i }}">Numéro de compte :</label>
                        <input type="text" class="form-control account-input" id="account{{ $i }}" name="account{{ $i }}" disabled>
                    </div>
                </div>
            @endfor

                    <button type="submit" class="btn btn-primary btn-block">Soumettre</button>
                </form>
            </div>
        </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Liste des banques déjà sélectionnées
            let selectedBanks = [];

            // Sélection des éléments du formulaire
            const bankSelects = document.querySelectorAll('.bank-select');
            const accountInputs = document.querySelectorAll('.account-input');

            // Écoute des changements sur les sélecteurs de banque
            bankSelects.forEach(function(select, index) {
                select.addEventListener('change', function() {
                    // Récupérer la valeur sélectionnée
                    const selectedBank = this.value;

                    // Vérifier si cette banque est déjà sélectionnée
                    if (selectedBanks.includes(selectedBank)) {
                        alert('Cette banque est déjà sélectionnée pour un autre compte.');
                        this.value = ''; // Réinitialiser la sélection
                        return;
                    }

                    // Ajouter la banque à la liste des banques sélectionnées
                    selectedBanks[index] = selectedBank;

                    // Trier les options par ordre croissant
                    const options = Array.from(this.options).slice(1); // Ignorer l'option de sélection
                    options.sort(function(a, b) {
                        return a.text.localeCompare(b.text);
                    });
                    options.unshift(this.options[0]); // Remettre l'option de sélection en premier
                    options.forEach(function(option) {
                        select.appendChild(option);
                    });

                    // Activer le champ de numéro de compte si une banque est sélectionnée
                    const accountInput = accountInputs[index];
                    if (selectedBank) {
                        accountInput.disabled = false;
                    } else {
                        accountInput.disabled = true;
                        accountInput.value = ''; // Réinitialiser la valeur du champ
                    }
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
