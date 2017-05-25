@extends('layouts.app')
@section('content')


<!-- Navigation -->
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" ></header>

<div class="large ">
    <h1 class="page container">MyHobee, le site de défis à toutes les sauces ! Seul, ou entre amis !</h1>
</div>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10 ">
            <div class="post-preview">
                <h2>Les derniers défis</h2>
                @include('messages.success')
                @include('messages.error')
                @foreach($articles as $article)
                        <a href="{{ route('article.show', $article->id) }}">
                        <div class="post-title z-depth-4">
                            <img src="{{ $article->images }}">
                            <h2>
                                {{$article->title}}
                            </h2>
                            <p> Suivi par {{$article->likeCount}} personne(s)</p>
                        <p class="post-meta">Posté par : {{ $article->user->name }} le {{$article->created_at}}</p>
                        </div>
                        </a>

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


@endsection
</body>
</html>