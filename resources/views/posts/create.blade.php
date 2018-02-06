@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Post</h1>
      <hr>

<!-- Formulario de inserçao de dados para a base de dados -->
      {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}

        <!-- Campo "Title" com validacao js "required" e "maxlength" -->
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'data-parsley-maxlength' => '255']) }}

        <!-- Campo "Post" com validacao js "required" -->
        {{ Form::label('body', 'Post:') }}
        {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}
      <br>
        {{ Form::submit('Create Post', ['class' => 'btn btn-success btn-block']) }}

      {!! Form::close() !!}
<!-- Fim de Formulario -->

    </div>
  </div>

@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js') !!}
@endsection
