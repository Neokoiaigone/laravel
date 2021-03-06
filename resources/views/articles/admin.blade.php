@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Clean Blog</title>

        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="css/clean-blog.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

    <!-- Navigation -->
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->

    <header class="intro-header" >

    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 ">
                <div class="post-preview">
                    @include('messages.success')
                    @include('messages.error')
                    @foreach($articles as $article)
                        <a href="{{ route('article.show', $article->id) }}">
                            <div class="post-title z-depth-4">
                                <img src="{{ $article->images }}">
                                <h2>
                                    {{$article->title}}
                                </h2>
                                <p>
                                    {{$article->content}}
                                </p>
                                <p> Suivi par {{$article->likeCount}} personne(s)</p>
                                <p class="post-meta">Posté par : {{ $article->user->name }} le {{$article->created_at}}</p>
                            </div>
                        </a>
                        <form method="POST" action="{{ route('article.destroy', $article->id)}}">
                            {{csrf_field()}}
                            <div class="panel-heading">
                                @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $articles = Auth::user()->id == $article->user->id)
                                    <a href="{{ route('article.edit', $article->id) }}" class="col-md-5 btn btn-primary">Modifier</a>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input class="btn col-md-5 btn-danger red "type="submit" value="supprimer">
                                @endif
                            </div>
                        </form>
                    @endforeach
                    {{$articles->links()}}
                </div>
                <hr>
            </div>
            <hr>
            <!-- Pager -->
        </div>
    </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
    </body>
    </html>
@endsection