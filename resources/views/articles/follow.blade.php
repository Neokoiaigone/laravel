@extends('layouts.app')
@section('content')


    <!-- Navigation -->
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header">

    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 ">
                <div class="post-preview">
                    <h2>Vos articles suivis</h2>
                    @include('messages.success')
                    @include('messages.error')
                    <?php $a = 0; ?>
                    @foreach($articles as $article)
                        @if($article->liked())
                            <a href="{{ route('article.show', $article->id) }}">
                                <div class="post-title z-depth-4">
                                    <img src="{!! '/uploads/'.$article->image !!}">
                                    <h2>
                                        {{$article->title}}
                                    </h2>

                                    <p class="post-meta">Posté par : {{ $article->user->name }}
                                        le {{$article->created_at}}</p>
                                </div>
                            </a>
                            <?php $a += 1; ?>
                        @endif

                    @endforeach

                    @if($a == 0)
                        <p>Vous suivez aucun défi !</p>
                    @endif


                    {{$articles->links()}}
                </div>
                <hr>
            </div>
            <hr>
            <!-- Pager -->
        </div>
    </div>
    </div>

    <hr>



    @endsection
    </body>
    </html>