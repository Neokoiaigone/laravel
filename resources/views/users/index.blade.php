@extends('layouts.app')
@section('content')


    <!-- Navigation -->
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" ></header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 ">
                <div class="post-preview">
                    <h2>La communauté</h2>
                    @include('messages.success')
                    @include('messages.error')
                    @foreach($users as $user)
                        <a href="{{ route('user.show', $user->id) }}">
                            <div class="post-title z-depth-4 col l4 m6 s12">
                                <h2>
                                    {{$user->name}}
                                </h2>
                            </div>
                        </a>

                    @endforeach
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