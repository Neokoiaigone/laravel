<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    <!-- Theme CSS -->
    <link href="/css/clean-blog.min.css" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<nav class="nav-extended z-depth-3 navbar-fixed-top">
    <div class="nav-wrapper">
        <a class="brand-logo" href="{{ url('/') }}">
            <img src="{{'/img/logosvg2.svg'}}" alt="mhb" class="mhb">
        </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            @if (Auth::guest())

                <li class="btn3"><a href="{{ route('login') }}">Connexion</a></li>
                <li class="btn3"><a href="{{ route('register') }}">Inscription</a></li>
            @else
                @if (Auth::check() and auth()->user()->isAdmin)
                    <li class="btn3"><a href="{{ route('admin.index') }}">Administration</a></li>
                @endif
                <li class="btn3"><a href="{{ route('article.create') }}">Publier un défi</a></li>

                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>
                <ul id="dropdown1" class="dropdown-content">
                    <li class="btn3"><a href="#!">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                Deconnexion
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form></a>
                    </li>

                </ul>


            @endif
        </ul>
        <ul class="side-nav" id="mobile-demo">
            @if (Auth::guest())

                <li><a href="{{ route('login') }}">Connexion</a></li>
                <li><a href="{{ route('register') }}">Inscription</a></li>
            @else
                @if (Auth::check() and auth()->user()->isAdmin)
                    <li><a href="{{ route('admin.index') }}">Administration</a></li>
                @endif
                <li><a href="{{ route('article.create') }}">Publier un défi</a></li>

                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="#!">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                Deconnexion
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form></a>
                    </li>
        </ul>
        @endif

    </div>
    <div class="nav-content">
        <ul class="Cat">
            <li><a href="{{ route('article.sport') }}" class="tabM">Sport</a></li>
            <li><a href="{{ route('article.economie') }}" class="tabM">Économie</a></li>
            <li><a href="{{ route('article.dvlp') }}" class="tabM">Développement personnel</a></li>
            <li><a href="{{ route('article.nutrition') }}" class="tabM">Nutrition</a></li>
            <li><a href="{{ route('article.jv') }}" class="tabM">Jeux Vidéos</a></li>
        </ul>
    </div>
</nav>


<main>
    @yield('content')
</main>
<footer class="page-footer">
    <div class="container">
        <div class="row center">
            <div class="col col-md-3">
                <h5 class="white-text footer-title">Made by</h5>
                <p class="grey-text text-lighten-4">Louis-Alexandre Bricq</p>
                <p class="grey-text text-lighten-4">Adam Benhaddou</p>
                <p class="grey-text text-lighten-4">Valentin Savigny</p>
                <p class="grey-text text-lighten-4">Adam Alet</p>
            </div>
            <div class="col-md-6">
                <h5 class="white-text footer-title"><img src="{{'/img/logo footer follow svg.svg'}}" alt="mhb" class="mhb2" width="250"></h5>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
            </div>
            <div class="col-md-3">
                <h5 class="white-text footer-title">Catégories</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Sport</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Economie</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Développement personnel</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Jeux-vidéos</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container center">
            myHobee © 2017 • Tous droits réservés
        </div>
    </div>
</footer>
<!-- Scripts -->
<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

<script type="text/javascript">
    // fontion pour donné l'attribut 'scrolled' a la navbar lorsqu'elle n'est pas en Top de la page
    $(function () {
        $(document).scroll(function () {
            var $nav = $(".navbar-fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });


</script>

<script>
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $(".dropdown-button").dropdown();

        function checkImg(img) {
            if (img.naturalHeight <= 1 && img.naturalWidth <= 1) {
                // undersize image here
                img.src = "http://www.novelupdates.com/img/noimagefound.jpg";
            }
        }

        $("img").each(function() {
            // if image already loaded, we can check it's height now
            if (this.complete) {
                checkImg(this);
            } else {
                // if not loaded yet, then set load and error handlers
                $(this).load(function() {
                    checkImg(this);
                }).error(function() {
                    // img did not load correctly
                    // set new .src here
                    this.src = "http://www.novelupdates.com/img/noimagefound.jpg";
                });

            }
        });

        $(function() {
            var pgurl = window.location.href;
            console.log(pgurl);
            $(".tabM").each(function(){
                if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
                    $(this).addClass("active");
            })
        });

    });

</script>




</body>
</html>
