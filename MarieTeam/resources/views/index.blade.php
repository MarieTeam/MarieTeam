<html>

<head>
    <title>MARIE TEAM</title>
    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/logo.png') }}" />
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
</head>

<body>
@include('components/nav')
    <div class="trajet">
        <div class="destination">
            <div class="logo_bateau">
                <img style="width: 20px; height: 20px;" src="{{ Vite::asset('resources/img/logo_bateau.svg') }}">
            </div>
            <div>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </div>


    <div class="planTraverse">
        <div class="info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque id labore, et itaque repudiandae soluta minima cumque aut odit, cupiditate accusamus omnis fugiat minus molestias obcaecati nam consectetur ab maiores?

        </div>
        <div class="traverser">
            <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque id labore, et itaque repudiandae soluta minima cumque aut odit, cupiditate accusamus omnis fugiat minus molestias obcaecati nam consectetur ab maiores?
            </div>
        </div>

    </div>




    <div class="meteo">
        <div class="meteo-ville">
            <p style="margin-bottom: 1%;">Marseille</p>
            <p>Véritable porte ouverte sur la Méditerranée, la cité phocéenne revêt des visages bien différents ! Ville
                on ne peut plus cosmopolite, elle se meut au gré des envies du voyageur : sportive, artistique ou
                culturelle… Marseille regorge de richesses...</p>
            <div class="meteo-temp">
                <div>
                    <p style="text-align: center;">Mercredi <br> 19° <br><br> SE 24km/h</p>
                </div>
                <div>Mercredi</div>
                <div>Mercredi</div>
            </div>
        </div>
    </div>

</body>

</html>
