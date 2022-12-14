<html>
<head>
    <title>Connexion</title>
    <meta charset="UTF-8">
    @vite('resources/css/login.css')
    <meta name="viewport" content="width=device-width, initiak-scale=1">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
<img class="wave" src="{{ Vite::asset('resources/img/wave.png') }}">
<div class="container">
    <div class="img">
        <img src="{{ Vite::asset('resources/img/boat.svg') }}">
    </div>
    <div class="login-container">
        <form action="login.php">
            <div class="input-div">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Adresse Mail</h5>
                    <input class="input" type="text">
                </div>
            </div>
            <div class="input-div">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div>
                    <h5>Mot de passe</h5>
                    <input type="password" class="input">
                </div>
            </div>
            <a href="#">Mot de passe oublié ?</a>
            <input type="submit" class="btn" value="Connexion">
        </form>
    </div>
</div>
@vite('resources/js/login.js')</body>
</html>
