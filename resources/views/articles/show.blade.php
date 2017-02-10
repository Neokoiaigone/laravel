@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>

                    <div class="panel-body">
                        <h1>{{ $article->content }}</h1>

                        {{ $article->user->name }}
                        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Modifier</a>
                        <form method="POST" action="{{ route('article.destroy', $article->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <input class="btn btn-danger "type="submit" value="supprimer">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection