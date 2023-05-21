<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Navbar</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>
    <body>

        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                </a>
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a href="/" class="nav-link px-2 link-secondary">Acceuil</a>
                    </li>
                    <li>
                        <a href="/tarifs" class="nav-link px-2 link-dark">Tarifs</a>
                    </li>
                    <li>
                        <a href="/horaires" class="nav-link px-2 link-dark">Horaires</a>
                    </li>
                    <li>
                        <a href="/toutLesBateaux" class="nav-link px-2 link-dark">Reserver</a>
                    </li>
                </ul>
                <div class="col-md-3 text-end">
                    @guest
                        @if (Route::has('login'))
                                <a href="/login" class="btn btn-outline-primary me-2">Connexion</a>
                        @endif

                        @if (Route::has('register'))
                                <a href="/register" class="btn btn-outline-primary me-2">Inscription</a>
                        @endif
                    @else
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                    @endguest

                </div>



            </header>
        </div>
    </body>
</html>
