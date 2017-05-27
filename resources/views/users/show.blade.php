@extends('layouts.app')
@section('content')


    <!-- Navigation -->
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header"></header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 ">
                <div class="post-preview card" style="margin-top: 5%;">
                    @include('messages.success')
                    @include('messages.error')
                    @if(Auth::user()->id == $user->id)
                        <div class="col l6 m6 s12">
                            <h2 class="content-heading">Vos informations</h2>
                            <ul>
                                <p>Nom : {{ $user->name }}</p>
                                <p>Email : {{ $user->email }}</p>
                                <p>Date de création : {{ $user->created_at }}</p>
                            </ul>
                        </div>
                        <div class="col l6 m6 s12">
                            <h2 class="content-heading">Vos défis partagés</h2>
                            <ul>
                                @forelse(Auth::user()->articles as $article)
                                    <li class="article"><a
                                                href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
                                    </li>
                                @empty
                                    Vous n'avez pas encore partagé de défi.
                                @endforelse
                            </ul>
                        </div>
                    @else
                        <div class="col l6 m6 s12">
                            <h2 class="content-heading">Informations</h2>
                            <ul>
                                <p>Nom : {{ $user->name }}</p>
                                <p>Date de création : {{ $user->created_at }}</p>
                            </ul>
                        </div>

                        <div class="col l6 m6 s12">
                            <h2 class="content-heading">Ses défis partagés</h2>
                            <ul>
                                @forelse($user->articles as $article)
                                    <li class="article"><a
                                                href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
                                    </li>
                                @empty
                                    L'utilisateur a partagé aucun défi.
                                @endforelse
                            </ul>
                        </div>                    @endif
                </div>
                <hr>
            </div>
            <hr>
            <!-- Pager -->
        </div>
    </div>
    </div>
    @endsection
    </body>
    </html>