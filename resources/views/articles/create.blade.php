@extends('layouts.app')

@section('content')
    <header class="intro-header" >

    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Publier un défi</div>
                        @include('messages.error')
                    <div class="panel-body">
                        <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <input class="form-control" type="text" name="title" placeholder="Défi">
                            Catégorie de votre défi :
                            <select name="categories">
                                <option value="1">Sport</option>
                                <option value="2">Économie</option>
                                <option value="3">Développement personnel</option>
                                <option value="4">Nutrition</option>
                                <option value="5">Jeux vidéos</option>
                            </select>
                            <br><br>
                            <textarea class="form-control" name="content" placeholder="Expliquez en quoi consiste votre défi !"></textarea><br>

                            <input type="file" name="image" id="fileToUpload">

                            <br><br>
                            <input type="submit" value="publier" class="btn btn-info">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection