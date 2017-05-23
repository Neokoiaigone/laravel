@extends('.layouts.app')
@section('content')

    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-12 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{ $article->title }}</h1>

                </div>
            </div>
        </div>
    </header>
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Article Posté par : {{ $article->user->name }} </div>
                    @include('messages.success')
                    @include('messages.error')
                    <div class="panel-body">
                        <img src="{{ $article->images }} "style: width="100%;">
                        <hr><p class="textearticle">{{ $article->content }}</p>
                        <hr>Partager l'article : {{URL::to('/article/'.$article->id)}}
                        <form method="POST" action="{{ route('article.destroy', $article->id)}}">
                            {{csrf_field()}}
                            <div class="panel-heading">
                                @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $articles = Auth::user()->id == $article->user->id)
                                <a href="{{ route('article.edit', $article->id) }}" class="col-md-5 btn btn-primary">Modifier</a>
                                <input type="hidden" name="_method" value="DELETE">
                                <input class="btn col-md-5 btn-danger "type="submit" value="supprimer">
                                @endif
                            </div>
                        </form>
                        <p class="aere">Nombre de likes : {{$article->likeCount}}
                        @if( $article->liked() )
                            <form method="POST" action="{{ route('article.unlike', $article->id) }}">
                                {{ csrf_field() }}
                                <input type="submit" value="Unlike" class="btn btn-danger">
                            </form>
                        @else
                            <form method="POST" action="{{ route('article.like', $article->id) }}">
                                {{ csrf_field() }}
                                <input type="submit" value="Like" class="btn btn-success">
                            </form>
                        @endif
                        </p>

                    <div class="panel-body">
                        @if(Auth::check())
                    <form method="POST" action="{{ route('comment.store') }}">
                        {{csrf_field()}}
                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                        <textarea class="form-control" name="content" placeholder="Commentaire"></textarea>
                        <div class="panel-heading">
                            <input type="submit" value="envoyer" class="btn btn-info">
                        </div>
                    </form>
                        @endif

                    @foreach($comments as $comment)
                        @if($comment->article_id == $article->id)
                            <p>Commentaire Posté par : {{$comment->user->name}} </p>
                            <p>{{ $comment->content }}</p>
                                @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $comments = Auth::user()->id == $comment->user->id)
                                <a href="{{ route('comment.edit', $comment->id) }}" class="btn col-md-5 btn-primary">Modifier</a>
                                    <form method="POST" action="{{ route('comment.destroy', $comment->id) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="submit" value="Supprimer" class="btn col-md-5 btn-danger">
                                        <br><br>
                                    </form>
                                @else
                                @endif
                        @else
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection