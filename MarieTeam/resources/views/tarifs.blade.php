<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>MARIE TEAM</title>
    <meta charset="UTF-8">
</head>
<body>
@include('components/nav')
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-tarifs-passagers-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tarifs-passagers" type="button" role="tab" aria-controls="v-pills-tarifs-passagers" aria-selected="true">tarifs passagers</button>
            <button class="nav-link" id="v-pills-tarifs-véhicules-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tarifs-véhicules" type="button" role="tab" aria-controls="v-pills-tarifs-véhicules    " aria-selected="false">tarifs véhicules</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-tarifs-passagers" role="tabpanel" aria-labelledby="v-pills-tarifs-passagers-tab" tabindex="0">
                Prix indiqués aller simple:
                @foreach($TarifsEte as $tarif)
                        {{ $tarif->tarif }}
                        {{ $tarif->libelle }}
                @endforeach

                <div class="tab-pane fade" id="v-pills-tarifs-véhicules" role="tabpanel" aria-labelledby="v-pills-tarifs-véhicules-tab" tabindex="0">
                Prix indiqués aller simple:
                <br>Période du 01/09/2021 au 15/06/2022 et du 16/06/2022 au 15/09/2022 et du 16/09/2022 au 31/05/2023.
                Haute fréquentation les vendredis, samedis, dimanches et jours fériés du 01/04 au 30/06 et du 01/09 au 30/09 et tous les jours du 01/07 au 31/08

                DEUX ROUES
                Billet Trottinette électrique :
                4,40 € – 5,20 €

                Billet bicyclette :
                7,70 € – 9,00 €

                Billet bicyclette électrique :
                10,30 € – 11,90 €

                Billet remorque de bicyclette :
                7,70 € – 9,00 €

                Cyclomoteur de 49 cm3 à 125 cm3 :
                21,60 € – 25,20 €

                Scooter et motocyclette de +125 cm3 :
                61,80 € – 72,10 €

                QUATRES ROUES
                Billet véhicule C1 (Longueur inférieure à 4,00 m) :
                89,90 € – 101,20 €

                Billet véhicule C2 (Longueur de 4,00 m à 4,39 m ) :
                107,40 € – 118,80 €

                Billet véhicule C3 (Longueur de 4,40 m à 4,79 m ) :
                163,20 € – 180,80 €

                Billet véhicule C4 (Longueur de supérieure à 4,80 m) :
                197,30 € – 225,20 €

                Billet véhicule C5 (Camping-car, véhicule hauteur de + de 2,10 m, remorque de longueur de + de 5,00 m) :
                308,90 € – 308,90 €</div>
        </div>
    </div>

</body>

</html>
