<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="/style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('img/site.webmanifest')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
<!-- -->
 <style>
    .response-message {
        margin-top: 20px;
    }
    .success {
        color: green;
    }
    .error {
        color: red;
    }
   </style>
    <title>EasePayShool -Contact</title>
  </head>
  <body>         
    <!-- Conteneur de chargement -->
    <div id="loading">
        <div class="spinner"></div>
    </div>

    <!-- Contenu principal de votre application -->
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


        <!-- Section de contact -->
        <div class="main-container">
            <section class="contact-section">
                <h2>Contactez-nous ici</h2>
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
                <div id="response-message"></div>
                <div class="form-container">
                    <form action="" method="POST" id="contact-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Telephone:</label>
                            <input type="tel" id="telephone" name="telephone" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Envoyer</button>
                    </form>
                    <div id="response-message" class="response-message"></div>
                </div>
            </section>

            <!-- Section des réseaux sociaux et informations -->
            <section class="info-section">
                <h2>Nos informations</h2>
                <div class="info-container">
                    <div class="social-container">
                        <h3>Suivez-nous</h3>
                        <div class="social-icons">
                            <a href="https://facebook.com" target="_blank"><img src="{{ asset('img/facebook.png') }}" alt="Facebook"></a>
                            <a href="https://twitter.com" target="_blank"><img src="{{ asset('img/logox.png') }}" alt="Twitter"></a>
                            <a href="https://linkedin.com" target="_blank"><img src="{{ asset('img/logolin.png') }}" alt="LinkedIn"></a>
                            <a href="https://instagram.com" target="_blank"><img src="{{ asset('img/insta.jfif') }}" alt="Instagram"></a>
                        </div>
                    </div>
                    <div class="contact-info">
                        <h3>Contactez-nous</h3>
                        <p><strong>Adresse:</strong> awae escalier, Yaoundé IV, Cameroun</p>
                        <p><strong>Téléphone:</strong> (+237) 659 454 737 / 620 690 733</p>
                        <p><strong>Email:</strong> contact@easepayschool.com</p>
                    </div>
                </div>
            </section>
        </div>

        <footer>
            <div class="content">
                <div class="left box">
                    <div class="upper">
                        <div class="topic">A Propos</div>
                        <p>EasePaySchool est une plate forme qui vous evite des déplacements unitiles.</p>
                    </div>
                    <div class="lower">
                        <div class="topic">Contact</div>
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
                            <a href="#"><i class="fab fa-facebook-f"></i> <img classe="icone" src="{{asset('img/facebook.png')}}" width="30px" height="30px"></a>
                            <a href="#"><i class="fab fa-instagram"></i><img classe="icone" src="{{asset('img/logotik.jfif')}}" width="30px" height="30px"></a>
                            <a href="#"><i class="fab fa-twitter"></i><img classe="icone" src="{{asset('img/logox.png')}}" width="30px" height="30px"></a>
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/style.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script>
       const form = document.getElementById('contact-form');
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(form);
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                const messageDiv = document.getElementById('response-message');
                if (data.success) {
                    messageDiv.innerHTML = `<p class="success">${data.message}</p>`;
                } else {
                    messageDiv.innerHTML = `<p class="error">${data.message}</p>`;
                }
            })
            .catch(error => {
                const messageDiv = document.getElementById('response-message');
                messageDiv.innerHTML = `<p class="error">Une erreur s'est produite. Veuillez réessayer plus tard.</p>`;
            });
        });
    });
    </script>
   
  </body>
</html>