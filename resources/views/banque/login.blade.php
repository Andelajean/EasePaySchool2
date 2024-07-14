<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/style2.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
            width: 400px; /* Reduced width */
            text-align: center;
        }
        .form-container {
            margin-top: 20px;
        }
        h2 {
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            width: 100%;
            text-align: left;
            margin-bottom: 5px;
            font-weight: 400;
            color: #333;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            outline: none;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        input:focus {
            border-color: blue;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: black;
            color: blue;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s, color 0.3s;
        }
        button:hover {
            background-color: black;
            color: white;
        }
        .links {
            margin-top: 20px;
        }
        .links a {
            display: block;
            margin-bottom: 10px;
            color: blue;
            text-decoration: none;
            transition: color 0.3s;
        }
        .links a:hover {
            color: darkblue;
        }
        .logo {
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 100px; /* Adjust size as needed */
            height: auto;
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
        <div class="form-container active">
            <h2>Login</h2>
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
            <form action="/banque/compte/traitement" method="POST">
                @csrf
                <label for="bank-id">ID de la Banque</label>
                <input type="password" id="bank-id" name="idbanque" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="pwd" required>
                
                <button type="submit">Login</button>
            </form>
            <div class="links">
                <a href="{{route('banque.sign-up')}}">Créer un compte</a>
                <a href="{{route('banque.reset-password')}}">Réinitialiser le mot de passe</a>
            </div>
        </div>
    </div>
</body>
</html>
