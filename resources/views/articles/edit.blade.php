@extends('layouts.app')

@section('content')
    <header class="intro-header" >

    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editer un article</div>
                    @include('messages.error')
                    <div class="panel-body">
                        <form method="POST" action="{{ route('article.update', $article->id) }}">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field()}}
                            <input class="form-control" type="text" value="{{$article->title}}" name="title" placeholder="Titre">
                            <textarea class="form-control" name="content" placeholder="Contenu">{{$article->content}}</textarea>
                            <input type="file" name="image" id="fileToUpload" value="{{$article->image}}">
                            <input type="submit" value="publier" class="btn btn-info">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection