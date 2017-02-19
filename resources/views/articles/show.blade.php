@extends('layouts.app')
<br><br><br>
@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Article Posté par : {{ $article->user->name }} </div>
                    @include('messages.success')
                    @include('messages.error')
                    <div class="panel-body">
                        <h1>{{ $article->title }}</h1>
                        <img src="{{ $article->images }}" style: width="150px">
                        <h2>{{ $article->content }}</h2>
                        Partager l'article : {{URL::to('/article/'.$article->id)}}
                        <form method="POST" action="{{ route('article.destroy', $article->id)}}">
                            {{csrf_field()}}
                            <div class="panel-heading">
                                @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $articles = Auth::user()->id == $article->user->id)
                                <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Modifier</a>
                                <input type="hidden" name="_method" value="DELETE">
                                <input class="btn btn-danger "type="submit" value="supprimer">
                                @endif
                            </div>
                        </form>
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
                                <a href="{{ route('comment.edit', $comment->id) }}" class="btn btn-primary">Modifier</a>
                                    <form method="POST" action="{{ route('comment.destroy', $comment->id) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="submit" value="Supprimer" class="btn btn-danger">
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