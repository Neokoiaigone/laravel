@extends('.layouts.app')
@section('content')

    <header class="intro-header">
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default z-depth-3">
                    <div class="panel-heading">Défi proposé par <b>{{ $article->user->name }}</b></div>
                    @include('messages.success')
                    @include('messages.error')
                    <div class="panel-body">
                        <div class="col l6 m6 s12">
                            <img src="{{ $article->images }} ">
                        </div>
                        <div class="col l6 m6 s12">
                            <hr>
                            <h2 class="truncate">{{ $article->title }}</h2>
                            <p class="textearticle truncate">{{ $article->content }}</p>
                            <hr>
                            <p>Partager sur :
                                @include('layouts.share', [
                                        'url' => request()->fullUrl(),
                                        'description' => $article->content,
                                        'image' => $article->image
                                    ]) </p>
                            <form method="POST" action="{{ route('article.destroy', $article->id)}}">
                                {{csrf_field()}}
                                <div class="panel-heading text-center">
                                    @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $articles = Auth::user()->id == $article->user->id)
                                        <a href="{{ route('article.edit', $article->id) }}"
                                           class="col-md-5 btn btn-primary">Modifier</a>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input class="btn col-md-5 btn-primary red " type="submit" value="supprimer">
                                    @endif
                                </div>
                            </form>
                            @if( $article->likeCount == 0)
                                <p class="aere">Soyez le premier à suivre cet article ! </p>
                            @elseif($article->likeCount == 1)
                                <p class="aere">Suivi par <b>{{$article->likeCount}}</b> personne </p>
                            @else
                                <p class="aere">Suivi par <b>{{$article->likeCount}}</b> personnes </p>
                            @endif
                            @if( $article->liked() )
                                <form method="POST" action="{{ route('article.unlike', $article->id) }}">
                                    {{ csrf_field() }}
                                    <input type="submit" value="Ne plus suivre" class="btn btn-sucess red">
                                </form>
                            @else
                                <form method="POST" action="{{ route('article.like', $article->id) }}">
                                    {{ csrf_field() }}
                                    <input type="submit" value="Suivre" class="btn btn-success">
                                </form>
                                @endif
                                </p>
                        </div>
                        <div class="panel-body">
                            @if(Auth::check())
                                <form method="POST" action="{{ route('comment.store') }}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                                    <textarea class="form-control" name="content"
                                              placeholder="Commentaire"></textarea>
                                    <div class="panel-heading">
                                        <input type="submit" value="envoyer" class="btn btn-info">
                                    </div>
                                </form>
                            @endif

                            @foreach($comments as $comment)
                                @if($comment->article_id == $article->id)
                                    <p>Commentaire posté par <b>{{$comment->user->name}}</b> le
                                        <b>{{$comment->created_at}}</b></p>
                                    <p>{{ $comment->content }}</p>
                                    @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $comments = Auth::user()->id == $comment->user->id)
                                        <a href="{{ route('comment.edit', $comment->id) }}"
                                           class="btn col-md-5 btn-primary">Modifier</a>
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