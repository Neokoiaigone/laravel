@extends('layouts.app')

@section('content')
    <header class="intro-header" >

    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editer un commentaire</div>
                    @include('messages.error')
                    <div class="panel-body">
                        <form method="POST" action="{{ route('comment.update', $comment->id) }}">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field()}}

                            <textarea class="form-control" name="content" placeholder="Contenu">{{$comment->content}}</textarea>

                            <input type="submit" value="publier" class="btn btn-info">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection