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

                    <h3 class="mt-4">Ajouter vos banques partenaires</h3>

                    @for ($i = 1; $i <= 6; $i++)
                        <div class="form-row align-items-center mb-3">
                            <div class="col-md-6">
                                <label for="bank{{ $i }}">Banque {{ $i }} :</label>
                                <select class="form-control" id="bank{{ $i }}" name="bank{{ $i }}">
                                    <option value="choisir">Sélectionnez une banque</option>
                                    <option value="afrilands">Afriland First Bank</option>
                                    <option value="u_b_a_s">UBA</option>
                                    <option value="commercials">Commercial Bank</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="account{{ $i }}">Numéro de compte :</label>
                                <input type="text" class="form-control" id="account{{ $i }}" name="account{{ $i }}">
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
        $(document).ready(function() {
            // Écouter les changements sur les champs de banque
            $('select[name^="bank"]').change(function() {
                // Réinitialiser tous les champs de sélection
                $('select[name^="bank"]').find('option').prop('disabled', false);

                // Parcourir tous les champs de banque
                $('select[name^="bank"]').each(function() {
                    // Récupérer la valeur sélectionnée
                    var selectedBank = $(this).val();

                    // Désactiver cette banque dans les autres champs de sélection
                    $('select[name^="bank"]').not($(this)).find('option[value="' + selectedBank + '"]').prop('disabled', true);
                });
            });
        //bloquer
         $(document).ready(function() {
            // Désactiver tous les champs de compte au chargement de la page
            $('input[name^="account"]').prop('disabled', true);

            // Gérer la sélection des banques et l'activation des champs de compte
            $('select[name^="bank"]').change(function() {
                var bankId = $(this).val();
                var accountId = $(this).attr('name').replace('bank', 'account');
                var accountInput = $('input[name="' + accountId + '"]');

                // Activer/désactiver le champ de compte en fonction de la sélection de la banque
                if (bankId !== '') {
                    accountInput.prop('disabled', false);
                } else {
                    accountInput.prop('disabled', true);
                }
            });

            // Trier les options de sélection de banque par ID croissant
            $('select[name^="bank"]').each(function() {
                var options = $(this).find('option');
                var arr = options.map(function(_, o) {
                    return { id: $(o).val(), text: $(o).text() };
                }).get();
                arr.sort(function(o1, o2) {
                    return o1.id - o2.id;
                });
                options.each(function(i, o) {
                    $(o).text(arr[i].text).val(arr[i].id);
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
