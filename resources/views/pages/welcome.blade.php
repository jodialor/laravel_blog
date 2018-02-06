@extends('main')

@section('title', '| Homepage')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Bem-vindo ao meu blog!!</h1>
            <p class="lead">Obrigado pela visita! Este é um website de teste usando Laravel.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div> <!-- end of header .row -->

      <div class="row">
        <div class="col-md-8">

          @foreach ($posts as $post)

            <div class="post">
              <h3>{{ $post->title }}</h3>
              <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
              <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More</a>
            </div>

            <br>
          @endforeach


        </div>

        <div class="col-md-3 col-md-offset-1" style="background-color:gray;">
          <h2>Sidebar</h2>
          <p style="color:white;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
@stop
