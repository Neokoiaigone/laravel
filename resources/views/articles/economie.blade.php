@extends('layouts.app')
@section('content')


    <!-- Navigation -->
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" >

    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 ">
                <div class="post-preview">
                    @include('messages.success')
                    @include('messages.error')
                    @foreach($articles as $article)
                        @if($article->categories_id == 2)
                            <div class="post-title">
                                <img src="{{ $article->images }}">
                                <h2>
                                    <a href="{{ route('article.show', $article->id) }}">{{$article->title}}</a>
                                </h2>
                                <p>
                                    <a href="{{ route('article.show', $article->id) }}">{{$article->content}}</a>
                                </p>
                            </div>
                            <p class="post-meta">Posté par : {{ $article->user->name }} le {{$article->created_at}}</p>
                        @endif
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


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
    @endsection
    </body>
    </html>