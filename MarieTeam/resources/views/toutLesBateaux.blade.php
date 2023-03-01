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
    <div style="margin-left: auto; margin-right: auto; max-width: 80em">
        <div class="border border-primary border-2 rounded pt-2 pb-2">
            <div class="d-flex">
                <div>
                    12h40 --> VilleDepart
                </div>
                <div class="me-2 ms-2">|</div>
                <div>
                    15h30 --> VilleArrivée
                </div>
            </div>
        </div>
    </div>
</body>
</html>

