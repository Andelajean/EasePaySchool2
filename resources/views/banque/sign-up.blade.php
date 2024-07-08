<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasePaySchool -compte</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon.png')}}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
     <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
      <link rel="manifest" href="{{asset('img/site.webmanifest')}}">
    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

:root {
    --main-color: #3a0ca3;
    --background-color: #8c3fe2
}

body {
    display: grid;
    place-items: center;
    height: 100vh;
    background: var(--background-color);


}

#FormContainer {
    background-color: #ffffffa1;
    backdrop-filter: blur(10px);
    border: 2px solid #ffffff6d;
    width: 760px;
    border-radius: 10px;
    box-shadow: 3px 3px 11px 1.5px #0000002b;
    font-family: Poppins;
    padding: 10px;
    height: 600px;
    align-content:center;


    display: grid;
    grid-template-columns: 50% 50%;
}

h1 {
    padding: 20px;
    color: var(--main-color);
    font-size: 2.1rem;
    font-weight: 800;
    grid-column: 1/span 2;
}

.ImgContainer {
    overflow: hidden;
    border-radius: 10px;
  background:url(https://wallpapercg.com/media/ts_sq/7898.webp);
  background-size:100% 100%;
}



form {
    display: flex;
    flex-direction: column;
    padding: 10px;
}

.Name,
.password {
    display: grid;
    grid-template-columns: repeat(2, 50%);

}

form li {
    list-style-type: none;

    display: flex;
    flex-direction: column;
    padding: 0px 5px;
    text-align: left;

}

form label {
    font-size: 0.8rem;
    font-weight: 600;
    width: 100%;
    padding: 5px 15px;
    color: blue;
}

form input,
form select {
    padding: 10px;
    border-radius: 8px;
    border: none;
    background-color: #ffffff6d;
    width: 100%;
    outline: none;
    color: blue;
    margin-bottom: 10px;
}

form input:focus,
form select:focus,
form input:hover,
form select:hover {
    border: 1px solid var(--main-color);
}

form .Phone {
    display: grid;
    grid-template-columns: 35% 65%;
}

form select {
    width: 100%;
}

form .Phone input {
    flex: 1;
    width: 100%;
}

.Subscribe {
    display: flex;
    flex-direction: row;
    padding: 10px;
    align-items: center;
}

.CheckBoxCont {
    width: 25px;
    border-radius: 5px;
    height: 25px;
    position: relative;
    border: 1px solid var(--main-color);
    transition-duration: 0.2s;
}

.CheckBoxCont:hover {
    background-color: var(--main-color);
}

.CheckBoxCont:hover .Tickline2 {
    background-color: white;
}

.CheckBoxCont:hover .Tickline1 {
    background-color: white;
}


.Tickline2,
.Tickline1 {

    background-color: var(--main-color);
    border-radius: 20px;
    height: 3px;
    position: absolute;
    width: 20px;
    transition-duration: 0.3s;
    border: none;
    ;

}

.Tickline1 {
    rotate: -45deg;
    top: 10px;
    left: 5px;
    opacity: 0;
    width: 18px;
    animation: 1s car linear infinite;
}

.Tickline2 {
    rotate: 50deg;
    top: 12px;
    width: 8px;
    opacity: 0;
    left: 2px;
}

.Subscribe label {
    padding: 10px;
    width: fit-content;

}

form button {
    width: fit-content;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 1.1rem;
    color: white;
    background-color: var(--main-color);
    border: none;
    cursor: pointer;
    margin: auto;
}

@media (max-width:800px) {
    .ImgContainer {
        display: none;
    }

    #FormContainer {
        grid-template-columns: 100%;
        width: 380px;
        
    }


}

@media (max-width:430px) {
    #FormContainer {
        border-radius: 0px;
        width: 100%;
        padding: 5px;
        height: 100%;
    }

    .Name,
    .Phone,
    .password {
        display: block;
    }
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- Conteneur de chargement -->
    <div id="loading">
        <div class="spinner"></div>
    </div>
   <div id="app-content">  
  
    <div id="FormContainer">
        <div class="ImgContainer">


        </div>
        <form id="Form" method="POST" action="/compte/traitement">
        @csrf
            <h1 id="FormHeading">Créer Compte</h1>
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
            <div class="Name">
                <li><label>Nom:</label>
                    <input type="text" placeholder="John" name="nom">
                </li>
                <li><label>Prenom:</label>
                    <input type="text" placeholder="Doe" name="prenom">
                </li>
            </div>
            <li>
                <label>Email:</label>
                <input type="email" placeholder="johndoe123@gmail.com" name="email"required>
            </li>
            <div class="Phone">
                <li><label>Banque:</label>
                    <select name="banques" required>
                        <option value="Afriland First Bank">Afriland First Bank</option>
                        <option value="UBA">UBA</option>
                        <option value="BICEC">BICEC</option>
                        <option value="Atlantik Bank">Atlantic Bank</option>
                        <option value="SCB">SCB</option>
                        <option value="SGBC">SGBC</option>
                        <option value="Commercial Bank">Commercial Bank</option>
                        <option value="EcoBank">EcoBank</option>
                        <option value="BANGE BANK">BANGE BANK</option>
                        <option value="BGFI Bank">BGFI Bank</option>
                        <option value="CCA Bank">CCA Bank</option>
                        <option value="Express Union">Express Union</option>
                        <option value="Vision Finance">Vision Finance</option>

                        <select>
                <li>
                    <label>Telephone:</label><input type="tel" placeholder="123-456-789" name="telephone" id="telephone">
                </li>
            </div>
            <div class="password">
                <li><label>Mot De Passe:</label> <input type="password" name="pwd"></li>
                <li><label>Confirmer le MDP:</label> <input type="password" name="pwd1"></li>
            </div>
            <button type="submit">Créer</button>
        </form>

    </div>
  </div>
   
<script src="/style.js"></script>
    <script>
    function ToggleCheckBox(elem) {
    var TickLine1 = elem.querySelector(".tick>.Tickline1")
    var Tickline2 = elem.querySelector(".tick>.Tickline2")
    if (elem.getAttribute("data-status") == "true") {
        TickLine1.style.opacity = 1
        Tickline2.style.opacity = 1
        elem.setAttribute("data-status", false)

    } else {
        TickLine1.style.opacity = 0
        Tickline2.style.opacity = 0
        elem.setAttribute("data-status", true)


    }
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>