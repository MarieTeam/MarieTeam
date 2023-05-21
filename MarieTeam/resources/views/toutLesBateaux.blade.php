<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
@include('components/nav')
<div style="padding: 0 10%">
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <div class="d-flex flex-row align-items-center justify-content-center">
                        <p class="bg-info rounded-2 text-white p-2">1</p>
                        <p class="px-2">{{ $port_depart }} /</p>
                        <p>{{ $port_arrivee_nom }}</p>
                    </div>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" style="background-color: #f5f4f2">
                <div class="accordion-body d-flex flex-row pt-5" style="gap: 30%; padding: 0 10%">
                    <select name="selectDepart" id="selectDepart" class="port form-select border-0 " aria-label="Default select example">
                        <option selected>choisissez un départ</option>
                        @foreach($ports as $port)
                            <option value="{{ $port->nom }}" {{ $port_depart == $port->nom ? 'selected' : '' }}>{{ $port->nom }}</option>
                        @endforeach
                    </select>

                    <select name="selectArrivee" id="selectArrivee" class="port form-select border-0 " aria-label="Default select example">
                        <option selected>choisissez une arrivée</option>
                        @foreach($ports as $port)
                                <?php $selected = ($port->id == $port_arrivee) ? 'selected' : ''; ?>
                            <option value="{{ $port->nom }}" {{ $selected }} {{ $port_depart == $port->nom ? 'disabled' : '' }}>{{ $port->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-check form-switch pt-5">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center pt-5 pb-5" style="gap: 52%">
                    <div class="form-group">
                        <label for="date_depart">Date de départ</label>
                        <input type="text" name="date_depart" id="date_depart" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="date_arrivee">Date d'arrivée</label>
                        <input type="text" name="date_arrivee" id="date_arrivee" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    <div class="d-flex flex-row align-items-center justify-content-center">
                        <p class="bg-info rounded-2 text-white p-2">2</p>
                        <p class="px-2">29/03/2023</p>
                    </div>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" style="background-color: #f5f4f2">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <div class="d-flex flex-row align-items-center justify-content-center">
                        <p class="bg-info rounded-2 text-white p-2">3</p>
                        <p class="px-2">29/03/2023</p>
                    </div>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" style="background-color: #f5f4f2">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

