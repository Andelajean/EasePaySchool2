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
</head>
<body>
    <div class="container">
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
                <input type="text" id="bank-id" name="idbanque" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="pwd" required>
                
                <button type="submit">Login</button>
            </form>
            <div class="links">
                <a href="{{route('banque.sign-up')}}">Créer un compte</a>
                <a href="reset_password.html">Réinitialiser le mot de passe</a>
            </div>
        </div>
    </div>
</body>
</html>
