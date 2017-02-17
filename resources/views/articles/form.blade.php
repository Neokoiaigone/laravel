@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    @include('messages.error')
                    @include('messages.success')
                    <div class="panel-body">
                        <form method="POST" action="{{ route('form.store') }}">
                            {{csrf_field()}}

                            <input class="form-control" type="text" name="email" placeholder="Email">
                            <textarea class="form-control" name="content" placeholder="Contenu"></textarea>
                            <input type="submit" value="envoyer" class="btn btn-info">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection