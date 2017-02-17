@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('messages.success')
                @include('messages.error')
                <div class="panel panel-default">
                    <div class="panel-heading">Articles</div>

                    <div class="panel-body">
                            <ul>
                                @foreach($articles as $article)
                                <li><a href="{{ route('article.show', $article->id) }}">{{$article->content}}</a></li>
                                    <p>Posté par : {{ $article->user->name }} le {{$article->created_at}}</p>
                                @endforeach
                            </ul>
                            {{$articles->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection