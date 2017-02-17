@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Administrateur Articles</div>

                    <div class="panel-body">
                        <ul>
                            @foreach($articles as $article)
                                <li><a href="{{ route('article.show', $article->id) }}">{{$article->content}}</a></li>
                                <p>Posté par : {{ $article->user->name }} le {{$article->created_at}}</p>
                                <form method="POST" action="{{ route('admin.destroy', $article->id) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="submit" value="Supprimer" class="btn btn-danger">
                                    <br><br>
                                </form>
                            @endforeach
                        </ul>
                        {{$articles->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection