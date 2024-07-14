<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('img/site.webmanifest')}}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 600px;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
            margin-top:100px;
        }
        .logo img {
            max-width: 100px;
            height: auto;
        }
        h2 {
            text-align: center;
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Reduced gap */
        }
        .form-group {
            width: calc(50% - 10px);
            display: flex;
            flex-direction: column;
        }
        .form-group.full-width {
            width: 100%;
        }
        label {
            font-weight: 400;
            color: #333;
            margin-bottom: 5px;
        }
        input, select {
            padding: 10px; /* Reduced padding */
            border: 2px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            outline: none;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        input:focus, select:focus {
            border-color: blue;
        }
        .info {
            font-size: 12px;
            color: #666;
            width: 100%;
            text-align: left;
            margin-top: -10px;
        }
        .button {
            width: 100%;
            padding: 15px;
            background-color: black;
            color: blue;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            margin-top: 10px;
            transition: background-color 0.3s, color 0.3s;
        }
        .button:hover {
            background-color: blue;
            color: white;
        }
        .alert {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 14px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{asset('img/logofin.jpg')}}" alt="Logo">
        </div>
         <h2>Créez vos comptes ici</h2>
       
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
        <form id="signupForm" onsubmit="return validateForm()" method="POST" action="/compte/traitement">
         @csrf
            <div class="form-group">
                <label for="nom">NOM</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group full-width">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group full-width">
                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" name="telephone" required>
            </div>
            <div class="form-group full-width">
                <label for="banque">Banque</label>
                <select id="banque" name="banques" required>
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
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="pwd" required>
                <span class="info">* Minimum 8 caractères</span>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmer le mot de passe</label>
                <input type="password" id="confirmPassword" name="pwd1" required>
            </div>
            <div class="form-group full-width">
                <label for="codeSecret">Code secret</label>
                <input type="password" id="codeSecret" name="codesecret" required>
                <span class="info">* Exactement 11 caractères</span>
            </div>
            <button type="submit" class="button">Créer un compte</button>
        </form>
    </div>

    <script>
        function validateForm() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const codeSecret = document.getElementById('codeSecret').value;

            if (password.length < 8) {
                alert('Le mot de passe doit comporter au moins 8 caractères.');
                return false;
            }
            if (password !== confirmPassword) {
                alert('Les mots de passe ne correspondent pas.');
                return false;
            }
            if (codeSecret.length !== 11) {
                alert('Le code secret doit comporter exactement 11 caractères.');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
