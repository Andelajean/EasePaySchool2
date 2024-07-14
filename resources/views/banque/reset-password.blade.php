<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation du mot de passe</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            position: relative;
        }
        .fireworks {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            z-index: 10;
            position: relative;
        }
        h2 {
            text-align: center;
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: 400;
            color: #333;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            outline: none;
            font-size: 14px;
            transition: border-color 0.3s;
            margin-bottom: 10px;
        }
        input:focus {
            border-color: blue;
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
            background-color: black;
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
        .links {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo-container img {
            max-width: 100px;
        }
        .firework {
            position: absolute;
            bottom: 0;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background-color: white;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
            animation: firework-launch 1s ease-in-out infinite;
        }
        @keyframes firework-launch {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            70% {
                transform: translateY(-500px);
                opacity: 1;
            }
            100% {
                transform: translateY(-600px);
                opacity: 0;
            }
        }
        .explosion {
            position: absolute;
            top: 0;
            left: 50%;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: white;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
            animation: explosion 0.5s ease-in-out infinite;
            opacity: 0;
        }
        @keyframes explosion {
            0% {
                transform: scale(0.1);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 0;
            }
        }
        .firework:nth-child(2) {
            animation-delay: 0.2s;
        }
        .firework:nth-child(3) {
            animation-delay: 0.4s;
        }
        .firework:nth-child(4) {
            animation-delay: 0.6s;
        }
        .firework:nth-child(5) {
            animation-delay: 0.8s;
        }
        .firework:nth-child(6) {
            animation-delay: 1s;
        }
    </style>
</head>
<body>
    <div class="fireworks">
        <div class="firework"></div>
        <div class="firework"></div>
        <div class="firework"></div>
        <div class="firework"></div>
        <div class="firework"></div>
        <div class="firework"></div>
    </div>
    <div class="container">
        <div class="logo-container">
            <img src="{{asset('img/logofin.jpg')}}" alt="Logo">
        </div>
        <h2>Réinitialisation du mot de passe</h2>
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
        <form action="/banque/reset/password" method="POST">
            @csrf
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="email">Nouveau Mot De Passe</label>
            <input type="password" id="password" name="pwd1" required>
            <label for="email">Confirmer</label>
            <input type="password" id="password" name="pwd2" required>

            <button type="submit" class="button">Réinitialiser le mot de passe</button>
        </form>
        <div class="links">
            <a href="{{route('banque.login')}}">Retour à la page de connexion</a>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fireworksContainer = document.querySelector('.fireworks');
            setInterval(() => {
                const explosion = document.createElement('div');
                explosion.className = 'explosion';
                explosion.style.left = `${Math.random() * 100}%`;
                explosion.style.animationDelay = `${Math.random()}s`;
                fireworksContainer.appendChild(explosion);
                setTimeout(() => {
                    fireworksContainer.removeChild(explosion);
                }, 500);
            }, 200);
        });
    </script>
</body>
</html>
