<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href=".../../src/css/nav.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Navbar</title>
    </head>
    <body>

        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <img src="{{ Vite::asset('resources/img/logo.png') }}" class="bi me-2" width="50" height="50" role="img" aria-label="Bootstrap">
                </a>
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a href="#" class="nav-link px-2 link-secondary">Acceuil</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 link-dark">ATROUVER</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 link-dark">ATROUVER</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 link-dark">ATROUVER</a>
                    </li>
                </ul>
                <div class="col-md-3 text-end">
                    <a href="/login" class="btn btn-outline-primary me-2">Connexion</a>
                    <a href="/register" class="btn btn-outline-primary me-2">Inscription</a>
                </div>
            </header>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>
